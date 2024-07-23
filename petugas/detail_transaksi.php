<?php include('./navside.php')?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Detail Peminjaman</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama peminjam</th>
                                    <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Buku</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Peminjaman</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Kembali</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Buku</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once "../conf/koneksi.php";
                                $no = 1;
                                $query = "SELECT anggota.nama_anggota, buku.judul_buku, detail_transaksi.tgl_pinjam, detail_transaksi.tgl_kembali, detail_transaksi.jumlah_buku, detail_transaksi.status 
                                            FROM detail_transaksi 
                                            JOIN anggota ON detail_transaksi.kode_transaksi 
                                            IN (SELECT kode_transaksi FROM master_transaksi WHERE master_transaksi.kode_anggota = anggota.kode_anggota ) 
                                            JOIN buku ON detail_transaksi.kode_buku = buku.kode_buku
                                            WHERE detail_transaksi.status != 'di kembalikan'";
                                $result = mysqli_query($koneksi, $query);
                                while ($data = mysqli_fetch_array($result)) : ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $data['nama_anggota']; ?></td>
                                        <td class="text-center"><?php echo $data['judul_buku']; ?></td>
                                        <td class="text-center"><?php echo $data['tgl_pinjam']; ?></td>
                                        <td class="text-center"><?php echo $data['tgl_kembali']; ?></td>
                                        <td class="text-center"><?php echo $data['jumlah_buku']; ?></td>
                                        <td class="text-center"><?php echo $data['status']; ?></td>
                                        <td>
                                            <a href="detail_transaksi/edit.php?kode_transaksi=12345"">Edit</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
</div>
