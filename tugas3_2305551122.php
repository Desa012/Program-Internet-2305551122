<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penyalaan AC</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #4CAF50;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            text-align: left;
        }

        input[type="number"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 1.5rem;
            background-color: #e7f7e7;
            padding: 1rem;
            border-radius: 5px;
            border: 1px solid #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sistem Penyalaan AC</h2>
        <form action="" method="post">
            <label for="suhu">Suhu (Celsius): </label>
            <input type="number" name="suhu" required>

            <label for="lembab">Kelembaban: </label>
            <input type="number" name="lembab" required>

            <input type="submit" name="submit" value="Submit">
        </form>

        <div class="result">
            <?php
                if(isset($_POST["submit"])) {
                $suhu = $_POST["suhu"];
                $lembab = $_POST["lembab"];
                $hasil ="";

                if($suhu <= 20 && $lembab >= 50){
                    $hasil = "Mati";

                }elseif($suhu <= 24 && $lembab <= 49){
                    $hasil = "Menyala Ringan";

                }elseif($suhu <= 29 && $lembab <= 39){
                    $hasil = "Menyala Sedang";

                }elseif($suhu >= 30 && $lembab <= 25){
                    $hasil = "Menyala Berat";

                }else{
                    $hasil = "TIDAK MENYALA, karena jika suhu rendah maka kelembaban tinggi ataupun sebaliknya";
                }
                echo "<h3>Hasil:</h3>";
                echo "Suhu (Celsius): " . htmlspecialchars($suhu) . "<br>";
                echo "Kelembaban: " . htmlspecialchars($lembab) . "<br>";
                echo "Kondisi AC: " . $hasil . "<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>
