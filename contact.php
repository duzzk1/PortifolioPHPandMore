<?php
session_start();
    if (isset($_SESSION['login'])) {
        include './pages/contactArea.php';
    } else {
        include './pages/loginArea.php';
    }