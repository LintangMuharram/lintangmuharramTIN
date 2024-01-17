<?php
include('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Mengambil nilai dari formulir tambah.php
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$tgl_dipinjam = $_POST['tgl_dipinjam'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
// Query untuk menambahkan data ke dalam tabel buku
$queryTambah = "INSERT INTO peminjaman (Nama, Judul, Tgl_Dipinjam, Tgl_Pengembalian)
VALUES ('$nama', '$judul', '$tgl_dipinjam', '$tgl_pengembalian')";
// Eksekusi query
if (mysqli_query($koneksi, $queryTambah)) {
// Jika berhasil, redirect ke halaman index.php
header("Location: index.php");
exit();
} else {
// Jika terjadi error, tampilkan pesan error
echo "Error: " . $queryTambah . "<br>" .
mysqli_error($koneksi);
}
} else {
// Jika bukan metode POST, redirect ke halaman tambah.php
header("Location: tambah.php");
exit();
}
?>