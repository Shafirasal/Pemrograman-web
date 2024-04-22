<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Simulasi validasi login
if ($username === 'shafira' && $password === '123') {
    $_SESSION['username'] = $username; //mengatur sesi(menyimpan data username)
    
    // Set cookies
    $cookie_name = "user";
    $cookie_value = $username;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day (30 hari)
    
    echo 'success';
} else {
    echo 'error';
}
?>
