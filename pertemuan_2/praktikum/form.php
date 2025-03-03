<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Doni Setiawan </title>
</head>
<body>
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action="output.php" method="post">
     <div class="form-group ">
     <label for="text" class="col-4 col-form-label">Nama</label>  
      <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama..."/>
     </div>
     
     <div class="form-group ">
     <label for="text" class="col-4 col-form-label">Email</label> 
      <input class="form-control" id="email" name="email" type="email" placeholder="Masukan Email..."/>
     </div>
  <div class="form-group ">
        <label for="text" class="col-4 col-form-label">NIM</label> 
      <input class="form-control" id="nim" name="nim" type="text" placeholder="Masukan NIM..."/>
     </div>

     <div class="form-group ">
    <label for="textarea" class="col-4 col-form-label">Pesan</label> 
      <textarea id="pesan" name="pesan" cols="40" rows="5" class="form-control" placeholder="Masukan Pesan..."></textarea>
  </div> 

     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>

</body>
</html>