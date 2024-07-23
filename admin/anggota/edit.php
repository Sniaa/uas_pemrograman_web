<?php
require_once "../../conf/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM anggota WHERE kode_anggota = '$id'");
    $data = mysqli_fetch_array($tampil);
} else {
    header('Location: ../anggota.php');
    exit;
}
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Anggota</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="simpan_edit.php" method="post">
                        <input type="hidden" name="kode_anggota" value="<?php echo $data['kode_anggota']; ?>">
                        <div class="form-group">
                            <label for="nama_anggota">Nama Anggota</label>
                            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="<?php echo $data['nama_anggota']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Laki-laki" <?php if ($data['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                                <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat_anggota">Alamat Anggota</label>
                            <textarea class="form-control" id="alamat_anggota" name="alamat_anggota"><?php echo $data['alamat_anggota']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="telp_anggota">Kontak Anggota</label>
                            <input type="text" class="form-control" id="telp_anggota" name="telp_anggota" value="<?php echo $data['telp_anggota']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>