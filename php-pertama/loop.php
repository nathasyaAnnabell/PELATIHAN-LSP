<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>

<body>
    <table border="1" cellpadding="5">
        <?php

        for ($baris = 1; $baris <= 3; $baris++) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= $kolom; $j++) {
                echo "<td>Baris $baris, Kolom $kolom</td>";
            }
            echo "<tr>";
        }
        ?>
    </table>
</body>

</html>