<?php
include 'includes/config.php'; 

if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Check if the login credentials belong to an admin
    $query = "SELECT * FROM admins WHERE login = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->fetch_all(MYSQLI_ASSOC);
  
    


    if ($result->num_rows === 1) {
        // Admin login successful, redirect to admin dashboard
        header("Location: dashboard/category.php");
        exit();
    }

    // If not found in admins table, check users table for regular user login
    $query = "SELECT * FROM users WHERE login = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    if ($result->num_rows === 1) {
        // Regular user login successful, redirect to user dashboard
        header("Location: user.php");
        exit();
    }

    // If not found in either table, display error or redirect to login page
    echo "error";
}