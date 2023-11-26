<!DOCTYPE html>
<html>

<head></head>
<link rel="stylesheet" href="styles.css">
<?php
include_once("c_datamahasiswa.php");
$controller = new c_datamahasiswa();
$controller->invoke();
?>