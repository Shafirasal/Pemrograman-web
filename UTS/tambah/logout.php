<?php
session_start(); //nyimpen data sesi
session_unset(); // menghapus semua variabel yang disimpan dalam sesi saat ini.
session_destroy(); //menghentikan dan menghapus sesi saat ini dari server
header('Location: index.html');
exit();
?>
