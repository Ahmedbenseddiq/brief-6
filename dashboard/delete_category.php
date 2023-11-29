<?php
include_once '../includes/config.php';

if (isset($_POST['delete_category'])) {
    $category_id = $_POST['category_id'];

    // Perform deletion query
    $delete_query = "DELETE FROM categories WHERE category_id = '$category_id'";
    
    if (mysqli_query($conn, $delete_query)) {
        // Deletion successful
        header("Location: category.php"); // Redirect to categories page after deletion
        exit();
    } else {
        // If deletion fails
        echo "Error deleting category: " . mysqli_error($conn);
    }
} else {
    // If the delete_category POST parameter is not set
    echo "No category to delete.";
}
?>
