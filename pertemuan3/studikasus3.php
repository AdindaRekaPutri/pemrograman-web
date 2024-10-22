<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Data Record System</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2><h1 style="background-color:DodgerBlue;">Sistem Pencatatan Data Penjualan</h1></h2>
<h2>Form Input Data Penjualan</h2>
<form method="POST">
    <label><b>Nama Produk: </label><input type="text" name="nama_produk" required><br></br></b>
    <label><b>Harga Per Produk: </label><input type="number" name="harga_produk" required><br></br></b>
    <label><b>Jumlah Terjual: </label><input type="number" name="jumlah_terjual" required><br></br></b>
    <button type="submit" name="submit"><b>Simpan</b></button>
</form>

<?php
session_start();

// Inisialisasi array jika belum ada
if (!isset($_SESSION['sales'])) {
    $_SESSION['sales'] = array();
}

// Jika form disubmit
if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $jumlah_terjual = $_POST['jumlah_terjual'];
    $total = $harga_produk * $jumlah_terjual;

    // Harga per produk
    $harga_per_produk = 000;


    // Simpan data ke array
    $_SESSION['sales'][] = array(
        'nama_produk' => $nama_produk,
        'harga_produk' => $harga_produk,
        'jumlah_terjual' => $jumlah_terjual,
        'total' => $total
    );
}
   
// Tampilkan data penjualan jika ada
if (!empty($_SESSION['sales'])) {
    echo "<h3>Laporan Penjualan:</h3>";
    echo "<table>
            <tr>
                <th>Nama</th>
                <th>Harga Per Produk</th>
                <th>Jumlah Terjual</th>
                <th>Total</th>
            </tr>";

    $total_penjualan = 0;
    $total_produk_terjual = 0;

    foreach ($_SESSION['sales'] as $sale) {
        echo "<tr>
                <td>{$sale['nama_produk']}</td>
                <td>{$sale['harga_produk']}</td>
                <td>{$sale['jumlah_terjual']}</td>
                <td>{$sale['total']}</td>
              </tr>";
        $total_penjualan += $sale['total'];
        $total_produk_terjual += $sale['jumlah_terjual'];
    }

    echo "<tr>
            <td colspan='2'>Total Penjualan</td>
            <td>{$total_produk_terjual}</td>
            <td>{$total_penjualan}</td>
          </tr>";
    echo "</table>";
}
?>

</body>
</html>