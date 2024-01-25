<?php
session_start();
require "functions.php";

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

$id = $_GET["id"];

// query item dari id
$item = query("SELECT * FROM keranjang WHERE id = $id")[0];

if (!isset($id)) {
	header("Location: summary.php");
} else {
	if (isset($_POST["submit"])) {
		global $conn;

		$size = $_POST["size"];
		$qty = $_POST["quantity"];

		// query insert data
		$query = "UPDATE keranjang SET 
		quantity = '$qty',
		size = '$size'
		WHERE id = $id
		";

		mysqli_query($conn, $query);

		header("Location: summary.php");
	}
}


include "header.php";
?>
        <!--  -->
    </div>
    <div class="cekout">
        <img id="pic" src="img/<?= $item["gambar"] ?>" alt="Joji" style="margin-right: 1em;">
        <div class="details">
			<form action="" method="POST">
				<p style="color: white; font-size: 1.4em;"><?= $item["nama_produk"] ?></p><br>
				<label for="size">Size</label><br>
				<select name="size" id="size" class="select">
					<option value="m">M</option>
					<option value="s">S</option>
					<option value="l">L</option>
					<option value="xl">XL</option>
				</select><br>
				<label for="quantity">Quantity</label> <br>
				<input type="number" id="quantity" name="quantity" min="1" max="99" class="select" value="1"><br><br>
				<button type="submit" name="submit">SUBMIT</button>
			</form>
        </div>
    </div>
    <!-- footer -->
    <?php
	include "footer.php";
	?>