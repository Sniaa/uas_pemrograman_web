<?php

include "../../conf/koneksi.php";

if (isset($_GET['kode_buku'])) {
    $id = $_GET['kode_buku'];
    $query = "DELETE FROM buku WHERE kode_buku='$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='../buku.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location.href='../buku.php';</script>";
    }
}
?>
