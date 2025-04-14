<?php
include_once 'top.php';

//koneksi databes nya
require_once 'dbkoneksi.php';


$rows = $dbh->query("
    SELECT 
        periksa.*, 
        pasien.nama AS nama_pasien, 
        paramedik.nama AS nama_dokter
    FROM periksa
    JOIN pasien ON periksa.pasien_id = pasien.id
    JOIN paramedik ON periksa.dokter_id = paramedik.id
")->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="page-content-wrapper">      
    <?php 
        include_once 'menu.php';
    ?>
    <!-- Page content-->
    <div class="container-fluid">
        <form method="post" action="nilai_siswa.php" class="form-horizontal">
<fieldset>


<!-- Form Name -->
<legend>Data Pasien</legend>
<br><br><br>
<table class="table">
                    <caption>Data Pasien</caption>
                    <a href="form_periksa.php " class="btn btn-success">Tambah Pasien</a>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>pasien</th>
                                <th>dokter</th>
                                <th>Tanggal</th>
                                <th>Berat</th>
                                <th>Tinggi</th>
                                <th>Tensi</th>
                                <th>Keterangan</th>
                                <th >Aksi</th>
                            </tr>
                        </thead>
                     <tbody>
                     <?php 
                        $no = 1;
                        foreach ($rows as $row): 
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama_pasien']; ?></td>
                            <td><?= $row['nama_dokter']; ?></td>
                            <td><?= $row['tanggal']; ?></td>
                            <td><?= $row['berat']; ?></td>
                            <td><?= $row['tinggi']; ?></td>
                            <td><?= $row['tensi']; ?></td>
                            <td><?= $row['keterangan']; ?></td>
                            <td>
                            <a href="form_periksa.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="proses_periksa.php?proses=Hapus&idx=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                        
                        </tbody>
                    </table>
                </div>
            </div>
            </fieldset>
        </form>
    </div>
</div>
<?php
include_once 'bottom.php'
;
?>