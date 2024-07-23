<?php
require_once "../../conf/koneksi.php";

$kode_transaksi = $_POST['kode_transaksi'];
$kode_buku = $_POST['kode_buku'];
$tgl_kembali = $_POST['tgl_kembali'];
$jumlah_buku = $_POST['jumlah_buku'];
$status = $_POST['status'];

$query = "UPDATE detail_transaksi SET kode_buku = '$kode_buku', tgl_kembali = '$tgl_kembali', jumlah_buku = '$jumlah_buku', status = '$status' 
WHERE kode_transaksi = '$kode_transaksi'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Data berhasil diupdate!";
} else {
    echo "Gagal mengupdate data!";
}
?>