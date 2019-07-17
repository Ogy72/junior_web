<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Visitor</title>

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
            <caption><h4 style="text-align:center">Data Visitor</h4></caption>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Komentar</th>
                    </tr>
                </thead>
                <tbody>
                <? 
                    $visitor = mysqli_query($conn, "SELECT * FROM visitor");
                    foreach($visitor as $d){
                    echo "
                    <tr>
                        <td>".$d["id"]."</td>
                        <td>".$d["nama"]."</td>
                        <td>".$d["komentar"]."</td>
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