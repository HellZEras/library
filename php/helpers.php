
<?php 
    function initConn(){
        $conn = new PDO('mysql:host=localhost;dbname=Libary','root','');
        return $conn;
    }


    function displayBooks() {
        session_start();
    
        $isLoggedIn = isset($_SESSION['username']);
    
        if (!$isLoggedIn) {
            echo '<p style="color: red; text-align: center;">You must login to be able to purchase</p>';
        }
    
        try {
            $pdo = initConn();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
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
                    echo '<h3 class="box-title"><a href="service-details.php?id=' . htmlspecialchars($book['id']) . '">' . htmlspecialchars($book['name']) . '</a></h3>';
                    echo '<p class="destination-text">$' . htmlspecialchars($book['price']) . '</p>';
                    echo '<p class="destination-text">' . ($outOfStock ? 'Out of stock' : $book['stock'] . ' in stock') . '</p>';
    
                    if ($outOfStock) {
                        echo '<a href="#" class="th-btn style4 th-icon" style="pointer-events: none; opacity: 0.5;">Out of stock</a>';
                    } elseif (!$isLoggedIn) {
                        echo '<a href="#" class="th-btn style4 th-icon" style="pointer-events: none; opacity: 0.5;">Book now</a>';
                    } else {
                        echo '<a href="checkout.php?book_id=' . htmlspecialchars($book['id']) . '" class="th-btn style4 th-icon">Book now</a>';
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
    
?>