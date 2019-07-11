<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show From</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $date = $_POST["date"];
    $komentar = $_POST["komentar"];
    
    echo " 
    Nama : $nama <br>
    Email : $email <br>
    Password : $pass <br>
    Tanggal : $date <br>
    Komentar : $komentar
    <br><br>";
?>
<div class="container">
<div class="row">
    <div class="col-12">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Tanggal</th>
                    <th>Komentar</th>
                </tr>
            </thead>
            <tbody>
            <? echo"
                <tr>
                    <td>$nama</td>
                    <td>$email</td>
                    <td>$pass</td>
                    <td>$date</td>
                    <td>$komentar</td>
                </tr>
            ";?>
            </tbody>
        </table>
    </div>
</div>

    <div classs="row">
        <div class="col-5">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="20%">Nama</td>
                        <td width="2%">:</td>
                        <td><?echo $nama ?></td>
                    </tr>
                    <tr>
                        <td width="20%">Email</td>
                        <td width="2%">:</td>
                        <td><?echo $email ?></td>
                    </tr>
                    <tr>
                        <td width="20%">Password</td>
                        <td width="2%">:</td>
                        <td><?echo $pass ?></td>
                    </tr>
                    <tr>
                        <td width="20%">Tanggal</td>
                        <td width="2%">:</td>
                        <td><?echo $date ?></td>
                    </tr>
                    <tr>
                        <td width="20%">Komentar</td>
                        <td width="2%">:</td>
                        <td><?echo $komentar ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1">Nama</div>
        <div class="col-2">: <? echo $nama ?></div>
    </div>
    <div class="row">
        <div class="col-1">Email</div>
        <div class="col-2">: <? echo $email ?></div>
    </div>
    <div class="row">
        <div class="col-1">Password</div>
        <div class="col-2">: <? echo $pass ?></div>
    </div>
    <div class="row">
        <div class="col-1">Tanggal</div>
        <div class="col-2">: <? echo $date ?></div>
    </div>
    <div class="row">
        <div class="col-1">Komentar</div>
        <div class="col-2">: <? echo $komentar ?></div>
    </div>

</div>
</body>
</html>