<?php

include "../../conf/koneksi.php";

if (isset($_GET['kode_anggota'])) {
    $id = $_GET['kode_anggota'];
    $query = "DELETE FROM anggota WHERE kode_anggota='$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='../anggota.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location.href='../anggota.php';</script>";
    }
}
?>
