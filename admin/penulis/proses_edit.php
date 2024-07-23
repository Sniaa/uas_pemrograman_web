<!-- proses_edit_penulis.php -->

<?php
require_once "../../conf/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_penulis = $_POST["kode_penulis"];
    $nama_penulis = $_POST["nama_penulis"];
    $alamat_penulis = $_POST["alamat_penulis"];
    $telp_penulis = $_POST["telp_penulis"];

    $query = "UPDATE penulis SET nama_penulis = '$nama_penulis', alamat_penulis = '$alamat_penulis', telp_penulis = '$telp_penulis' 
    WHERE kode_penulis = '$kode_penulis'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location:../penulis.php");
        exit;
    } else {
        echo "Error: ". mysqli_error($koneksi);
    }
}
?>

