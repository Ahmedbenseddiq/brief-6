<?php
include_once '../includes/config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Check if a product ID is sent
    if(isset($_POST['reference'])) {
       
        $reference = $_POST['reference'];
        $sql = "DELETE FROM products WHERE reference = '$reference'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Product deleted successfully.";
            header("Location: product.php");
            
        } else {
            echo "Error deleting product: " . mysqli_error($conn);
        }
    } else {
        echo "No product Reference provided.";
    }
}
?>
