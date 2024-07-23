<?php
require_once "../../conf/koneksi.php";

$kode_anggota = $_POST['kode_anggota'];
$kode_transaksi = $_POST['kode_transaksi'];
$query = "INSERT INTO master_transaksi (kode_anggota,kode_transaksi) 
          VALUES ('$kode_anggota', '$kode_transaksi')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='../master_transaksi.php';</script>";
    } else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>