<!-- proses_tambah.php -->

<?php
require_once "../../conf/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_penulis = $_POST["nama_penulis"];
    $alamat_penulis = $_POST["alamat_penulis"];
    $telp_penulis = $_POST["telp_penulis"];

    $query = "INSERT INTO penulis (nama_penulis, alamat_penulis, telp_penulis) VALUES ('$nama_penulis', '$alamat_penulis', '$telp_penulis')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location:../penulis.php");
        exit;
    } else {
        echo "Error: ". mysqli_error($koneksi);
    }
}
?>

