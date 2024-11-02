<?php
include 'koneksi.php';

$id = $_POST['Id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];


$query = "UPDATE biodata SET 
    npm = '$npm', 
    nama = '$nama', 
    prodi = '$prodi',  
    WHERE id = $id";

$mysqli->query($query);

header("Location: index.php");
?>