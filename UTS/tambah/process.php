<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Simulasi validasi login
if ($username === 'shafira' && $password === 'password') {
    $_SESSION['username'] = $username;
    echo 'success';
} else {
    echo 'error';
}
?>
