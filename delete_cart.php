<?php
session_start();
require "functions.php";

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM keranjang WHERE id = $id");

    return mysqli_affected_rows($conn);
}

$id = $_GET["id"];

if (delete($id) > 0) {
    echo "
        <script>
        alert('Delete item success');
        document.location.href = 'summary.php';
        </script>
        "; 
} else {
    echo "
        <script>
        alert('Delete item failed');
        document.location.href = 'summary.php';
        </script>
        "; ;
}
?>