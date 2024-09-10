<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        center{
            border-style: groove;
        }
        body{
            padding-left: 60ch;
            padding-right: 60ch;
        }
    </style>
</head>
<body>
    <center>
    <h2>Input Nilai Pemrograman Internet</h2>
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>
        
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required><br><br>
        
        <label for="nilai">Nilai (0-100):</label>
        <input type="number" name="nilai" min="0" max="100" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    </center>

    <center> 
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $nilai = $_POST['nilai'];
        $grade = "";

        if ($nilai >= 85) {
            $grade = "A";
        } elseif ($nilai >= 80) {
            $grade = "B+";
        } elseif ($nilai >= 75) {
            $grade = "B";
        } elseif ($nilai >= 70) {
            $grade = "C+";
        } elseif ($nilai >= 65) {
            $grade = "C";
        } elseif ($nilai >= 50) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        echo "<h3>Hasil:</h3>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "NIM: " . htmlspecialchars($nim) . "<br>";
        echo "Nilai Angka: " . htmlspecialchars($nilai) . "<br>";
        echo "Nilai Huruf: " . $grade . "<br>";
    }
    ?>
    </center>

</body>
</html>