<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prodi | Doni Setiawa</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<br><br><br><br><br>
<form method="POST" action="proses_prodi.php">
  <div class="form-group row">
    <label for="text" class="col-1 col-form-label">Kode</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-1 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-1 col-form-label">Kaprodi</label> 
    <div class="col-4   ">
      <input id="kaprodi" name="kaprodi" type="text" class="form-control">
    </div>
  </div>
  
 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input name="proses" type="submit" value="simpan" class="btn btn-primary"></input>
    </div>
  </div>
</form>
</body>
</html>