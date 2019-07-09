<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <div class=row>
            <div class="col-8">
            <h3>Input Data Peserta</h3>
            <br>
                <form action="">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="pass" id="pass" class="form-control" placeholder="Masukkan Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" name="date" id="date" class="form-control" placeholder="Pilih Tanggal">
                            </div>
                        </div>
                        <label for="Komentar">Komentar</label>
                        <textarea class="form-control" name="komentar" id="komentar" rows="3" placeholder="isi Komentar"></textarea>
                    </div>                
                    <input type="submit" value="Simpan" class="btn btn-primary" style="width:100%">
                </form> 
            </div>
        </div>
    </div>
</body>
</html>