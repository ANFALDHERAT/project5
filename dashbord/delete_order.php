<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $sql = "SELECT * FROM users";
$sql = "SELECT * FROM order_products";
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $order= $_POST["order_id"];
    
    // Perform a DELETE query to remove the product with the given user_id
    $deleteQuery = "DELETE FROM order_products WHERE order_id = $order";
    
    if ($conn->query($deleteQuery) === TRUE) {
        echo '<script>alert("order deleted successfully!");</script>';
        header("Location: Tables_Order.php");
        exit();
            } else {
        echo "Error deleting product: " . $conn->error;
    }
}
$conn->close();
?>