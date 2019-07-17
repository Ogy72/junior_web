<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku Tamu</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container mt-sm-4">
    <div class="row">
        <div class="col-4">
        <h4>Buku Tamu</h4>
            <form method="post" action="buku_tamu.php">
                <input type="text" name="nama" id="" class="form-control" placeholder="Nama" required><br>
                <input type="text" name="instant" id="" class="form-control" placeholder="Instansi" required><br>
                <input type="email" name="mail" id="" class="form-control" placeholder="Email"><br>
                <div class="form-group">
                    <label for="my-textarea">Komentar</label>
                    <textarea id="my-textarea" class="form-control" name="komentar" rows="3" required></textarea>
                </div>
                <input type="submit" value="Simpan" class="btn btn-secondary" style="width:100%">
            </form>
        </div>
        <div class="col-4">
            <h4>Data Tamu</h4>
            <?
                if(isset($_POST["nama"])){
                    $nama = "Nama : ".$_POST["nama"];
                    $instant = "Instansi : ".$_POST["instant"];
                    $mail = "Email : ".$_POST["mail"];
                    $komen = "Komentar : ".$_POST["komentar"];
                    $doc = "buku.txt";

                    if($nama == ""){
                        echo "Form Kosong !";
                    } else {
                        $file_write = fopen($doc, "a");
                        $write = fputs($file_write, $nama."\n");
                        fputs($file_write, $instant."\n");
                        fputs($file_write, $mail."\n");
                        fputs($file_write, $komen."\n");
                        if(!$write){
                            echo "Data Tidak Tersimpan";
                        } else {
                            echo "Data Tersimpan <br>";
                            fclose($file_write);
                        }
                    };

                    $read_file = fopen($doc, "r");
                    if (!$read_file){
                        echo "Open File Failed !";
                    } else {
                        while(!feof($read_file)){
                            $isi = fgets($read_file);
                            echo "$isi <br>";
                        }
                        fclose($read_file);
                    }
                    
                }
            ?>
        </div>
    </div>
</div>
    
</body>
</html>