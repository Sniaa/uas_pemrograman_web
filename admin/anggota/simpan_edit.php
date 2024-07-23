<?php
require_once "../../conf/koneksi.php";

if (isset($_POST['kode_anggota'])) {
    $kode_anggota = $_POST['kode_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat_anggota = $_POST['alamat_anggota'];
    $telp_anggota = $_POST['telp_anggota'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];

    $update = mysqli_query($koneksi, "
        UPDATE anggota 
        SET 
            nama_anggota = '$nama_anggota', 
            jenis_kelamin = '$jenis_kelamin', 
            alamat_anggota = '$alamat_anggota', 
            telp_anggota = '$telp_anggota', 
            tempat_lahir = '$tempat_lahir', 
            tgl_lahir = '$tgl_lahir', 
            email = '$email' 
        WHERE 
            kode_anggota = '$kode_anggota'
    ");

    if ($update) {
        header('Location: ../anggota.php');
        exit;
    } else {
        echo "Error updating data: " . mysqli_error($koneksi);
    }
}