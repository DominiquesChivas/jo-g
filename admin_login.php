<?php
session_start();
require "functions.php";

if (isset($_POST["login"])) {
    global $conn;

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admin_id WHERE email = '$email'");

    // cek email
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if ($password == $row["password"]) {
            // set session admin
            $_SESSION["admin"] = true;

            // masuk ke dalam dashboard admin
            header("Location: product_admin.php");
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Joji - Admin Login</title>
    
</head>
<body style="background-color: #ec3224;">

    <div class="container">
        <div>
            <img src="img/george2.jpg" alt="pink-season">
        </div>
        <div class="login-section">
            <p>Login</p>
            <div class="form-login">
                <form action="" method="post">
                    <input type="email" class="login-email" placeholder="Enter Email Address..." name="email" require><br><br>
                    <input type="password" class="login-email " placeholder="Password" name="password" require>
                    <button style="margin-bottom: 1em;" class="login-button button-login" type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>