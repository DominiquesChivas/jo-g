<?php
session_start();
require "functions.php";

if (!isset($_SESSION["admin"])) {
	header("Location: admin_login.php");
	exit;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($conn);
}

$id = $_GET["id"];


if (hapus($id) > 0) {
    echo "
    <script>
    alert('Delete item success');
    document.location.href = 'user_admin.php';
    </script>
    "; 
} else {
    echo "
    <script>
    alert('Delete item failed');
    document.location.href = 'user_admin.php';
    </script>
    "; 
}

?>