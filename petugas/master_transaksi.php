<?php include('./navside.php')?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>transaksi 2</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <button type="button" class="btn btn-primary"><a href="pengembalian/tambah.php">Tambah Data</a></button>
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tgl Transaksi</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Anggota</th>
                                 </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once "../conf/koneksi.php";
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT mt.*, a.nama_anggota, b.status 
                                  FROM master_transaksi mt 
                                  JOIN anggota a ON mt.kode_anggota = a.kode_anggota
                                  JOIN detail_transaksi b ON mt.kode_transaksi = b.kode_transaksi
                                  WHERE b.status != 'di kembalikan'");
                                    while ($data = mysqli_fetch_array($tampil)) :?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td class="text-center"><?php echo $data['status'];?></td>
                                        <td class="text-center"><?php echo $data['tgl_kembali'];?></td>
                                        <td class="text-center"><?php echo $data['nama_anggota'];?></td>
                                        
                                    </tr>
                                <?php endwhile;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>
</div>