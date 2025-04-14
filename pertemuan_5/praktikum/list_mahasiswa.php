<?php
require_once 'db_koneksi.php';

//deffinisikan query
$sql = "SELECT * FROM mahasiswa ORDER BY thn_masuk DESC";

//jalankan query
$rs = $dbh->query($sql);

//tampilkan query
foreach($rs as $row) {
    echo "<br>".$row->nim.' - ' .$row->nama;
}




?>