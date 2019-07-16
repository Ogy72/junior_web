<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read File</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container mt-sm-4">
    <div class="row">
        <div class="col-6">
            <?
                // Buka file
                $doc = "doc.txt";
                $file = fopen($doc, "r");
                if (!$file){
                    echo "Open File Failed !";
                } else {
                    while(!feof($file)){
                    // Baca file
                    $isi = fgets($file);
                    print ("$isi <br>");
                    }
                }

                /*$data1 = "Data Ke 1";
                $data2 = "Data Ke 2";
                $cek = fputs($file, $data1."\n");
                fputs($file, $data2."\n");
                if (!$cek){
                    echo "Data Tidak Tersimpan";
                } else {
                    echo "Data Tersimpan";
                }*/

                // Close file
                fclose($file);
            ?>
        </div>
    </div>
</div>
    
</body>
</html>