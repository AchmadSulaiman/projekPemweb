<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<?php
if (isset($_POST['submit'])) {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    if ($_SESSION['username'] == 'admin' && $_SESSION['password'] == '1234') {
        header("Location: index.php");
    } else {
        echo "username atau password salah, Harap Coba Kembali<br>";
        echo "<form action='login.php'>";
        echo "<input type='submit' name='submit' value='Login Kembali'></form>";
    }
}
?>