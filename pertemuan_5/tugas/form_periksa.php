<?php
include_once 'top.php';

$koneksi = new mysqli("localhost", "root", "", "db_pukesmas");

require_once 'dbkoneksi.php';

$_id = $_GET['id'] ?? ''; // Ambil id dari URL
$row = []; // Default kosong
$tombol = 'Simpan'; // Default tombol

if ($_id) {
    $sql = "SELECT * FROM periksa WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    $tombol = 'Ubah';
}

// Ambil row pasien
$query_pasien = "SELECT id, nama FROM pasien";
$result_pasien = $koneksi->query($query_pasien);
// Ambil row dokter
$query_dokter = "SELECT id, nama FROM paramedik";
$result_dokter = $koneksi->query($query_dokter);

?>


<div id="page-content-wrapper">      
    <?php include_once 'menu.php';?>
    <form class="form-horizontal" action="proses_periksa.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Form Periksa Pasien</legend>
<input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">


 <!-- Nama pasien -->
 <div class="form-group">
        <label class="col-md-4 control-label" for="pasien_id">Nama Pasien</label>
        <div class="col-md-4">
          <select name="pasien_id" class="form-control">
            <option value="">-- Pilih Pasien --</option>
            <?php while ($uk = $result_pasien->fetch_assoc()) : ?>
              <option value="<?= $uk['id'] ?>" <?= ($uk['id'] == ($row['pasien_id'] ?? '')) ? 'selected' : '' ?>>
                <?= htmlspecialchars($uk['nama']) ?>
              </option>
            <?php endwhile; ?>
          </select>
        </div>
      </div>

 <!-- Dokter -->
 <div class="form-group">
        <label class="col-md-4 control-label" for="dokter_id">Dokter</label>
        <div class="col-md-4">
          <select name="dokter_id" class="form-control">
            <option value="">-- Pilih Dokter --</option>
            <?php while ($uk = $result_dokter->fetch_assoc()) : ?>
              <option value="<?= $uk['id'] ?>" <?= ($uk['id'] == ($row['dokter_id'] ?? '')) ? 'selected' : '' ?>>
                <?= htmlspecialchars($uk['nama']) ?>
              </option>
            <?php endwhile; ?>
          </select>
        </div>
      </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tanggal">Tanggal </label>  
            <div class="col-md-4">
            <input id="tanggal" name="tanggal" type="date" value="<?= $row['tanggal']?? '' ?>"  class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
    <label class="col-md-4 control-label" for="berat">Berat </label>  
    <div class="col-md-4">
        <input id="berat" name="berat" type="text" step="any" value="<?= $row['berat']?? '' ?>" placeholder="Masukkan Berat Badan (kg)..." class="form-control input-md">
    </div> 
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="tinggi">Tinggi </label>  
    <div class="col-md-4">
        <input id="tinggi" name="tinggi" type="text" step="any" value="<?= $row['tinggi']?? '' ?>" placeholder="Masukkan Tinggi Badan (cm)..." class="form-control input-md">
    </div>
</div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="tensi">Tensi </label>  
            <div class="col-md-4">
            <input id="tensi" name="tensi" type="number" value="<?= $row['tensi']?? '' ?>" placeholder="Masukan Tensi Badan..." class="form-control input-md">
            </div>
        </div>

        
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="keterangan">Keterangan</label>
  <div class="col-md-4">                     
  <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan Pasien..."><?= $row['keterangan'] ?? '' ?></textarea>
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


    
