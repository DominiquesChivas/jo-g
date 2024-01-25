<?php
session_start();
require "functions.php";

if (!isset($_SESSION["admin"])) {
	header("Location: admin_login.php");
	exit;
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pesanan WHERE order_id = $id");
    mysqli_query($conn, "DELETE FROM item_pesanan WHERE order_id = $id");

    return mysqli_affected_rows($conn);
}

$id = $_GET["order_id"];

if (delete($id) > 0) {
    echo "
    <script>
    alert('Delete record success');
    document.location.href = 'invoice_admin.php';
    </script>
    "; 
} else {
    echo "
    <script>
    alert('Delete record failed');
    document.location.href = 'invoice_admin.php';
    </script>
    "; 
}
?>