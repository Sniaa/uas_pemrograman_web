<?php

include "../../conf/koneksi.php";

if (isset($_GET['kode_penulis'])) {
    $id = $_GET['kode_penulis'];
    $query = "DELETE FROM penulis WHERE kode_penulis='$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='../penulis.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location.href='../penulis.php';</script>";
    }
}
?>

