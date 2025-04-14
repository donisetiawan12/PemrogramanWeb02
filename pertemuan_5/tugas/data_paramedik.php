<?php
include_once 'top.php';

//koneksi databes nya
require_once 'dbkoneksi.php';


$rows = $dbh->query("SELECT * FROM paramedik")->fetchAll(PDO::FETCH_ASSOC);

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
<legend>Data Paramedik</legend>
<br><br><br>
<table class="table">
                    <caption>Data Paramedik</caption>
                    <a href="form_paramedik.php " class="btn btn-success">Tambah Paramedik</a>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Paramedik</th>
                                <th>Alamat</th>
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
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td>
                            <a href="form_paramedik.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="proses_paramedik.php?proses=Hapus&idx=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>

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