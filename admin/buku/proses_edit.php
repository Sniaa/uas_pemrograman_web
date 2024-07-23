<?php
require_once "../../conf/koneksi.php";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $kode_buku = $_POST["kode_buku"];
  $judul_buku = $_POST["judul_buku"];
  $isbn = $_POST["isbn"];
  $kode_penulis = $_POST["kode_penulis"];
  $kode_penerbit = $_POST["kode_penerbit"];
  $kode_kategori = $_POST["kode_kategori"];

  // Update the data in the buku table
  $query = "UPDATE buku SET judul_buku = '$judul_buku', isbn = '$isbn', kode_penulis = '$kode_penulis', kode_penerbit = '$kode_penerbit', kode_kategori = '$kode_kategori' 
  WHERE kode_buku = '$kode_buku'";
  $result = mysqli_query($koneksi, $query);

  // Check if the data was updated successfully
  if ($result) {
    echo "<script>alert('Data berhasil diupdate'); window.location.href='../buku.php';</script>";
  } else {
    echo "Error: ". mysqli_error($koneksi);
  }
}

// Close the database connection
mysqli_close($koneksi);
?>