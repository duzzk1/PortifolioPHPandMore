<?php
session_start();
    if (isset($_SESSION['login'])) {
        include './contactArea.php';
    } else {
        include './loginArea.php';
    }