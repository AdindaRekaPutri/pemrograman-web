
 <?php

//  // PDO
// try { 
//      $pdo = new PDO("mysql:host=nama_host;dbname=nama_database", "username", 
// "password"); 
//  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//  echo "Koneksi ke database berhasil."; 
//  } catch (PDOException $e) { 
//  echo "Koneksi gagal: " . $e->getMessage(); 
//  } 
 // msqli
 $mysqli = new mysqli("localhost", "root","","mahasiswa"); 
   
  if ($mysqli->connect_error) { 
  die("Koneksi gagal: " . $mysqli->connect_error); 
 } else { 
 echo "Koneksi ke database berhasil."; 
 } 
 ?>