<?php
include 'koneksi.php';
$query = "SELECT * FROM biodata WHERE id= $_GET[id]";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Edit Mahasiswa</title>
</head>
<body>
<form action="<?= 'update.php?id='.$_GET['id'];?>" method="POST">
    <label for="npm">NPM</label>
    <input type="text" name="npm" value="<?= $row['npm'];?>" /><br>
    <label for="nama">NAMA</label>
    <input type="text" name="nama" value="<?= $row['nama'];?>"/><br>
    <label for="prodi">Prodi</label>

    <select name="prodi">
        <option value="Sistem Informasi (SI)">Sistem Informasi (S1)</option>
        <option value="Teknik Informatika (TI)">Teknik Informatika (SI)</option>
        <option value="Bisnis Digital (BD)">Bisnis Digital  (S1)</option>
        <option value="Manajemen Informatika (MI)">Manajemen Informatika  (D3)</option>
        <option value="Komputerasi Akuntansi (KA)">Komputerasi Akuntansi  (D3)</option>
    </select>
    <br>
</br>
    <input type="submit" value="Update" />
</form>
</body>
</html>