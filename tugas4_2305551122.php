<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<table border="1">
        <thead>
            <tr>
                <th>KELAS DAN OBJEK</th>
                <th>ENCAPSULATION</th>
                <th>PEWARISAN/INHERITANCE</th>
                <th>POLIMORFISME</th>
                <th>ABSTRACTION</th>
                <th>ACCESS MODIFIER</th>
                <th>REQUIRE ATAU INCLUDE</th>
                <th>spl_autoload_register</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                <?php
                    //KELAS DAN OBJEK
                    class Komputer {
                        // Properti
                        public $merek;
                        public $processor;
                    
                        // Method (fungsi)
                        public function hidupkanKomputer() {
                            return "Komputer dihidupkan!";
                        }
                    }
                    
                        // Membuat objek dari class Komputer
                        $komputerKu = new Komputer();
                        $komputerKu->merek = "Legion 5";
                        $komputerKu->processor = "Intel Core i7";
                        
                        // Mengakses properti dan metode
                        echo "<p>Merek: " . $komputerKu->merek . "</p>";
                        echo "<p>Processor: " . $komputerKu->processor . "</p>";
                        echo "<p>" . $komputerKu->hidupkanKomputer() . "</p>";
                ?>
                </td>

                <td>
                <?php
                    //CONTOH ENCAPSULATION
                    class Manusia {
                        private $nama;  // Hanya bisa diakses dari dalam class

                        public function setNama($nama) {
                            $this->nama = $nama;  // Mengatur nilai nama
                        }

                        public function getNama() {
                            return $this->nama;  // Mengambil nilai nama
                        }
                    }

                    $orang = new Manusia();
                    $orang->setNama("Satria");
                    echo "<p>Nama: " . $orang->getNama() . "</p>";
                ?>
                </td>

                <td>
                <?php
                    //CONTOH PEWARISAN/INHERITANCE
                    class Kendaraan {
                        public $nama;

                        public function jenis() {
                            return "Kendaraan umum";
                        }
                    }

                     class Mobil extends Kendaraan {
                        public function jenis() {
                            return "Mobil";
                        }
                    }

                    class Motor extends Kendaraan {
                        public function jenis() {
                            return "Motor";
                        }
                    }

                    $mobilKu = new Mobil();
                    $mobilKu->nama = "Toyota";

                    $motorKu = new Motor();
                    $motorKu->nama = "Honda";

                    echo "<p>Nama Kendaraan: " . $mobilKu->nama . "</p>";
                    echo "<p>Jenis: " . $mobilKu->jenis() . "</p>";

                    echo "<p>Nama Kendaraan: " . $motorKu->nama . "</p>";
                    echo "<p>Jenis: " . $motorKu->jenis() . "</p>";
                ?>
                </td>

                <td>
                <?php
                    //CONTOH POLIMORFISME
                    class AlatMusik {
                        public function bunyi() {
                            return "Alat musik ini mengeluarkan bunyi";
                        }
                    }

                    class Gitar extends AlatMusik {
                        public function bunyi() {
                            return "Ding ding!";
                        }
                    }

                    class Drum extends AlatMusik {
                        public function bunyi() {
                            return "Dum dum!";
                        }
                    }

                    $gitarKu = new Gitar();
                    $drumKu = new Drum();

                    echo "<p>Bunyi Gitar: " . $gitarKu->bunyi() . "</p>";
                    echo "<p>Bunyi Drum: " . $drumKu->bunyi() . "</p>";
                ?>
                </td>

                <td>
                <?php
                    //CONTOH ABSTRACTION
                    abstract class Gadget {
                        abstract public function jenis();
                    }

                    class Hp extends Gadget {
                        public function jenis() {
                            return "Hp";
                        }
                    }

                    $gadget = new Hp();
                    echo "<p>Jenis Gadget: " . $gadget->jenis() . "</p>";
                ?>
                </td>

                <td>
                <?php
                    //CONTOH PENGGUNAAN ACCESS MODIFIER
                    class Film {
                        public $genre = "Horor";

                        public function jenis() {
                            return "Film ini dalah film horor";
                        }
                    }

                    $film = new Film();
                    echo "<p>" . $film->genre . "</p>";
                    echo "<p>" . $film->jenis() . "</p>";
                ?>
                </td>

                <td>
                <?php
                    //MENGGUNAKAN REQUIRE ATAU INCLUDE
                    require_once 'Padi.php';
                    require_once 'Jagung.php';

                    $padi = new Padi();
                    echo "<p>" . $padi->waktupanen() . "</p>";

                    $jagung = new Jagung();
                    echo "<p>" . $jagung->waktupanen() . "</p>";
                ?>
                </td>

                <td>
                <?php
                    //MENGGUNAKAN spl_autoload_register
                    spl_autoload_register(function($nama){
                        include $nama . '.php';
                    });

                    $padi = new Padi();
                    echo "<p>" . $padi->waktupanen() . "</p>";

                    $jagung = new Jagung();
                    echo "<p>" . $jagung->waktupanen() . "</p>";
                ?>
                </td>
            </tr>
        </tbody>
</body>
</html>
