<?php
include_once 'top.php';

$koneksi = new mysqli("localhost", "root", "", "db_pukesmas");

require_once 'dbkoneksi.php';

$_id = $_GET['id'] ?? ''; // Ambil id dari URL
$row = []; // Default kosong
$tombol = 'Simpan'; // Default tombol

if ($_id) {
    $sql = "SELECT * FROM paramedik WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    $tombol = 'Ubah';
}

// Ambil row unit kerja
$query_unit_kerja = "SELECT id, nama FROM unit_kerja";
$result_unit_kerja = $koneksi->query($query_unit_kerja);
?>

<div id="page-content-wrapper">
  <?php include_once 'menu.php'; ?>
  <form class="form-horizontal" action="proses_paramedik.php" method="POST">
    <fieldset>
      <legend>Form Paramedik</legend>
      <input type="hidden" name="id" value="<?= $row['id'] ?? '' ?>">

      <!-- Nama -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>
        <div class="col-md-4">
          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap..." value="<?= $row['nama'] ?? '' ?>">
        </div>
      </div>

          <!-- Gender -->
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

      <!-- Tempat Lahir -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tmp_lahir">Tempat Lahir</label>
        <div class="col-md-4">
          <input type="text" name="tmp_lahir" class="form-control" placeholder="Masukan Tempat Lahir..." value="<?= $row['tmp_lahir'] ?? '' ?>">
        </div>
      </div>

      <!-- Tanggal Lahir -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tgl_lahir">Tanggal Lahir</label>
        <div class="col-md-4">
          <input type="date" name="tgl_lahir" class="form-control" value="<?= $row['tgl_lahir'] ?? '' ?>">
        </div>
      </div>

            <!-- Kategori -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="kategori">Kategori</label>
            <div class="col-md-4">
                <select name="kategori" class="form-control">
                    <option value="dokter" <?= ($row['kategori'] ?? '') === 'Dokter' ? 'selected' : '' ?>>Dokter</option>
                    <option value="bidan" <?= ($row['kategori'] ?? '') === 'Bidan' ? 'selected' : '' ?>>Bidan</option>
                    <option value="perawat" <?= ($row['kategori'] ?? '') === 'Perawat' ? 'selected' : '' ?>>Perawat</option>
                </select>
            </div>
        </div>


      <!-- Telpon -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="telpon">Telpon</label>
        <div class="col-md-4">
          <input type="text" name="telpon" class="form-control" placeholder="Masukan No Telpon..." value="<?= $row['telpon'] ?? '' ?>">
        </div>
      </div>

      <!-- Unit Kerja -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="unit_kerja_id">Unit Kerja</label>
        <div class="col-md-4">
          <select name="unit_kerja_id" class="form-control">
            <option value="">-- Pilih Unit Kerja --</option>
            <?php while ($uk = $result_unit_kerja->fetch_assoc()) : ?>
              <option value="<?= $uk['id'] ?>" <?= ($uk['id'] == ($row['unit_kerja_id'] ?? '')) ? 'selected' : '' ?>>
                <?= htmlspecialchars($uk['nama']) ?>
              </option>
            <?php endwhile; ?>
          </select>
        </div>
      </div>

      <!-- Alamat -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="alamat">Alamat</label>
        <div class="col-md-4">
          <textarea name="alamat" class="form-control" placeholder="Masukan Alamat..."><?= $row['alamat'] ?? '' ?></textarea>
        </div>
      </div>

      <!-- Tombol -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton">Kirim Form</label>
        <div class="col-md-4">
          <button type="submit" name="proses" value="<?= $tombol ?>" class="btn btn-primary">Kirim</button>
          <button type="reset" name="reset" value="batal" class="btn btn-secondary">Batal</button>
        </div>
      </div>
    </fieldset>
  </form>
  <?php include_once 'bottom.php'; ?>
</div>
