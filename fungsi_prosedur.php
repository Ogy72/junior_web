<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fungsi dan Prosedure</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-4">
            <form action="fungsi_prosedur.php" method="post">
            <label for="tahun"> Masukkan Tahun Lahir Anda</label>
            <div class="form-inline">
                <input type="text" name="tahun" id="" class="form-control">
                <input type="submit" value="Submit" class="btn btn-danger ml-sm-3">
            </div>
            </form>
        </div>

        <div class="col-4">
            <form action="fungsi_prosedur.php" method="post">
            <label for="tahun"> Masukkan Angka</label>
            <div class="form-inline">
                <input type="text" name="angka" id="" class="form-control">
                <input type="submit" value="Submit" class="btn btn-danger ml-sm-3">
            </div>
            </form>
        </div>
    </div>
<hr>
    <div class="row">
        <div class="col-4">
        <?
            if(isset($_POST["tahun"])){
            $tahun = $_POST["tahun"];
            $thn_now = date("Y");

            function myfunc($salam){
                echo "$salam <br>";
            }

            myfunc("Selamat Pagi");

            function umur($tahun1, $tahun2){
                $umur_now = $tahun1 - $tahun2;
                return $umur_now;
            }

            echo "Umur Anda : ".umur($thn_now, $tahun)." Tahun";
            }
        ?>
        </div>

        <div class="col-4">
            <? if(isset($_POST["angka"])){
                $angka = $_POST["angka"];
                function faktor($nilai){
                    if($nilai < 2){
                        return 1;
                    } else {
                        return ($nilai* faktor($nilai - 1));
                    }
                }

                echo "Fakor $angka adalah : ".faktor($angka);
            }?>
        </div>

        <div class="col-4">
            <?
            $hari = date("l");
            function day($nama_hari){
                if ($nama_hari == "Sunday")
                    return $day_now = "Minggu";
                elseif ($nama_hari == "Monday")
                    return $day_now = "Senin";
                elseif ($nama_hari == "Tuesday")
                    return $day_now = "Selasa";
                elseif ($nama_hari == "Wednesday")
                    return $day_now = "Rabu";
                elseif ($nama_hari == "Thursday")
                    return $day_now = "Kamis";
                elseif ($nama_hari == "Friday")
                    return $day_now = "Jumat";
                else
                    return $day_now = "Sabtu";
            }

            echo "Hari ini adalah hari : ".day($hari);
            ?>
        </div>
    </div>
</div>
    
</body>
</html>