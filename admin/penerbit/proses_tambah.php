<!-- proses_tambah.php -->

<?php
require_once "../../conf/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_penerbit = $_POST["nama_penerbit"];
    $alamat_penerbit = $_POST["alamat_penerbit"];
    $telp_penerbit = $_POST["telp_penerbit"];

    $query = "INSERT INTO penerbit (nama_penerbit, alamat_penerbit, telp_penerbit) 
    VALUES ('$nama_penerbit', '$alamat_penerbit', '$telp_penerbit')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location:../penerbit.php");
        exit;
    } else {
        echo "Error: ". mysqli_error($koneksi);
    }
}
?>