<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Printer</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <? 
    include_once "koneksi.php";
    $conn = $connect;
    ?>

</head>
<body>

<div class="container mt-sm-3">
    <div class="row">
        <div class="col-8">
            <h4 class="mb-sm-3"> Input Data Barang</h4>
            <form method="POST" action="data_printer.php">
                <div class="form-group row">
                    <label for="Nama Merek" class="col-sm-2 col-form-label">Nama Merek</label>
                    <div class="col-sm-10">
                        <input id="merek" class="form-control" type="text" name="merek" placeholder="Masukkan Merek Printer" required style="width:50%">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Warna" class="col-sm-2 col-form-label">Warna</label>
                    <div class="col-sm-10">
                        <input id="warna" class="form-control" type="text" name="warna" placeholder="Masukkan Warna Printer" required style="width:50%">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input id="jumlah" class="form-control" type="text" name="jumlah" placeholder="Masukkan Jumlah Printer" required style="width:50%">
                    </div>
                </div>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="width:59%">
            </form>
        </div>
        <div class="col-4"></div>
    </div>


<?
    if(isset($_POST["simpan"])){
        $merek = $_POST["merek"];
        $warna = $_POST["warna"];
        $jumlah = $_POST["jumlah"];
        $q = "SELECT * FROM printer WHERE nama_merek='$merek'";

        $cek = mysqli_num_rows(mysqli_query($conn, $q));

        if($cek > 0){
            echo '<script> alert("Data Sudah Ada !")</script>';
        } else {
        $query_insert = "INSERT INTO printer VALUES ('','$merek','$warna','$jumlah')";
        mysqli_query($conn, $query_insert);
        }
    }
?>

<div class="row mt-sm-3">
    <div class="col">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Merek</th>
                    <th>Warna</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
            <?
                $query_select = "SELECT * FROM printer";
                $data = mysqli_query($conn, $query_select);

                foreach($data as $d){
                echo "
                <tr>
                    <td>$d[no]</td>
                    <td>$d[nama_merek]</td>
                    <td>$d[warna]</td>
                    <td>$d[jumlah]</td>
                </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>