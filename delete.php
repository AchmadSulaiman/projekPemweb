<?php
include "koneksi MVC.php";
$rs = $mysqli->query("DELETE FROM datamahasiswa WHERE No='$_GET[No]'");
header("location:index.php");