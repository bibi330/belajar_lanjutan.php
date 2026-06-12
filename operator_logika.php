<?php
$bener = true;
$salah = false;

$hasilDan = $bener && $salah; //hasilnya 0 atau koaong yaitu false (true jika keduanya benar)
$hasilAtau = $bener || $salah; //hasilnya 1 yaitu true (salah satu ada yang benar)
$hasilBukan = !$bener; //hasilnya yaitu true 

echo "Hasil Dan: " . ($hasilDan ? "true" : "false") . "<br>";
echo "Hasil Atau: " . ($hasilAtau ? "true" : "false") . "<br>";
echo "Hasil Bukan: " . ($hasilBukan ? "true" : "false") . "<br>";
?>