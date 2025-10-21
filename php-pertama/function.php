<?php
function hitungLuasLingkaran($jariJari): float|int
{
    $phi = 3.14;
    $luas = $phi * $jariJari * $jariJari;
    return $luas;
}

function hitungKelilingLingkaran($jariJari): float|int
{
    $phi = 3.14;
    $keliling = 2 * $phi * $jariJari;
    return $keliling;
}

$jariJari = 14;

echo "Jari-jari lingkaran: " . $jariJari . " cm<br>";
echo "Luas lingkaran: " . hitungLuasLingkaran(jariJari: $jariJari) . " cm²<br>";
echo "Keliling lingkaran: " . hitungKelilingLingkaran(jariJari: $jariJari) . " cm";

?>