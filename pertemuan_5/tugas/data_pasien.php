<?php
include_once 'top.php';

//koneksi databes nya
require_once 'dbkoneksi.php';


$rows = $dbh->query("SELECT * FROM pasien")->fetchAll(PDO::FETCH_ASSOC);

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
                    <a href="form_pasien.php " class="btn btn-success">Tambah Pasien</a>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kode</th>
                                <th>Nama Pasien</th>
                                <th>Alamat</th>
                                <th>Email</th>
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
                            <td><?= $row['kode']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td>
                            <a href="form_pasien.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="proses_pasien.php?proses=Hapus&idx=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>

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