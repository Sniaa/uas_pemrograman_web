
<?php 
    require '../conf/koneksi.php';
?>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi, "SELECT * FROM anggota WHERE email='$email' and password='$password'");

        if (mysqli_num_rows($query) != 0) {
            $row = mysqli_fetch_assoc($query);

            $_SESSION['kode_anggota'] = $row['kode_anggota'];
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header('Location: ../admin/anggota.php');
                exit();
            } else if ($row['role'] == 'anggota') {
                header('Location: ../user/buku.php');
                exit();
            } else if ($row['role'] == 'petugas') {
                header('Location: ../petugas/detail_transaksi.php');
                exit();
            } else { 
                echo 'data tidak ditemukan';
            } 
        } else {
            echo 'data tidak ditemukan looo';
        }
    } else {
        echo 'email atau password tidak diisi';
    }
}
?>
