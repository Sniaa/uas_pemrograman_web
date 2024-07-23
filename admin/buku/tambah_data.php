<link rel="stylesheet" href="../../css/form.css">
  <div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h5>Tambah Data Buku</h5>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <form action="proses.php" method="post">
            <div class="form-group">
              <label for="judul_buku">judul Buku</label>
              <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
            </div>
            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="form-group">
            <label for="kode_penulis">Nama Penulis</label>
            <select class="form-control" id="kode_penulis" name="kode_penulis" required>
              <?php
              require_once "../../conf/koneksi.php";
              $query = "SELECT * FROM penulis";
              $result = mysqli_query($koneksi, $query);
              while ($data = mysqli_fetch_array($result)) {
                echo "<option value='".$data['kode_penulis']."'>".$data['kode_penulis']." - ".$data['nama_penulis']."</option>";
              }
            ?>
            </select>
            </div>
            <div class="form-group">
              <label for="kode_penerbit">Nama Penerbit</label>
              <select class="form-control" id="kode_penerbit" name="kode_penerbit" required>
                <?php
                require_once "../../conf/koneksi.php";
                $query = "SELECT * FROM penerbit";
                $result = mysqli_query($koneksi, $query);
                while ($data = mysqli_fetch_array($result)) {
                  echo "<option value='".$data['kode_penerbit']."'>".$data['kode_penerbit']." - ".$data['nama_penerbit']."</option>";
                }
               ?>
              </select>
            </div>
            <div class="form-group">
              <label for="kode_kategori">Kategori</label>
              <select class="form-control" id="kode_kategori" name="kode_kategori" required>
                <?php
                require_once "../../conf/koneksi.php";
                $query = "SELECT * FROM kategori";
                $result = mysqli_query($koneksi, $query);
                while ($data = mysqli_fetch_array($result)) {
                  echo "<option value='".$data['kode_kategori']."'>".$data['kode_kategori']." - ".$data['nama_kategori']."</option>";
                }
               ?>
              </select>
            </div>
            <div class="form-group">
              <label for="tgl_terbit">tgl terbit</label>
              <input type="text" class="form-control" id="tgl_terbit" name="tgl_terbit" required>
            </div>
            <div class="form-group">
              <label for="jumlah_halaman">jumlah halaman</label>
              <input type="text" class="form-control" id="jumlah_halaman" name="jumlah_halaman" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>