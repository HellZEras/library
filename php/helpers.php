
<?php 
    function initConn(){
        $conn = new PDO('mysql:host=localhost;dbname=Libary','root','');
        return $conn;
    }

?>