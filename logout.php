<?php
include "functions.php";

session_start();
$_SESSION = [];
session_unset();
session_destroy();

mysqli_query($conn, "DELETE FROM keranjang");

header("Location: login.php");
exit;
?>