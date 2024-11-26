
<?php 
    function initConn(){
        $conn = new PDO('mysql:host=localhost;dbname=Libary','root','');
        return $conn;
    }


    function displayShopBooks() {
        $isLoggedIn = isset($_SESSION['username']);
        
        if (!$isLoggedIn) {
            echo '<p style="color: red; text-align: center;">You must login to be able to purchase</p>';
            return;
        } else {
            try {
                $pdo = initConn();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $username = $_SESSION['username'];
                $stmt = $pdo->prepare("SELECT * FROM bookings WHERE username = :username");
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt->execute();
                $activeBooking = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if ($activeBooking) {
                    echo '<p style="color: red; text-align: center;">You cannot purchase books while having an active booking. Please return the book before making a new purchase.</p>';
                    return;
                }
    
                $stmt = $pdo->prepare("SELECT id, name, image, price, stock FROM books");
                $stmt->execute();
                $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                if ($books) {
                    foreach ($books as $book) {
                        $outOfStock = $book['stock'] <= 0;
    
                        echo '<div class="col-xl-3 col-lg-4 col-md-6">';
                        echo '<div class="destination-item th-ani">';
                        echo '<div class="destination-item_img global-img">';
                        echo '<img src="' . htmlspecialchars($book['image']) . '" alt="Book Image">';
                        echo '</div>';
                        echo '<div class="destination-content">';
                        echo '<h3 class="box-title">' . htmlspecialchars($book['name']) . '</h3>';
                        echo '<p class="destination-text">$' . htmlspecialchars($book['price']) . '</p>';
                        echo '<p class="destination-text">' . ($outOfStock ? 'Out of stock' : $book['stock'] . ' in stock') . '</p>';
    
                        if ($outOfStock) {
                            echo '<a href="#" class="th-btn style4 th-icon" style="pointer-events: none; opacity: 0.5;">Out of stock</a>';
                        } elseif (!$isLoggedIn) {
                            echo '<a href="#" class="th-btn style4 th-icon" style="pointer-events: none; opacity: 0.5;">Buy now</a>';
                        } else {
                            echo '<a href="checkout.php?book_id=' . htmlspecialchars($book['id']) . '" class="th-btn style4 th-icon">Buy now</a>';
                        }
    
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No books found</p>';
                }
            } catch (PDOException $e) {
                $error = "Database query failed: " . $e->getMessage();
                echo "<p style='color: red;'>Error: " . htmlspecialchars($error) . "</p>";
                exit();
            }
        }
    }
    

    function generate_profile() {
        if (!isset($_GET['username'])) {
            echo '<p style="color: red; text-align: center;">No username provided.</p>';
            return;
        }
    
        $username = $_GET['username'];
    
        try {
            $pdo = initConn();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $stmt = $pdo->prepare("SELECT username, first_name, last_name, email FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($user) {
                $booksStmt = $pdo->prepare("SELECT book_name, item_value FROM sales WHERE username = :username");
                $booksStmt->bindParam(':username', $username, PDO::PARAM_STR);
                $booksStmt->execute();
                $books = $booksStmt->fetchAll(PDO::FETCH_ASSOC);
    
                $bookingsStmt = $pdo->prepare("SELECT id, book_id, booking_date, return_date FROM bookings WHERE username = :username");
                $bookingsStmt->bindParam(':username', $username, PDO::PARAM_STR);
                $bookingsStmt->execute();
                $bookings = $bookingsStmt->fetchAll(PDO::FETCH_ASSOC);
    
                echo '<div class="container rounded bg-white mt-5 mb-5">';
                echo '<div class="row">';
    
                echo '<div class="col-md-12 border-right">';
                echo '<div class="d-flex flex-column align-items-center text-center p-3 py-5">';
                echo '<img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">';
                echo '<span class="font-weight-bold">' . htmlspecialchars($user['username']) . '</span>';
                echo '<span class="text-black-50">' . htmlspecialchars($user['email']) . '</span>';
                echo '</div>';
                echo '</div>';
    
                echo '<div class="col-md-12 border-right">';
                echo '<div class="p-3 py-5">';
                echo '<div class="d-flex justify-content-between align-items-center mb-3">';
                echo '<h4 class="text-right">Profile Settings</h4>';
                echo '</div>';
                echo '<div class="row mt-2">';
                echo '<div class="col-md-6"><label class="labels">First Name</label><input type="text" readonly class="form-control" value="' . htmlspecialchars($user['first_name']) . '"></div>';
                echo '<div class="col-md-6"><label class="labels">Last Name</label><input type="text" readonly class="form-control" value="' . htmlspecialchars($user['last_name']) . '"></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
    
                echo '<div class="col-md-12">';
                if (count($books) > 0) {
                    echo '<h5>Books Purchased:</h5>';
                    echo '<table class="table table-bordered">';
                    echo '<thead><tr><th>Book Name</th><th>Price</th></tr></thead>';
                    echo '<tbody>';
                    foreach ($books as $book) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($book['book_name']) . '</td>';
                        echo '<td>' . htmlspecialchars($book['item_value']) . '$</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p>No books purchased.</p>';
                }
                echo '</div>';
    
                echo '<div class="col-md-12">';
                if (count($bookings) > 0) {
                    echo '<h5>Bookings:</h5>';
                    echo '<div class="error-message" style="color: red; display: none;"></div>';
                    echo '<table class="table table-bordered">';
                    echo '<thead><tr><th>Book Name</th><th>Booking Date</th><th>Return Date</th><th>Action</th></tr></thead>';
                    echo '<tbody>';
    
                    foreach ($bookings as $booking) {
                        $bookStmt = $pdo->prepare("SELECT name FROM books WHERE id = :book_id");
                        $bookStmt->bindParam(':book_id', $booking['book_id'], PDO::PARAM_INT);
                        $bookStmt->execute();
                        $book = $bookStmt->fetch(PDO::FETCH_ASSOC);
    
                        $bookName = $book ? $book['name'] : 'Unknown';
    
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($bookName) . '</td>';
                        echo '<td>' . htmlspecialchars($booking['booking_date']) . '</td>';
                        echo '<td>' . htmlspecialchars($booking['return_date']) . '</td>';
                        echo '<td>';
                        echo '<button class="btn btn-danger btn-sm" onclick="handleReturnBooking(' . htmlspecialchars($booking['id']) . ', this)">Return</button>';
                        echo '</td>';
                        echo '</tr>';
                    }
    
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p>No bookings found.</p>';
                }
                echo '</div>';
    
                echo '</div>';
                echo '</div>';
            } else {
                echo '<p style="color: red; text-align: center;">User not found.</p>';
            }
        } catch (PDOException $e) {
            $error = "Database query failed: " . $e->getMessage();
            echo "<p style='color: red;'>Error: " . htmlspecialchars($error) . "</p>";
            exit();
        }
    }
    
    
    
    
    
    function displayReservationBooks() {
        $isLoggedIn = isset($_SESSION['username']);
        
        if (!$isLoggedIn) {
            echo '<p style="color: red; text-align: center;">You must login to be able to book</p>';
            return;
        } else {
            try {
                $pdo = initConn();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                $username = $_SESSION['username'];
                $stmt = $pdo->prepare("SELECT * FROM bookings WHERE username = :username");
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt->execute();
                $activeBooking = $stmt->fetch(PDO::FETCH_ASSOC);
    
                if ($activeBooking) {
                    echo '<p style="color: red; text-align: center;">You cannot make a new booking while having an active booking. Please return the book before making a new booking.</p>';
                    return;
                }
    
                $stmt = $pdo->prepare("SELECT id, name, image, price, stock FROM books");
                $stmt->execute();
                $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                if ($books) {
                    foreach ($books as $book) {
                        $outOfStock = $book['stock'] <= 0;
    
                        echo '<div class="col-xl-3 col-lg-4 col-md-6">';
                        echo '<div class="destination-item th-ani">';
                        echo '<div class="destination-item_img global-img">';
                        echo '<img src="' . htmlspecialchars($book['image']) . '" alt="Book Image">';
                        echo '</div>';
                        echo '<div class="destination-content">';
                        echo '<h3 class="box-title">' . htmlspecialchars($book['name']) . '</h3>';
                        echo '<p class="destination-text">$' . htmlspecialchars($book['price']) . '</p>';
                        echo '<p class="destination-text">' . ($outOfStock ? 'Out of stock' : $book['stock'] . ' in stock') . '</p>';
    
                        if ($outOfStock) {
                            echo '<a href="#" class="th-btn style4 th-icon" style="pointer-events: none; opacity: 0.5;">Out of stock</a>';
                        } elseif (!$isLoggedIn) {
                            echo '<a href="#" class="th-btn style4 th-icon" style="pointer-events: none; opacity: 0.5;">Book now</a>';
                        } else {
                            echo '<a href="contact_res.php?book_id=' . htmlspecialchars($book['id']) . '" class="th-btn style4 th-icon">Book now</a>';
                        }
    
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No books found</p>';
                }
            } catch (PDOException $e) {
                $error = "Database query failed: " . $e->getMessage();
                echo "<p style='color: red;'>Error: " . htmlspecialchars($error) . "</p>";
                exit();
            }
        }
    }
    
?>