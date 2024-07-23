<?php include('navside.php') ?>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h5>Buku</h5>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ISBN</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Penulis</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Penerbit</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tgl Terbit</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Halaman</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
                require_once "../conf/koneksi.php";
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT b.*,pn.nama_penerbit,k.nama_kategori
                FROM buku b
                LEFT JOIN penerbit pn ON b.kode_penerbit = pn.kode_penerbit
                LEFT JOIN kategori k ON b.kode_kategori = k.kode_kategori");
                ?>
                <?php while ($data = mysqli_fetch_array($tampil)) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['judul_buku']; ?></td>
                    <td><?php echo $data['isbn']; ?></td>
                    <td><?php echo $data['nama_penerbit']; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td><?php echo $data['tgl_terbit']; ?></td>
                    <td><?php echo $data['jumlah_halaman']; ?></td>
                  </tr>
                  <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>

      <?php include('footer.php') ?>