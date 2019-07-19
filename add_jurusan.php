<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Jurusan</title>

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
            <h4>Input Data Jurusan</h4>
            <form action="add_jurusan.php" method="post">
                <div class="form-group">
                    <label for="kd_jurs">Kode Jurusan</label>
                    <input id="kd_jurs" class="form-control" type="text" name="kd_jurs" placeholder="Masukkan Kode Jurusan" required>
                    <input type="hidden" name="kd_jurs2" id="kd_jurs2">
                </div>
                <div class="form-group">
                    <label for="nama_jurs">Nama Jurusan</label>
                    <input id="nama_jurs" class="form-control" type="text" name="nama_jurs" placeholder="Masukkan Nama Jurusan" required>
                </div>
                <input id="tombol" type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="width:100%">
            </form>
        </div>
        <div class="col-4"></div>
    </div>

    <?
        if(isset($_POST["simpan"])){
            $btn = $_POST["simpan"];
                
            if($btn == "Simpan"){
                $kd_jurs = $_POST["kd_jurs"];
                $nama_jurs = $_POST["nama_jurs"];
                $q = "SELECT * FROM jurusan WHERE kd_jurs='$kd_jurs'";

                $cek = mysqli_num_rows(mysqli_query($conn, $q));
                if($cek > 0 ){
                    echo '<script> alert("Data Sudah Ada !")</script>';
                } else {
                    
                    $query_insert = "INSERT INTO jurusan VALUES ('$kd_jurs','$nama_jurs')";
                    mysqli_query($conn, $query_insert);
                }
            } 
            else if($btn == "Edit") {
                $kd_jurs = $_POST["kd_jurs"];
                $kd_jurs2 = $_POST["kd_jurs2"];
                $nama_jurs = $_POST["nama_jurs"];

                $query_update = "UPDATE jurusan SET kd_jurs='$kd_jurs', nama_jurs='$nama_jurs' WHERE kd_jurs='$kd_jurs2'";
                mysqli_query($conn, $query_update);
            }
        }
    ?>

    <div class="row mt-sm-3">
        <div class="col">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Kode Jurusan</th>
                        <th>Nama Jurusan</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                <?
                    if(isset($_GET["id"])){
                        $kd_jurs = $_GET["id"];

                        $query_delete = "DELETE FROM jurusan WHERE kd_jurs='$kd_jurs'";
                        mysqli_query($conn, $query_delete);
                    };

                    $query_select = "SELECT * FROM jurusan";
                    $data = mysqli_query($conn, $query_select);

                    foreach($data as $d){
                    echo "
                    <tr>
                        <td style='width:250px'>$d[kd_jurs]</td>
                        <td>$d[nama_jurs]</td>
                        <td style='width:250px'>";?>
                            <input type="button" id="<? echo $d['kd_jurs'] ?>" value="Edit" class="btn btn-success btn-sm edit">
                            <a href="add_jurusan.php?id=<? echo $d['kd_jurs'] ?>" onClick='javascript: return confirm("Hapus Data ?")' class="btn btn-danger btn-sm del">Hapus</a>
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
        var get = "data jurusan";
        $.ajax({
            url:"edited.php",
            method:"POST",
            data:{kd:kd, get:get},
            dataType:"json",
            success:function(data){
                $("#kd_jurs").val(data.kd_jurs);
                $("#kd_jurs2").val(data.kd_jurs);
                $("#nama_jurs").val(data.nama_jurs);
                $("#tombol").val("Edit");
            }
        });    
    });
})
</script>