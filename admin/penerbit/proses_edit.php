<!-- proses_edit_penerbit.php -->

<?php
require_once "../../conf/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_penerbit = $_POST["kode_penerbit"];
    $nama_penerbit = $_POST["nama_penerbit"];
    $alamat_penerbit = $_POST["alamat_penerbit"];
    $telp_penerbit = $_POST["telp_penerbit"];

    $query = "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', alamat_penerbit = '$alamat_penerbit', telp_penerbit = '$telp_penerbit' 
    WHERE kode_penerbit = '$kode_penerbit'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location:../penerbit.php");
        exit;
    } else {
        echo "Error: ". mysqli_error($koneksi);
    }
}
?>

