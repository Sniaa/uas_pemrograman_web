<?php
require_once "../../conf/koneksi.php";

$kode_buku = $_POST['kode_buku'];
$tgl_kembali = $_POST['tgl_kembali'];
$jumlah_buku = $_POST['jumlah_buku'];
$status = $_POST['status'];

$query = "INSERT INTO detail_transaksi (kode_buku, tgl_pinjam, tgl_kembali, jumlah_buku, status) 
          VALUES ('$kode_buku', NOW(), '$tgl_kembali', '$jumlah_buku', '$status')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href='../peminjaman.php';</script>";
    } else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>