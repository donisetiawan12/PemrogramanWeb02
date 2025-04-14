<?php
include_once 'top.php';

$koneksi = new mysqli("localhost", "root", "", "db_pukesmas");

require_once 'dbkoneksi.php';

$_id = $_GET['id'] ?? ''; // Ambil id dari URL
$row = []; // Default kosong
$tombol = 'Simpan'; // Default tombol

if ($_id) {
    $sql = "SELECT * FROM pasien WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    $tombol = 'Ubah';
}

// Ambil row kelurahan
$query_kelurahan = "SELECT id, nama FROM kelurahan";
$result_kelurahan = $koneksi->query($query_kelurahan);
?>


<div id="page-content-wrapper">      
    <?php include_once 'menu.php';?>
    <form class="form-horizontal" action="proses_pasien.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Form Pasien</legend>
<input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kode">Kode</label>  
  <div class="col-md-4">
  <input id="kode" name="kode" type="text" placeholder="Masukan Kode..." value="<?= $row['kode']?? '' ?>" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap..." value="<?= $row['nama'] ?? '' ?>">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tmp_lahir">Tempat Lahir</label>  
  <div class="col-md-4">
  <input id="tmp_lahir" name="tmp_lahir" type="text" placeholder="Masukan Tempat Lahir..." value="<?= $row['tmp_lahir']?? ''?>" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tgl_lahir">Tanggal Lahir</label>  
  <div class="col-md-4">
  <input id="tgl_lahir" name="tgl_lahir" type="date" placeholder="placeholder" value="<?= $row['tgl_lahir']?? ''?>" class="form-control input-md">
      </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Jenis Kelamin</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender_l">
      <input type="radio" name="gender" id="gender_l" value="L" <?= ($row['gender'] ?? '') === 'L' ? 'checked' : '' ?>>
      Laki - Laki
    </label> 
    <label class="radio-inline" for="gender_p">
      <input type="radio" name="gender" id="gender_p" value="P" <?= ($row['gender'] ?? '') === 'P' ? 'checked' : '' ?>>
      Perempuan
    </label> 
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kelurahan"> Kelurahan </label>
  <div class="col-md-4">
    <select id="kelurahan" name="kelurahan_id" class="form-control">
      <option value="">-- Pilih Kelurahan -- </option>
      <?php
      while ($kel = $result_kelurahan->fetch_assoc()) {
        $selected = ($kel['id'] == ($row['kelurahan_id'] ?? '')) ? 'selected' : '';
        echo "<option value='" . $kel['id'] . "' $selected>" . $kel['nama'] . "</option>";
    }
    
        ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input type="email" name="email" value="<?= $row['email'] ?? '' ?>" class="form-control" placeholder="Masukan email..."> 
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat</label>
  <div class="col-md-4">                     
  <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat..."><?= $row['alamat'] ?? '' ?></textarea>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Kirim Form</label>
  <div class="col-md-4">
    <button type="submit" name="proses" value="<?= $tombol ?>" class="btn btn-primary">Kirim</button>
    <button type="reset" name="reset" value="batal" class="btn btn-primary">Batal</button>
    
  </div>
</div>
</fieldset>
    </form>
    
    <?php include_once 'bottom.php';?>


    
