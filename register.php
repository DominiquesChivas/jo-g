<?php
require "functions.php";

// cek apakah tombol register sudah ditekan
if (isset($_POST["register"])) {
    global $conn;

    // cek apakah ada baris yang terpengaruh
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Account create successfully');
        document.location.href = 'login.php';
        </script>";
    } else {
        echo mysqli_error($conn);
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
    <title>Joji - Register</title>
    
</head>
<body style="background-color: #ec3224;">

    <div class="container" style="background: #d04b90;">
        <div class="register-section">
            <p>Register</p>
            <form action="" method="post">
                <div class="form-register">
                    <div class="register-block">  
                        <input type="text" class="register-node" placeholder="Username" name="username" require minlength="8">
                        <input type="email" class="register-node" placeholder="Email" name="email" require>
                        <input type="number" class="register-node" placeholder="Phone Number" name="phone" require maxlength="12">
                    </div>
                    <div class="register-block">  
                        <input type="text" class="register-node" placeholder="Address" name="address" require>
                        <input type="password" class="register-node" placeholder="Password" name="password" require minlength="8">
                        <input type="password" class="register-node" placeholder="Confirm Password" name="password2" require> 
                    </div>
                </div>
                <button class="login-button button-register" style="background-color: #d04b90;" name="register" id="register">Register Now</button>
            </form>
            <p>Already have an account? Click <a href="login.php">here</a></p>
            <p style="margin: 1em auto;"><a href="#" onclick="history.back()">back</a></p>
        </div>
        <div>
            <img src="img/george2.jpg" alt="George">
        </div>
    </div>
    
</body>
</html>