<!DOCTYPE html>
<html>
<head>
    <title>Segitiga Bintang</title>
</head>
<body>
    <form method="post" action="">
        <label for="tinggi">Masukkan Tinggi Segitiga:</label>
        <input type="number" name="tinggi" id="tinggi" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tinggi = intval($_POST['tinggi']);

        for ($baris = 1; $baris <= $tinggi; $baris++) {
            // Buat sejumlah spasi
            for ($i = 1; $i <= $tinggi - $baris; $i++) {
                echo "&nbsp;";
            }

            // Tampilkan bintang
            for ($j = 1; $j < 2 * $baris; $j++) {
                echo "*";
            }

            // Pindah baris
            echo "<br>";
        }
    }
    ?>
</body>
</html>
