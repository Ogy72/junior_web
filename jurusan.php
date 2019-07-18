<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Jurusan</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<? 
    include_once "koneksi.php";
    $conn = $connect;
?>
<div class="container mt-sm-4">
    <div class="row">
        <div class="col">
            <caption>
                <form action="jurusan.php" method="post">
                <div class="form-inline mb-sm-2">
                    <input type="text" name="word" id="" class="form-control form-control-sm" style="width:20%" placeholder="Search in here">
                    <input type="submit" value="Search" class="btn btn-primary btn-sm ml-sm-2">
                </div>
                </form>
            </caption>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Prodi</th>
                        <th>Nama Prodi</th>
                        <th>Nama Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                <? 
                    if(isset($_POST["word"])){
                        $q = $_POST["word"];
                        $no = 1;
                        $search = "SELECT prodi.kd_prodi, prodi.nama_prodi, jurusan.nama_jurs FROM prodi, jurusan
                        WHERE (prodi.nama_prodi LIKE '%$q%' OR jurusan.nama_jurs LIKE '%$q%') AND prodi.kd_jurs=jurusan.kd_jurs";
                        $visitor = mysqli_query($conn, $search);
                        foreach($visitor as $d){
                        echo "
                        <tr>
                            <td>$no</td>
                            <td>".$d["kd_prodi"]."</td>
                            <td>".$d["nama_prodi"]."</td>
                            <td>".$d["nama_jurs"]."</td>
                        </tr>";
                        $no++;   
                        }
                    } else {
                    $no = 1;
                    $query = "SELECT prodi.kd_prodi, prodi.nama_prodi, jurusan.nama_jurs FROM prodi, jurusan
                    WHERE prodi.kd_jurs=jurusan.kd_jurs";
                    $visitor = mysqli_query($conn, $query);
                    foreach($visitor as $d){
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>".$d["kd_prodi"]."</td>
                        <td>".$d["nama_prodi"]."</td>
                        <td>".$d["nama_jurs"]."</td>
                    </tr>";
                    $no++;
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>