<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Tambah Peminjaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tambah Peminjaman Buku</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>
<section>
<div class="form-container">
<!-- Formulir Tambah Data -->

<form action="proses_tambah_peminjaman.php" method="POST" class="add-
form">

    <div class="form-group">
        <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="judul">Judul Buku:</label>
            <input type="text" id="judul" name="judul">
    </div>
    <div class="form-group">
        <label for="tgl_dipinjam">Tanggal Dipinjam:</label>
            <input type="text" id="tgl_dipinjam" name="tgl_dipinjam">
    </div>
    <div class="form-group">
        <label for="tgl_pengembalian">Tanggal Pengembalian:</label>
            <input type="text" id="tgl_pengembalian" name="tgl_pengembalian">
    </div>
<button type="submit">Tambah</button>
</form>
</div>
</section>
<script src="script.js"></script>
</body>
</html>