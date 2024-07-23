<!-- tambah_data.php -->

<link rel="stylesheet" href="../../css/form.css">
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Penerbit</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="proses_tambah.php" method="post">
                        <div class="form-group">
                            <label for="nama_penerbit">Nama Penerbit</label>
                            <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat_penerbit">Alamat Penerbit</label>
                            <input type="text" class="form-control" id="alamat_penerbit" name="alamat_penerbit" required>
                        </div>
                        <div class="form-group">
                            <label for="telp_penerbit">Kontak Penerbit</label>
                            <input type="text" class="form-control" id="telp_penerbit" name="telp_penerbit" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>