<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Prodi</title>

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
        <div class="col-4"></div>
        <div class="col-4">
            <h4>Input Prodi</h4>
            <form action="add_prodi.php" method="post">
                <div class="form-group">
                    <label for="kd_prodi">Kode Prodi</label>
                    <input id="kd_prodi" class="form-control" type="text" name="kd_prodi" placeholder="Masukkan Kode Prodi" required>
                    <input type="hidden" name="kd_prodi2" id="kd_prodi2">
                </div>
                <div class="form-group">
                    <label for="nama_prodi">Nama Prodi</label>
                    <input id="nama_prodi" class="form-control" type="text" name="nama_prodi" placeholder="Masukkan Nama Prodi" required>
                </div>
                <div class="form-group">
                    <label for="kd_jurs">Kode Jurusan</label>
                    <select id="kd_jurs" class="form-control" name="kd_jurs">
                        <option selected>Pilih Jurusan</option>
                    <?
                        $query = "SELECT * FROM jurusan";
                        $selct = mysqli_query($conn, $query);

                        foreach($selct as $data){
                            echo '
                            <option value="'.$data["kd_jurs"].'">'.$data["kd_jurs"].' - '.$data["nama_jurs"].'</option>';
                        }
                    ?>
                    </select>
                </div>
                <input id="tombol" type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="width:100%">
            </form>
        </div>
        <div class="col-4"></div>
    </div>
    <!-- proses -->
    <?
        if(isset($_POST["simpan"])){
            $btn = $_POST["simpan"];
            $kd_prodi = $_POST["kd_prodi"];
            $kd_prodi2 = $_POST["kd_prodi2"];
            $nama_prodi = $_POST["nama_prodi"];
            $kd_jurs = $_POST["kd_jurs"];

            if($btn == "Simpan"){

                $p = "SELECT * FROM prodi WHERE kd_prodi='$kd_prodi'";

                $row = mysqli_num_rows(mysqli_query($conn, $p));
                if($row > 0){
                    echo '<script> alert("Data Sudah Ada !")</script>';
                } else {
                    $query_insert = "INSERT INTO prodi VALUES ('$kd_prodi','$nama_prodi','$kd_jurs')";
                    mysqli_query($conn, $query_insert);
                }
            }
            else if($btn == "Edit"){
                $query_update = "UPDATE prodi SET kd_prodi='$kd_prodi', nama_prodi='$nama_prodi', kd_jurs='$kd_jurs' WHERE kd_prodi='$kd_prodi2'";
                mysqli_query($conn, $query_update);
            }
        
        }
    ?>

    <div class="row mt-sm-3">
        <div class="col">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Kode Prodi</th>
                        <th>Nama Prodi</th>
                        <th>Nama Jurusan</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                <?
                    if(isset($_GET["id"])){
                        $kd_prodi = $_GET["id"];

                        $query_delete = "DELETE FROM prodi WHERE kd_prodi='$kd_prodi'";
                        mysqli_query($conn, $query_delete);
                    };

                    $query_select = "SELECT prodi.kd_prodi, prodi.nama_prodi, jurusan.nama_jurs FROM prodi, jurusan 
                    WHERE prodi.kd_jurs=jurusan.kd_jurs";
                    $data = mysqli_query($conn, $query_select);

                    foreach($data as $d){
                    echo "
                    <tr>
                        <td style='width:250px'>$d[kd_prodi]</td>
                        <td>$d[nama_prodi]</td>
                        <td>$d[nama_jurs]</td>
                        <td style='width:250px'>";?>
                            <input type="button" id="<? echo $d['kd_prodi'] ?>" value="Edit" class="btn btn-success btn-sm edit">
                            <a href="add_prodi.php?id=<? echo $d['kd_prodi'] ?>" onClick='javascript: return confirm("Hapus Data ?")' class="btn btn-danger btn-sm del">Hapus</a>
                        </td>
                    </tr>
                <?
                    }
                ?>

                </tbody>
            </table>
        </div>    
    </div>
</div>
    <!-- link js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.mim.js"></script>
</body>
</html>

<script>
$(document).ready(function(){

    $('.edit').click(function(){
        var kd = $(this).attr("id");
        var get = "data prodi";
        $.ajax({
            url:"edited.php",
            method:"POST",
            data:{kd:kd, get:get},
            dataType:"json",
            success:function(data){
                $("#kd_prodi").val(data.kd_prodi);
                $("#kd_prodi2").val(data.kd_prodi);
                $("#nama_prodi").val(data.nama_prodi);
                $("#kd_jurs").val(data.kd_jurs);
                $("#tombol").val("Edit");
            }
        });
    });
})
</script>