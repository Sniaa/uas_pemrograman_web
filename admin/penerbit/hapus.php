<?php

include "../../conf/koneksi.php";

if (isset($_GET['kode_penerbit'])) {
    $id = $_GET['kode_penerbit'];
    $query = "DELETE FROM penerbit WHERE kode_penerbit='$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='../penerbit.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location.href='../penerbit.php';</script>";
    }
}
?>

