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
   $email_check = mysqli_query($koneksi, "SELECT * FROM anggota WHERE email = '$email'");
   if (mysqli_num_rows($email_check) > 0) {
       echo "Error: Email already exists!";
   } else {
       $insert = mysqli_query($koneksi, "INSERT INTO anggota (nama_anggota, jenis_kelamin, alamat_anggota, telp_anggota, tempat_lahir, tgl_lahir, email, password, role) 
           VALUES ('$nama_anggota', '$jenis_kelamin', '$alamat_anggota', '$telp_anggota', '$tempat_lahir', '$tgl_lahir', '$email', '$password', '$role')");

       if ($insert) {
           header('Location: index.php');
           exit;
       } else {
           echo "Error registering anggota: ". mysqli_error($koneksi);
       }
   }
}
?>

<link rel="stylesheet" href="css/form.css">
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Register Anggota</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="proses_register.php" method="post">
                        <div class="form-group">
                            <label for="nama_anggota">Nama Anggota</label>
                            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="">Select</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat_anggota">Alamat Anggota</label>
                            <textarea class="form-control" id="alamat_anggota" name="alamat_anggota" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="telp_anggota">Kontak Anggota</label>
                            <input type="text" class="form-control" id="telp_anggota" name="telp_anggota" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div><div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role" required>
                                <option value="">Select</option>
                                <option value="anggota">Anggota</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>