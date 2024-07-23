<?php
require_once "../../conf/koneksi.php";

$kode_transaksi = $_GET['kode_transaksi'];

$query = "SELECT * FROM detail_transaksi WHERE kode_transaksi = '$kode_transaksi'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result);
?>

<link rel="stylesheet" href="../../css/form.css">
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Pengembalian Buku</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <form action="proses_update.php" method="post">
                        <input type="hidden" name="kode_transaksi" value="<?php echo $data['kode_transaksi']; ?>">
                        <div class="form-group">
                        <label for="tgl_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?php echo isset($data['tgl_kembali']) ? $data['tgl_kembali'] : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_buku">Jumlah Buku</label>
                            <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="<?php echo $data['jumlah_buku']; ?>">
                        </div>
                        <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <?php if ($data != null) : ?>
                                <option value="di pinjam" <?php echo ($data['status'] == "di pinjam") ? "selected" : ""; ?>>Pinjam</option>
                                <option value="di kembalikan" <?php echo ($data['status'] == "di kembalikan") ? "selected" : ""; ?>>Kembali</option>
                            <?php else : ?>
                                <option value="di pinjam">Pinjam</option>
                                <option value="di kembalikan">Kembali</option>
                            <?php endif; ?>
                        </select>
                    </div>

                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>