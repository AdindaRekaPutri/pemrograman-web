<?php
$buah = array(
    "apel",
    "pisang",
    "durian",
    "semangka",
    "manggis",
    "anggur",
);
foreach($buah as $buahan){
    echo $buahan.'<br>';
}
echo "<hr />";
$siswa = array ("nama" => "Dinda",
                "umur" => "20",
                "kota" => "Binjai",
                "jurusan" => "Sistem Informasi"
);

echo 'nama siswa :' .$siswa['nama'].'<br />';
echo 'umur siswa :' .$siswa['umur'].'<br />';
echo 'kota siswa :' .$siswa['kota'].'<br />';
echo 'jurusan siswa :' .$siswa['jurusan'].'<br />';

?>

<?php
// Array data siswa
$siswa = [
    ["nama" => "Dinda", "umur" => "20", "kota" => "Binjai", "jurusan" => "Sistem Informasi"]
];

// Mulai membuat tabel
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>No</th><th>Nama Siswa</th><th>umur</th><th>kota</th><th>jurusan</th></tr>";

// Looping untuk setiap siswa
foreach ($siswa as $key => $data) {
    $nomor = $key + 1; // Penomoran dimulai dari 1
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['umur']}</td>";
    echo "<td>{$data['kota']}</td>";
    echo "<td>{$data['jurusan']}</td>";
    echo "</tr>";
}

echo "</table>";
?>



<?php
 $nilai = array( 
 array(90, 85, 88), 
   array(78, 92, 87), 
   array(65, 70, 75) 
     ); 
    echo $nilai[0][0]; // Output: 90 (baris pertama, kolom pertama)
    ?>