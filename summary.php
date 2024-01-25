<?php
session_start();

require "functions.php";

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

error_reporting(E_ERROR | E_WARNING | E_PARSE);


$id = $_GET["id"];
	
// query data dari tabel keranjang
$produk = mysqli_query($conn, "SELECT * FROM produk WHERE id = $id");
$result = query("SELECT * FROM keranjang");

$arr_nama = array_column($result, "nama_produk");


// cek apakah id ada
if (!isset($id)) {
	if ( count($result) == 0) {
		;
	}
} else {

	// tarik data dari $produk
	$get_produk = mysqli_fetch_assoc($produk);

	// set variabel untuk insert kedalam table keranjang
	$nama = $get_produk["nama_produk"];
	$harga = $get_produk["harga"];
	$qty = 1;
	$size = strtoupper("m");
	$gambar = $get_produk["gambar"];	
	
	// cek jika record sudah ada dalam table 
	if (in_array($nama, $arr_nama)) {
		echo "<script>alert('yes');</script>";
	} else {
		$query = "INSERT INTO keranjang VALUES 
		('', '$nama', '$harga', '$qty', '$size', '$gambar')
		";
	}

	// insert data ke keranjang
	mysqli_query($conn, $query);

	header("Location: summary.php");
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
	<title>It's Papa Franku</title>
</head>

<body>
    <div class="navbar color-merch">
		<!-- header -->
		<div>
			<a href="index.php"><p class="logo-navbar txt-merch">JOJI</p></a>
		</div>
		<div class="menu-merch">
			<ul class="color2">
				<li><a href="merchandise.php">Merchandise</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="summary.php">Cart</a></li>
				<li><a onclick="return confirm('Logout?');" href="logout.php">Logout</a></li>
			</ul>
		</div>
    </div>
        <!--  -->
    <div class="summary">
        <h2>CART</h2>
		<?php 
			if (!isset($id)) {
				if (count($result) == 0) : ?>
					<div style="height: 50vh; display: flex; margin:auto; justify-content: center; align-items: center;">
						<p>NO ITEM IN CART</p>
					</div>
				<?php else : ?>
					<div class="grid-container">
						<?php foreach ($result as $key) : ?>
							<div class="item">
								<img src="img/<?= $key["gambar"] ?>" alt="<?= $key["gambar"] ?>">
								<div class="summary-desc">
									<h3><?= $key["nama_produk"] ?></h3><br>
									<p>$ <?= $key["harga"] ?></p>
									<p>Quantity <?= $key["quantity"] ?></p><br>
									<p>Size <?= $key["size"] ?></p><br>
									<p>Price $ <?= $key["quantity"] * $key["harga"] ?></p><br>
									<a href="edit_item.php?id=<?= $key["id"] ?>" style="color: #ec3224;">Edit</a> |
									<a href="delete_cart.php?id=<?= $key["id"] ?>" style="color: #ec3224;" onclick="return confirm('Delete item?');">Delete</a> 
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="grand-total">
						<a href="checkout.php"><button>CHECK OUT</button></a>
					</div>
				<?php endif; ?>
			<?php }?>
			
    </div>
    <!-- footer -->
    <?php
	include "footer.php";
	?>