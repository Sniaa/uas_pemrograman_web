<!-- edit_penulis.php -->
<link rel="stylesheet" href="../../css/form.css">
<?php
require_once "../../conf/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM penulis WHERE kode_penulis = '$id'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result);

?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Edit penulis</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="proses_edit.php" method="post">
                        <input type="hidden" name="kode_penulis" value="<?php echo $data['kode_penulis']; ?>">
                        <div class="form-group">
                            <label for="nama_penulis">Nama penulis</label>
                            <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" value="<?php echo $data['nama_penulis']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_penulis">Alamat penulis</label>
                            <textarea class="form-control" id="alamat_penulis" name="alamat_penulis" required><?php echo $data['alamat_penulis']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="telp_penulis">Telepon penulis</label>
                            <input type="text" class="form-control" id="telp_penulis" name="telp_penulis" value="<?php echo $data['telp_penulis']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

