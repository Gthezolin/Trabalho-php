<?php
session_start ();

$valid_user = "admin";
$valid_pass = "1234";

$username = $_POST['username'];
$password = $_POST['password'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = trim($_POST['username']);
$password= trim($_POST['password']);

if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['user'] = $username;
    header("location: dashboard.php");
    exit();
} else {
    header("location: login.html?error=invalid");
    exit();
    }
} else {
    header("Location: login.html");
    exit();
}
?>