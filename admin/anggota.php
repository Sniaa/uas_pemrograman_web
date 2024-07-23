
<?php include('./navside.php') ?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Data Anggota</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Kelamin</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kontak</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tempat Lahir</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tgl Lahir</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once "../conf/koneksi.php";
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT kode_anggota, nama_anggota, jenis_kelamin, alamat_anggota, telp_anggota, tempat_lahir, tgl_lahir, email 
                                FROM anggota WHERE role NOT IN ('admin', 'petugas')");

                                while ($data = mysqli_fetch_array($tampil)) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['nama_anggota']; ?></td>
                                        <td class="text-center"><?php echo $data['jenis_kelamin']; ?></td>
                                        <td class="text-center"><?php echo $data['alamat_anggota']; ?></td>
                                        <td class="text-center"><?php echo $data['telp_anggota']; ?></td>
                                        <td class="text-center"><?php echo $data['tempat_lahir']; ?></td>
                                        <td class="text-center"><?php echo $data['tgl_lahir']; ?></td>
                                        <td class="text-center"><?php echo $data['email']; ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-success" href="anggota/edit.php?id=<?=$data['kode_anggota'];?>" onclick="return confirm('Apakah Anda yakin ingin mengubah data ini?');">Edit</a>
                                            <a class="btn btn-danger" href="anggota/hapus.php?kode_anggota=<?=$data['kode_anggota'];?>" onclick="return confirm('Apakah Anda yakin?');">Hapus</a>
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
