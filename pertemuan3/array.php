<?php
$buah = array(
"apel",
"pisang",
"durian",
"semangka",
"pepaya",
"manggis"
);
foreach($buah as $buahan){
echo $buahan.'<br>';
}
echo "<hr/>";
$siswa = array(
    "nama" => "Dinda",
    "umur" => "20 tahun",
    "kota" => "binjai",
    "jurusan" => "Sistem Informasi"
);
echo 'nama siswa :'.$siswa['nama'].'<br/>';
echo 'umur siswa :'.$siswa['umur'].'<br/>';
echo 'kota siswa :'.$siswa['kota'].'<br/>';
echo 'jurusan siswa :'.$siswa['jurusan'].'<br/>';
?>