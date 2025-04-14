<?php
require_once 'db_koneksi.php';

//deffinisikan query
$sql = "SELECT * FROM prodi";

//jalankan query
$rs = $dbh->query($sql);

//tampilkan query
foreach($rs as $row) {
    echo "<br>".$row->id.' - ' .$row->nama;
}




?>

<table border="1" width="100%">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($rs as $row) {?>
    <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $row->kode; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->kaprodi; ?></td>
        <td>
            <a href="form_prodi.php?id_edit=<?php echo $row->id; ?>">Edit</a>
            <a href="proses_prodi.php?id_hapus=<?php echo $row->id; ?>">Hapus</a>
        </td>
    </tr>
    <?php $nomor++; } ?>
</table>