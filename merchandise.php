<?php
session_start();

include "header.php";
require "functions.php";

// variabel untuk ambil data
$query = "SELECT * FROM produk";

// ambil data dari tabel produk
$result = mysqli_query($conn, $query);

// var_dump($produk);
?>
        <!--  -->
    </div>
    <div class="merch">
        <div class="cards">
            <?php while($produk = mysqli_fetch_assoc($result)) : ?>
                <a href="summary.php?id=<?= $produk["id"] ?>" onclick="return confirm('Add product to cart?')">
                     <div class="card">
                        <img src="img/<?= $produk["gambar"] ?>" alt="img/<?= $produk["gambar"] ?>">
                        <p><?= $produk["nama_produk"] ?></p>
                        <p>$ <?= $produk["harga"] ?></p>
                     </div>
                </a>
            <?php 
        endwhile; ?>
        </div>
    </div>
    <!-- footer -->
    <?php
	include "footer.php";
	?>