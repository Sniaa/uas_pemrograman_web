<?php
require_once "../../conf/koneksi.php";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $judul_buku = $_POST["judul_buku"];
  $isbn = $_POST["isbn"];
  $kode_penulis = $_POST["kode_penulis"];
  $kode_penerbit = $_POST["kode_penerbit"];
  $kode_kategori = $_POST["kode_kategori"];

 
  // Check if the kode_penulis exists in the penulis table
  $query = "SELECT * FROM penulis WHERE kode_penulis = '$kode_penulis'";
  $result = mysqli_query($koneksi, $query);
  if (mysqli_num_rows($result) > 0) {
    // Insert the data into the buku table
    $query = "INSERT INTO buku (judul_buku, isbn, kode_penulis, kode_penerbit, kode_kategori, tgl_terbit) 
    VALUES ('$judul_buku', '$isbn', '$kode_penulis', '$kode_penerbit', '$kode_kategori', NOW())";
    $result = mysqli_query($koneksi, $query);

    // Check if the data was inserted successfully
    if ($result) {
      echo "<script>alert('Data berhasil disimpan'); window.location.href='../buku.php';</script>";
    } else {
      echo "Error: ". mysqli_error($koneksi);
    }
  } else {
    echo "Error: Kode penulis tidak valid";
  }
}

// Close the database connection
mysqli_close($koneksi);
?>