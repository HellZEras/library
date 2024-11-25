<?php
function displayBookDetails() {
    require('helpers.php');
    $pdo = initConn();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $stmt = $pdo->prepare("SELECT id, name, image, price, stock FROM books WHERE id = :id");
        $stmt->execute(['id' => $_GET['book_id']]);

        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($book) {
            echo '<table class="cart_table mb-20">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href="shop-details.php"><img width="91" height="91" src="' . htmlspecialchars($book['image']) . '" alt="Image"></a></td>
                            <td data-title="Name"><a class="cart-productname" href="shop-details.php">' . htmlspecialchars($book['name']) . '</a></td>
                            <td data-title="Price"><span class="amount"><bdi><span>' . htmlspecialchars($book['price']) . ' dt</span></bdi></span></td>
                            <td data-title="Quantity"><strong class="product-quantity">01</strong></td>
                            <td data-title="Total"><span class="amount"><bdi><span>' . htmlspecialchars($book['price']) . ' dt</span></bdi></span></td>
                        </tr>
                    </tbody>
                    <tfoot class="checkout-ordertable">
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal" colspan="4"><span class="woocommerce-Price-amount amount"><bdi><span>' . htmlspecialchars($book['price']) . ' dt</span></bdi></span></td>
                        </tr>
                        <tr class="woocommerce-shipping-totals shipping">
                            <th>Shipping</th>
                            <td data-title="Shipping" colspan="4">Enter your address to view shipping options.</td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total" colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi><span>' . htmlspecialchars($book['price']) . ' dt</span></bdi></span></strong></td>
                        </tr>
                    </tfoot>
                </table>';
        } else {
            echo '<p>No book found with the provided ID.</p>';
        }
    } catch (PDOException $e) {
        echo '<p class="error-debug">Error fetching book details: ' . htmlspecialchars($e->getMessage()) . '</p>';
    }
}
?>
