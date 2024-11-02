<?php
 $query = "SELECT * FROM nama_tabel"; 
 $result = $mysqli->query($query); 
  while ($row = $result->fetch_assoc()) { 
 echo $row['nama_kolom']; 
  }
?>