<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perulangan Bercabang</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-12" style="text-align:center">
            <h2>perulangan bersarang</h2> <br>
            <form method=POST action=branch_loop.php>
                Masukkan Nilai :
                <Input type="Text" name="n">
                <input type="Submit" value="Cek">  
            </form>
        </div>
    </div>
    <div class="row mt-sm-3" style="text-align:center">
        <div class="col-6">
        <h4>For</h4>
                <?
                if(isset($_POST["n"])){
                $n = $_POST["n"];
                    for($i = 1;$i <= $n; $i++){
                        for($x = 1; $x <= $i; $x++ ){
                            echo "$x ";
                        }
                        echo "<br>";
                    };
                };
                ?>
        </div>
        <div class="col-6">
        <h4> Whlie </h4>
                <?
                if(isset($_POST["n"])){
                $n = $_POST["n"];
                $j = 1;
                while($j <= $n){
                    $k = 1;
                    while($k <= $j){
                        echo "$k ";
                        $k++;
                    }
                    echo "<br>";
                    $j++;
                }
                };
                ?>
        </div>
    </div>
</div>
</body>
</html>