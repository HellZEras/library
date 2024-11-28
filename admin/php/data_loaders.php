<?php 
function initConn(){
    try {
        $conn = new PDO('mysql:host=localhost;dbname=library', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }
}

function getUserCount() {
    try {
        $conn = initConn();
        $query = "SELECT COUNT(*) as total_users FROM users";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total_users'] : 0;
    } catch (PDOException $e) {
        echo "Error fetching user count: " . $e->getMessage();
        return 0;
    }
}

function renderUserCountBlock() {
    $userCount = getUserCount();

    echo "
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-2 ps-3\">
              <div class=\"d-flex justify-content-between\">
                <div>
                  <p class=\"text-sm mb-0 text-capitalize\">Total Users</p>
                  <h4 class=\"mb-0\">$userCount</h4>
                </div>
                <div class=\"icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg\">
                  <i class=\"material-symbols-rounded opacity-10\">person</i>
                </div>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
          </div>
        </div>
    ";
}

function getBookingCount() {
    try {
        $conn = initConn();
        $query = "SELECT COUNT(*) as total_bookings FROM bookings";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total_bookings'] : 0;
    } catch (PDOException $e) {
        echo "Error fetching booking count: " . $e->getMessage();
        return 0;
    }
}

function renderBookingCountBlock() {
    $bookingCount = getBookingCount();

    echo "
        <div class=\"col-xl-3 col-sm-6 mb-xl-0 mb-4\">
          <div class=\"card\">
            <div class=\"card-header p-2 ps-3\">
              <div class=\"d-flex justify-content-between\">
                <div>
                  <p class=\"text-sm mb-0 text-capitalize\">books reserved</p>
                  <h4 class=\"mb-0\">$bookingCount book" . ($bookingCount == 1 ? '' : 's') . "</h4>
                </div>
                <div class=\"icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg\">
                  <i class=\"material-symbols-rounded opacity-10\">leaderboard</i>
                </div>
              </div>
            </div>
            <hr class=\"dark horizontal my-0\">
          </div>
        </div>
    ";
}
function getTotalProfit() {
    try {
        $conn = initConn();
        $query = "SELECT SUM(item_value) as total_profit FROM sales";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['total_profit'] : 0;
    } catch (PDOException $e) {
        echo "Error fetching total profit: " . $e->getMessage();
        return 0;
    }
}

function renderSalesBlock() {
  $totalProfit = getTotalProfit();
  $formattedProfit = number_format($totalProfit ?? 0, 2, '.', ',') . ' $'; 

  echo "
      <div class=\"col-xl-3 col-sm-6\">
        <div class=\"card\">
          <div class=\"card-header p-2 ps-3\">
            <div class=\"d-flex justify-content-between\">
              <div>
                <p class=\"text-sm mb-0 text-capitalize\">Sales</p>
                <h4 class=\"mb-0\">$formattedProfit</h4>
              </div>
              <div class=\"icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg\">
                <i class=\"material-symbols-rounded opacity-10\">weekend</i>
              </div>
            </div>
          </div>
          <hr class=\"dark horizontal my-0\">
        </div>
      </div>
  ";
}


function fetchBooks() {
    try {
        $conn = initConn();
        $query = "SELECT * FROM books";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error fetching books: " . $e->getMessage();
        return [];
    }
}

function updateBook($id, $name, $image, $price, $stock) {
    try {
        $conn = initConn();
        $query = "UPDATE books SET name = :name, image = :image, price = :price, stock = :stock WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':image', $image, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_INT);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Error updating book: " . $e->getMessage();
        return false;
    }
}

function renderBooksTable() {
  $books = fetchBooks();

  echo '<div id="message" style="display: none; padding: 10px; margin-top: 10px; border-radius: 5px;"></div>';
  echo '<table border="1" cellspacing="0" cellpadding="10">';
  echo '<thead>
          <tr>
              <th>Name</th>
              <th>Image</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Actions</th>
          </tr>
        </thead>';
  echo '<tbody>';
  foreach ($books as $book) {
      echo '<tr>';
      echo '<td><input type="text" id="name_' . $book['id'] . '" value="' . htmlspecialchars($book['name']) . '"></td>';
      echo '<td><input type="text" id="image_' . $book['id'] . '" value="' . htmlspecialchars($book['image']) . '"></td>';
      echo '<td><input type="number" id="price_' . $book['id'] . '" value="' . htmlspecialchars($book['price']) . '"></td>';
      echo '<td><input type="number" id="stock_' . $book['id'] . '" value="' . htmlspecialchars($book['stock']) . '"></td>';
      echo '<td>
              <button type="button" onclick="handleSaveClick(event, ' . $book['id'] . ')">Save</button>
              <button type="button" onclick="handleDeleteClick(event, ' . $book['id'] . ')">Delete</button>
            </td>';
      echo '</tr>';
  }

  echo '</tbody>';
  echo '</table>';
}

function deleteBook($id) {
  $db = initConn();
  $stmt = $db->prepare("DELETE FROM books WHERE id = ?");
  return $stmt->execute([$id]);
}

function renderAddBookForm() {
  echo '
      <div id="add-book-message" style="display: none; padding: 10px; margin-top: 10px; border-radius: 5px;"></div>
      <div style="display: flex; gap: 10px; align-items: center; margin-top: 20px;">
          <input type="text" id="book_name" placeholder="Book Name" style="flex: 1; padding: 5px;">
          <input type="text" id="book_image" placeholder="Image URL" style="flex: 1; padding: 5px;">
          <input type="number" id="book_price" placeholder="Price" style="flex: 1; padding: 5px;">
          <input type="number" id="book_stock" placeholder="Stock" style="flex: 1; padding: 5px;">
          <button type="button" onclick="handleAddBookClick(event)" style="padding: 5px 10px;">Add</button>
      </div>
  ';
}
function addBook($name, $image, $price, $stock) {
  try {
      $conn = initConn();
      $query = "INSERT INTO books (name, image, price, stock) VALUES (:name, :image, :price, :stock)";
      $stmt = $conn->prepare($query);

      $stmt->bindParam(':name', $name, PDO::PARAM_STR);
      $stmt->bindParam(':image', $image, PDO::PARAM_STR);
      $stmt->bindParam(':price', $price, PDO::PARAM_INT);
      $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);

      $stmt->execute();

      return [
          'success' => true,
          'message' => 'Book added successfully.'
      ];
  } catch (PDOException $e) {
      return [
          'success' => false,
          'message' => 'Error adding book: ' . $e->getMessage()
      ];
  }
}


?>
