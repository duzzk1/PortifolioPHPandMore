<?php
session_start();
require_once('../db/conn.php');
if (isset($_POST['register'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$user'";
    $stmt = conexao::connect()->prepare($query);
    $stmt->execute();
    if (!$stmt->rowCount()){
        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = conexao::connect()->prepare($query);
        $stmt->execute([$user, $pass]);
        header("Location: ../pages/contact.php ");
    } else {
        echo "<span style='color: red;'>User already exists!</span>";
    }
}
?>