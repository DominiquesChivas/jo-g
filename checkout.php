<?php
session_start();
include "header.php";
require "functions.php";

// query data keranjang
$produk = query("SELECT * FROM keranjang");
$total = 0;

// jika tabel keranjang kosong, masuk ke halaman summary.php
if (count($produk) == 0) {
	header("Location: summary.php");
	exit;
}

foreach ($produk as $key) {
	$x = $key["quantity"] * $key["harga"];

	$total = $total + $x;
}

$email = $_SESSION["email"];

// jika tombol order ditekan, catat pesanan dengan data user di table order
if (isset($_POST["order"])) {
	// query data user dengan nama email
	global $conn, $email, $produk;

	$get = query("SELECT * FROM user WHERE email = '$email'")[0];

	// tanggal
	$date = date("d-m-Y H:i:s");

	// set variabel untuk insert
	$id_user = $get["id"];


	mysqli_query($conn, "INSERT INTO pesanan
	VALUES 
	('', '$id_user', '$date')
	");

	// masukkan data dari keranjang ke tabel order_item dengan order_id
	// ambil data dari tabel pesanan dan tarik id
	$order_id = mysqli_query($conn, "SELECT * FROM pesanan WHERE order_id=(SELECT max(order_id) FROM pesanan)");
	$get_order_id = mysqli_fetch_assoc($order_id);

	

	// query nama_produk menjadi array
	foreach ($produk as $x) {
		$nama = $x["nama_produk"];
		$qty = $x["quantity"];
		$id = $get_order_id["order_id"];
		$price = $x["harga"];
		$sz = $x["size"];

		mysqli_query($conn, "INSERT INTO item_pesanan VALUES
		('', '$id', '$nama', '$qty', '$price', '$sz')
		");
	}

	if (mysqli_affected_rows($conn)) {
		// jika berhasil, hapus data dari table keranjang
		mysqli_query($conn, "DELETE FROM keranjang");

		echo "<script>
		alert('Order successfully recorded');
		document.location.href = 'summary.php';

		</script>";
	} else {
		// jika gagal, lompat ke halaman index.php
		echo "<script>
		alert('Order failed to record')
		document.location.href = 'index.php';
		</script>";
	}
}
?>

        <!--  -->
    </div>
    <div class="co">
		<table border="1" cellpadding="10" cellspacing="0" class="table">
			<tr>
				<th>No.</th>
				<th>Product Preview</th>
				<th>Product</th>
				<th>Quantity</th>
				<th>Size</th>
				<th>Price</th>
			</tr>
			<?php $i = 1; ?>
			<?php 
			foreach ($produk as $x) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td><img src="img/<?= $x["gambar"]; ?>" alt="cap" width="200"></td>
					<td><?= $x["nama_produk"] ?></td>
					<td><?= $x["quantity"] ?></td>
					<td><?= $x["size"] ?></td>
					<td>$ <?= $x["harga"] * $x["quantity"] ?></td>
				</tr>
			<?php $i++; ?>
			<?php endforeach?>
			<tr>
				<td colspan="5">TOTAL</td>
				<td>$ <?= $total ?></td>
			</tr>
		</table>
	</div>
	<form style="background-color: #191d26; display:flex; justify-content: right; " action="" method="POST">
		<div class="grand-total" style="margin: 1em;">
			<button name="order" type="submit">ORDER</button>
		</div>
	</form>
    <!-- footer -->
    <?php
	include "footer.php";
	?> 