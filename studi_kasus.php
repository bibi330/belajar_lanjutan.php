<?php
// Studi kasus 1
$umur = 23;

if ($umur >= 18) {
    echo "Anda sudah dewasa <br/>";
} else {
    echo "Anda masih anak-anak <br/>";
}

// Studi kasus 2
$panjang = 22;
$lebar = 0.4;
$luas = $panjang * $lebar;

echo "Luas persegi panjang adalah " . $luas . "<br/>";

//latihan

//buatkan code yg menghitung luas segitiga, dengan nilai alas = 11 dan tinggi =7
//buatkan code program login, dengan username = admin dan password xYe3i8vmp2
//buatkan ketentuan jika keduanya benar maka login berhasil

//1
$alas = 11;
$tinggi = 7;
$luas = $alas * $tinggi ;
echo "Hasil luas segitiga : " . $luas ."</br>";

//2
$username = "admin";
$password = "xYe3i8vmp2";

if ($username == "admin" && $password == "xYe3i8vmp2") {
    echo "Login berhasil";
} else {
    echo "Login gagal";
}

?>