<?php
include "koneksi MVC.php";
$e = $_POST['e'];
if (empty($e)) {
    $rs = $mysqli->query("INSERT INTO datamahasiswa VALUES('" . $_POST['No'] . "','" . $_POST['NIM'] . "','" . $_POST['Nama'] . "','" . $_POST['ProgramStudi'] . "','" . $_POST['Email'] . "')");
} else
    $rs = $mysqli->query("UPDATE datamahasiswa SET NIM = '$_POST[NIM]', Nama = '$_POST[Nama]', ProgramStudi = '$_POST[ProgramStudi]', Email = '$_POST[Email]'
WHERE NIM = '$_POST[NIM]'");
header("location:index.php");