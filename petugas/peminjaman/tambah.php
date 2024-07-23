<link rel="stylesheet" href="../../css/form.css">
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Detail Transaksi</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="proses_tambah.php" method="post">
                        <div class="form-group">
                            <label for="kode_buku">Nama Buku</label>
                            <select class="form-control" id="kode_buku" name="kode_buku">
                                <?php
                                require_once "../../conf/koneksi.php";
                                $query = "SELECT * FROM buku";
                                $result = mysqli_query($koneksi, $query);
                                while ($data = mysqli_fetch_array($result)) : ?>
                                    <option value="<?php echo $data['kode_buku']; ?>"><?php echo $data['judul_buku']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_kembali">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_buku">Jumlah Buku</label>
                            <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="di pinjam">pinjam</option>
                                <option value="di kembalikan">Kembali</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>