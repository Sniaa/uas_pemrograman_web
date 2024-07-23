<!-- edit_penerbit.php -->
<link rel="stylesheet" href="../../css/form.css">
<?php
require_once "../../conf/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM penerbit WHERE kode_penerbit = '$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result);

?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit Penerbit</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="proses_edit.php" method="post">
                        <input type="hidden" name="kode_penerbit" value="<?php echo $data['kode_penerbit']; ?>">
                        <div class="form-group">
                            <label for="nama_penerbit">Nama Penerbit</label>
                            <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?php echo $data['nama_penerbit']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_penerbit">Alamat Penerbit</label>
                            <textarea class="form-control" id="alamat_penerbit" name="alamat_penerbit" required><?php echo $data['alamat_penerbit']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="telp_penerbit">Telepon Penerbit</label>
                            <input type="text" class="form-control" id="telp_penerbit" name="telp_penerbit" value="<?php echo $data['telp_penerbit']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>