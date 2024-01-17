<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Buku</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<h1>Daftar Buku</h1>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="tambah.php">Tambah Buku</a></li>
<li><a href="tambah_anggota.php">Tambah Anggota</a></li>
<li><a href="tambah_peminjaman.php">Tambah Transaksi

Peminjaman</a></li>
</ul>
</nav>
</header>
<section>
<!-- Formulir Pencarian -->
<form action="index.php" method="GET" class="search-form">
<div class="search-container">
<input type="text" id="search" name="search" placeholder="Judul
Buku" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">

</div>
<button type="submit">Cari</button>
</form>

<!-- Tabel Daftar Buku -->
<table class="responsive-table">
<tr>
<th>ID Buku</th>
<th>Judul</th>
<th>Pengarang</th>
<th>Tahun Terbit</th>
<th>Aksi</th>
</tr>
<?php
include('koneksi.php');
// Logika Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM buku WHERE Judul LIKE '%$search%'";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>" . $row['BukuID'] . "</td>";
echo "<td>" . $row['Judul'] . "</td>";
echo "<td>" . $row['Pengarang'] . "</td>";
echo "<td>" . $row['TahunTerbit'] . "</td>";
echo "<td>";
echo "<a href='edit.php?id=" . $row['BukuID'] . "'>Edit</a>

| ";

echo "<a href='#' onclick='hapusBuku(" . $row['BukuID'] .

")'>Hapus</a>";

echo "</td>";
echo "</tr>";
}
?>
</table>

<!-- Tabel Daftar Anggota -->
<table class="responsive-table">
<tr>
<th>ID Anggota</th>
<th>Nama</th>
<th>Pekerjaan</th>
<th>Alamat</th>

</tr>
<?php
include('koneksi.php');
// Logika Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM anggota WHERE nama LIKE '%$search%'";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>" . $row['id_anggota'] . "</td>";
echo "<td>" . $row['nama'] . "</td>";
echo "<td>" . $row['pekerjaan'] . "</td>";
echo "<td>" . $row['alamat'] . "</td>";

}
?>
</table>

<!-- Tabel Daftar Anggota -->
<table class="responsive-table">
<tr>
<th>ID Peminjaman</th>
<th>Nama</th>
<th>Judul Buku</th>
<th>Tanggal Peminjaman</th>
<th>Tanggal Pengembalian</th>

</tr>
<?php
include('koneksi.php');
// Logika Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM peminjaman WHERE nama LIKE '%$search%'";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>" . $row['id_peminjaman'] . "</td>";
echo "<td>" . $row['nama'] . "</td>";
echo "<td>" . $row['judul'] . "</td>";
echo "<td>" . $row['tgl_dipinjam'] . "</td>";
echo "<td>" . $row['tgl_pengembalian'] . "</td>";

}
?>
</table>



</section>
<script src="script.js"></script>
<script>
function hapusBuku(bukuID) {
var konfirmasi = confirm("Apakah Anda yakin ingin menghapus

buku ini?");

if (konfirmasi) {
window.location.href = 'hapus.php?id=' + bukuID;
}
}
</script>
</body>
</html>