<link rel="stylesheet" href="../../css/form.css">
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h5>Edit Data Buku</h5>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <form action="proses_edit.php" method="post">
            <?php
            require_once "../../conf/koneksi.php";
            $kode_buku = $_GET['kode_buku'];
            $query = "SELECT * FROM buku WHERE kode_buku = '$kode_buku'";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_array($result);
            ?>
            <input type="hidden" name="kode_buku" value="<?php echo $data['kode_buku']; ?>">
            <div class="form-group">
              <label for="judul_buku">Judul Buku</label>
              <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $data['judul_buku']; ?>" required>
            </div>
            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $data['isbn']; ?>" required>
            </div>
            <div class="form-group">
              <label for="kode_penulis">Nama Penulis</label>
              <select class="form-control" id="kode_penulis" name="kode_penulis" required>
                <?php
                require_once "../../conf/koneksi.php";
                $query = "SELECT * FROM penulis";
                $result = mysqli_query($koneksi, $query);
                while ($data_penulis = mysqli_fetch_array($result)) {
                  $selected = ($data_penulis['kode_penulis'] == $data['kode_penulis']) ? 'selected' : '';
                  echo "<option value='".$data_penulis['kode_penulis']."' $selected>".$data_penulis['kode_penulis']." - ".$data_penulis['nama_penulis']."</option>";
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
                while ($data_penerbit = mysqli_fetch_array($result)) {
                  $selected = ($data_penerbit['kode_penerbit'] == $data['kode_penerbit']) ? 'selected' : '';
                  echo "<option value='".$data_penerbit['kode_penerbit']."' $selected>".$data_penerbit['kode_penerbit']." - ".$data_penerbit['nama_penerbit']."</option>";
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
                while ($data_kategori = mysqli_fetch_array($result)) {
                  $selected = ($data_kategori['kode_kategori'] == $data['kode_kategori']) ? 'selected' : '';
                  echo "<option value='".$data_kategori['kode_kategori']."' $selected>".$data_kategori['kode_kategori']." - ".$data_kategori['nama_kategori']."</option>";
                }
                ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>