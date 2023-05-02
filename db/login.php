<?php
require_once('../db/conn.php');
if (isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $stmt = conexao::connect()->prepare($query);
    $stmt->execute();
    if ($stmt->rowCount()){
        session_start();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $user = $row['username'];
        $pass = $row['password'];
        $_SESSION['login'] = $user;
        header("Location: ../index.html ");

    } else {
        echo "<span style='color: red;'>User not found!</span>";
    }
}
?>