<?php
$siswa = array(
    "nama" => "bibi",
    "usia" => 17,
    "kelas" => "X-RPL",
    "jurusan" => "RPL"
);

echo "Nama: " . $siswa["nama"] . "<br/>";
echo "Usia: " . $siswa["usia"] . " tahun<br/>";
echo "Kelas: " . $siswa["kelas"] . "<br/>";
echo "Jurusan: " . $siswa["jurusan"] . "<br/>";
?>

<?php
$buah = array("apel", "kesemek", "sirsak", "anggur");

foreach ($buah as $item) {
    echo $item . "<br>";
}
?>