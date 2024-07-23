
<?php include('./navside.php') ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Penerbit</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <button type="button" class="btn btn-primary"><a href="penerbit/tambah_data.php">Tambah Data</a></button>
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kontak</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once "../conf/koneksi.php";
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT * FROM penerbit");
                                    while ($data = mysqli_fetch_array($tampil)) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td class="text-center"><?php echo $data['nama_penerbit']; ?></td>
                                        <td class="text-center"><?php echo $data['alamat_penerbit']; ?></td>
                                        <td class="text-center"><?php echo $data['telp_penerbit']; ?></td>
                                        <td class="text-center">
                                            <a href="penerbit/edit.php?id=<?php echo $data['kode_penerbit']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="penerbit/hapus.php?kode_penerbit=<?php echo $data['kode_penerbit']; ?>" class="btn btn-danger btn-sm">hapus</a>
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
    <?php include('footer.php') ?>
</div>
