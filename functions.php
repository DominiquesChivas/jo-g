<?php

// koneksi kedatabase
$conn = mysqli_connect("localhost", "root", "", "joji_db");
// fungsi query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $id = $data["id"];
    $nama = $data["nama_produk"];
    $harga = $data["harga"];
    $gambar =$data["gambar"];
    $qty = 1;
    $size =strtoupper("m");

    // query insert data
    $query = "INSERT INTO keranjang
    VALUES
    ('$id', '$nama', '$harga', '$qty', '$size', '$gambar')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars( $data["nama_produk"]);
    $harga = htmlspecialchars( $data["harga"]);
    $gambar =htmlspecialchars( $data["gambar"]);

    // query insert data
    $query = "UPDATE produk SET 
    nama_produk = '$nama',
    harga = '$harga',
    gambar = '$gambar'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data) {
    global $conn;

    $username = htmlspecialchars(strtolower($data["username"]));
    $email = htmlspecialchars(strtolower($data["email"]));
    $phone = $data["phone"];
    $address = htmlspecialchars($data["address"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek apa username dan email sudah ada
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    $result2 = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('This username is not available');
        document.location.href = 'register.php';
        </script>";
        return false;
    }

    if (mysqli_fetch_assoc($result2)) {
        echo "<script>
        alert('This email is already registered');
        document.location.href = 'register.php';
        </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('Password confirmation not match');
        document.location.href = 'register.php';
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUE(
        '', '$username', '$email', '$phone', '$address', '$password'
    )");

    return mysqli_affected_rows($conn);
}

?>