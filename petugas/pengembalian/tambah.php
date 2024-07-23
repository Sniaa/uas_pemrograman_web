<link rel="stylesheet" href="../../css/form.css">
  <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Master Transaksi</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="proses_tambah.php" method="post">
                        <div class="form-group">
                            <label for="kode_anggota">Nama Anggota</label>
                            <select class="form-control" id="kode_anggota" name="kode_anggota">
                                <?php
                                require_once "../../conf/koneksi.php";
                                $query = "SELECT * FROM anggota";
                                $result = mysqli_query($koneksi, $query);
                                while ($data = mysqli_fetch_array($result)) : ?>
                                    <option value="<?php echo $data['kode_anggota']; ?>"><?php echo $data['kode_anggota'] . ' - ' . $data['nama_anggota']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kode_transaksi">Kode Transaksi</label>
                            <select class="form-control" id="kode_transaksi" name="kode_transaksi">
                                <?php
                                require_once "../../conf/koneksi.php";
                                $query = "SELECT * FROM detail_transaksi";
                                $result = mysqli_query($koneksi, $query);
                                while ($data = mysqli_fetch_array($result)) : ?>
                                    <option value="<?php echo $data['kode_transaksi']; ?>"><?php echo $data['kode_transaksi'] . ' - ' . $data['kode_buku']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>