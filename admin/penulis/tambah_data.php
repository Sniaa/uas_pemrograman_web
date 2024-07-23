<!-- tambah_data.php -->

<link rel="stylesheet" href="../../css/form.css">
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data penulis</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="proses_tambah.php" method="post">
                        <div class="form-group">
                            <label for="nama_penulis">Nama penulis</label>
                            <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_penulis">Alamat penulis</label>
                            <input type="text" class="form-control" id="alamat_penulis" name="alamat_penulis" required>
                        </div>
                        <div class="form-group">
                            <label for="telp_penulis">Kontak penulis</label>
                            <input type="text" class="form-control" id="telp_penulis" name="telp_penulis" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>