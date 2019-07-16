<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-6">

        <h4>Array Numeric</h4>
        <?
            // Array Kosong
            $buah = array();
            $hobi = [];

            // Array dengan isi
            $drink = array("Kopi", "Teh", "Susu");
            $food = ["Soto", "Nasi Goreng", "Ayam Bakar"];

            // Array dengan indeks
            $member[1] = "Budi";
            $member[2] = "Joni";
            $member[0] = "Senja";
            
            for ($i=0; $i<3; $i++){

                echo "$member[$i] Makan $food[$i] Minum $drink[$i] <br>";
            }

            echo "<hr>";

            $i = 0;
            while ($i < 3) {
                echo "$member[$i] Makan $food[$i] Minum $drink[$i] <br>";
                $i++;
            }

            echo "<hr>";

            foreach ($drink as $key => $n) {
                echo "
            $key. $n <br>";
                
            }
        ?>
        </div>

        <div class="col-6">
        <h4>Array Assosiatif</h4>
            
        <?
            // Array asosiatif
            $artikel = [
                "judul" => "Belajar Pemrograman Web",
                "penulis" => "Senja",
                "view" => 720
            ];

            // Cetak Array
            echo "
            <h5>$artikel[judul]</h5>
            Penulis : $artikel[penulis] <br>
            View : $artikel[view]
            <hr>";

            $artikel2 = [
                ["judul" => "Belajar Pemrograman Web",
                "penulis" => "Senja",
                "view" => 720],
                ["judul" => "Belajar Pemrograman PHP",
                "penulis" => "Budi",
                "view" => 72],
                ["judul" => "Belajar Pemrograman JS",
                "penulis" => "Jason",
                "view" => 20]
            ];

            foreach ($artikel2 as $key => $value) {
                echo "
                    <h5>$value[judul]</h5>
                    Penulis : $value[penulis] <br>
                    View : $value[view]";
            }
        ?>
        </div>
    </div>
</div>
    
</body>
</html>