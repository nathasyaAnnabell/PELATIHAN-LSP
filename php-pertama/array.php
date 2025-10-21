<?php

function hitungRataRata($arrayNilai): float|int
{
    $jumlahNilai = array_sum(array: $arrayNilai);
    $banyakNilai = count(value: $arrayNilai);
    $rataRata = $jumlahNilai / $banyakNilai;
    return $rataRata;
}

function tentukanPredikat($rataRata): string
{
    if ($rataRata >= 90) {
        return "A";
    } elseif ($rataRata >= 80) {
        return "B";
    } elseif ($rataRata >= 70) {
        return "C";
    } elseif ($rataRata >= 60) {
        return "D";
    } else {
        return "E";
    }
}

$nilai = [76, 78, 80, 85, 90, 96];

$rataRata = hitungRataRata(arrayNilai: $nilai);
$predikat = tentukanPredikat(rataRata: $rataRata);

echo "Nilai Rata-Rata = " . number_format($rataRata, 2) . "<br>";
echo "Predikat = " . $predikat;

?>