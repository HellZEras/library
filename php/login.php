<?php 
require('helpers.php');
try {
   $conn = initConn();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>