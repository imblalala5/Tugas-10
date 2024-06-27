<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai:</label>
        <input type="number" name="nilai" id="nilai" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        if ($nilai >= 80 && $nilai <= 100) {
            $grade = "A";
            $status = "LULUS";
        } elseif ($nilai >= 70 && $nilai < 80) {
            $grade = "B";
            $status = "LULUS";
        } elseif ($nilai >= 60 && $nilai < 70) {
            $grade = "C";
            $status = "LULUS";
        } elseif ($nilai >= 50 && $nilai < 60) {
            $grade = "D";
            $status = "TIDAK LULUS";
        } else {
            $grade = "E";
            $status = "TIDAK LULUS";
        }

        echo "Nilai Anda: $nilai<br>";
        echo "Nilai Huruf Anda: $grade<br>";
        echo "Status: Anda $status";
    }
    ?>
</body>
</html>
