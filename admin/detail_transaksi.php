
<?php include('./navside.php') ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Detail Transaksi</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama buku</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Peminjaman</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Kembali</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Buku</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once "../conf/koneksi.php";
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT dt.*, b.judul_buku AS nama_buku 
                                FROM detail_transaksi dt 
                                JOIN buku b ON dt.kode_buku = b.kode_buku");
                                while ($data = mysqli_fetch_array($tampil)) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $data['nama_buku']; ?></td>
                                        <td class="text-center"><?php echo $data['tgl_pinjam']; ?></td>
                                        <td class="text-center"><?php echo $data['tgl_kembali']; ?></td>
                                        <td class="text-center"><?php echo $data['jumlah_buku']; ?></td>
                                        <td class="text-center"><?php echo $data['status']; ?></td>
                                        
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</div>
