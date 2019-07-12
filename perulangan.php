<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>perulangan</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-4">
            <h2> Pernyataan IF 1</h2>
            <?php
            $beli = 200000;
            $keterangan = "Tidak dapat diskon";
            If ($beli >= 100000)
                $keterangan = "Dapat Diskon";
            print($keterangan );
            ?>
            </div>

            <div class="col-4">
            <h2>If dengan sejumlah pernyataan</h2>
            <form method=POST action=ifelse.php>
                Besar Pembelian :
                <Input type="Text" name="beli"> <br><br>
                <input type="Submit" value="Cek">  
            </form>
                <?php
                $beli=$_POST["beli"];
                If (isset($beli)){
                $diskon = 0;
                if ($beli >= 100000){
                    $diskon = 0.1 * $beli;

                echo "Diskon = $diskon";
                $bayar = $beli - $diskon;
                echo "Pembayaran = $bayar";}
                }
                ?>
            </div>

            <div class="col-4">
                <h2>Penerapan If - Elseif</h2>

                Hari ini :
                <?php
                $nama_hari = date("l");
                $tgl = date("d-M-Y");
                if ($nama_hari == "Sunday")
                    print("Minggu");
                elseif ($nama_hari == "Monday")
                    print("Senin");
                elseif ($nama_hari == "Tuesday")
                    print("Selasa");
                elseif ($nama_hari == "Wednesday")
                    print("Rabu");
                elseif ($nama_hari == "Thursday")
                    print("Kamis");
                elseif ($nama_hari == "Friday")
                    print("Jumat");
                else
                    print("Sabtu");
                ?>

                <? echo $tgl ?>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
            <h2>while</h2>
                <?
                $n = 1;
                while ($n <= 9) {
                    echo "$n <br>";
                    $n++;
                }
                ?>
            </div>
            <div class="col-4">
            <h2> do while</h2>
            <? $x = 1;
            do {
                echo "$x <br>";
                $x++;
            } while ($x <= 9);
            ?>
            </div>
        </div>
    </div>
</body>
</html>