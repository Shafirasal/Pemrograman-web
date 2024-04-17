<?php
session_start();

// Simpan informasi login jika username dan password sesuai
$valid_username = 'admin';
$valid_password = 'password';

if(isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username === $valid_username && $password === $valid_password) {
    $_SESSION['username'] = $username;
    setcookie('username', $username, time() + (86400 * 30), '/'); // Cookie berlaku selama 30 hari
    echo json_encode(['status' => 'success']);
    exit;
  } else {
    echo json_encode(['status' => 'error', 'message' => 'Username atau password salah']);
    exit;
  }
}

// Logout pengguna
if(isset($_GET['action']) && $_GET['action'] === 'logout') {
  unset($_SESSION['username']);
  setcookie('username', '', time() - 3600, '/'); // Hapus cookie
  header('Location: index.html');
  exit;
}
?>
