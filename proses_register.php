<?php
require_once "conf/koneksi.php";

if (isset($_POST['nama_anggota'])) {
    $nama_anggota = $_POST['nama_anggota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat_anggota = $_POST['alamat_anggota'];
    $telp_anggota = $_POST['telp_anggota'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    // Check if email already exists
    $query = "SELECT * FROM anggota WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Email yg anda masukkan sudah terdaftar";
        exit;
    }

    $insert = mysqli_query($koneksi, "INSERT INTO anggota (kode_anggota, nama_anggota, jenis_kelamin, alamat_anggota, telp_anggota, tempat_lahir, tgl_lahir, email, password, role) 
        VALUES ('$kode_anggota','$nama_anggota', '$jenis_kelamin', '$alamat_anggota', '$telp_anggota', '$tempat_lahir', '$tgl_lahir', '$email', '$password', '$role')
    ");

    if ($insert) {
        header('Location: log/sing-in.php');
        exit;
    } else {
        echo "Error registering anggota: ". mysqli_error($koneksi);
    }
}