<?php
//operator perbandingan digunakan untuk membandingkan dua buah nilai
//(==sama dengan) (!=tidak sama dengan) (< kurang dari) (> lebih dari)
//(<= kurang dari sama dengan) (>= lebih dari sama dengan)

$nilai1 = 17;
$nilai2 = 3;

$samadengan = $nilai1 == $nilai2;
$tidaksamadengan = $nilai1 != $nilai2;
$kurangdari = $nilai1 < $nilai2;
$lebihdari = $nilai1 > $nilai2;
$kurangdariatausamadengan = $nilai1 <= $nilai2;
$lebihdariatausamadengan = $nilai1 >= $nilai2;

echo "sama dengan : " . $samadengan . "<br/>";
echo "tidak sama dengan : " . $tidaksamadengan . "<br/>";
echo "kurang dari : " . $kurangdari . "<br/>";
echo "lebih dari : " . $lebihdari . "<br/>";
echo "kurang dari atau sama dengan : " . $kurangdariatausamadengan . "<br/>";
echo "lebih dari atau sama dengan : " . $lebihdariatausamadengan . "<br/>";

?>