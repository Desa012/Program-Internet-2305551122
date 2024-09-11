<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

        <h1>Data Nilai Siswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Matematika</th>
                <th>Bahasa Inggris</th>
                <th>IPA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Andi</td>
                <td>85</td>
                <td>70</td>
                <td>80</td>
            </tr>
            <tr>
                <td>Budi</td>
                <td>60</td>
                <td>50</td>
                <td>65</td>
            </tr>
            <tr>
                <td>Cici</td>
                <td>75</td>
                <td>80</td>
                <td>70</td>
            </tr>
            <tr>
                <td>Dodi</td>
                <td>95</td>
                <td>85</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Eka</td>
                <td>50</td>
                <td>60</td>
                <td>55</td>
            </tr>
        </tbody>
    </table>

    <?php
        $siswa = [
            ["nama" => "Andi", "matematika" => 85, "bahasa_inggris" => 70, "ipa" => 80],
            ["nama" => "Budi", "matematika" => 60, "bahasa_inggris" => 50, "ipa" => 65],
            ["nama" => "Cici", "matematika" => 75, "bahasa_inggris" => 80, "ipa" => 70],
            ["nama" => "Dodi", "matematika" => 95, "bahasa_inggris" => 85, "ipa" => 90],
            ["nama" => "Eka", "matematika" => 50, "bahasa_inggris" => 60, "ipa" => 55]
        ];
        $total_lulus = 0;
        $total_tidak_lulus = 0;

        echo "<h2>Hasil Nilai Siswa</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Nama</th>
                <th>Nilai rata-rata</th>
                <th>Status</th>
                <th>Mata Pelajaran yang Harus Diperbaiki (Jika Tidak Lulus)</th>
            </tr>";

        // a) Perulangan untuk menghitung rata-rata nilai
        foreach ($siswa as $info) {
            $rata_rata = ($info['matematika'] + $info['bahasa_inggris'] + $info['ipa']) / 3;
            $rata_rata = round($rata_rata, 1  );

        // b) Status kelulusan siswa berdasarkan nilai rata-rata
            if ($rata_rata >= 75) {
                $status = "Lulus";
                $total_lulus++;
                $perbaikan = "-";
            } else {
                $status = "Tidak Lulus";
                $total_tidak_lulus++;

        // c) Mata pelajaran dengan nilai terendah untuk siswa yang tidak lulus
                $nilai_terendah = min($info['matematika'], $info['bahasa_inggris'], $info['ipa']);
                if ($nilai_terendah == $info['matematika']) {
                    $perbaikan = "Matematika";
                } elseif ($nilai_terendah == $info['bahasa_inggris']) {
                    $perbaikan = "Bahasa Inggris";
                } else {
                    $perbaikan = "IPA";
                }
            }

        // d) Mencetak hasil program
        echo "<tr>
                <td>{$info['nama']}</td>
                <td>{$rata_rata}</td>
                <td>{$status}</td>
                <td>{$perbaikan}</td>
            </tr>";
        }
        echo "</table>";

        // e) Menampilkan total siswa yang lulus dan tidak lu
        echo "<h3>Jumlah Total Siswa</h3>";
        echo "<p>Total Lulus: $total_lulus</p>";
        echo "<p>Total Tidak Lulus: $total_tidak_lulus</p>";
    ?>

</body>
</html>
