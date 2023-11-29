<?php
include 'includes/config.php';

if (isset($_POST['submit'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Assurez-vous que les mots de passe correspondent avant d'insérer dans la base de données
    if ($password === $confirmPassword) {

        // Créez une requête SQL d'insertion
        $insertQuery = "INSERT INTO users (full_name, email, login, password) VALUES ('$fullName', '$email', '$login', '$password')";

        // Exécutez la requête SQL
        if (mysqli_query($conn, $insertQuery)) {
            echo "Utilisateur enregistré avec succès dans la base de données.";
        } else {
            echo "Erreur lors de l'insertion des données : " . mysqli_error($conn);
        }
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}
