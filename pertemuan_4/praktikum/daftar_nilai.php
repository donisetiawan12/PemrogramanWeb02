<?php

require_once __DIR__ . "/nilai_mahasiswa.php";

$mhs1 = new NilaiMahasiswa() ;

$mhs1->nama = "Doni Setiawan";
$mhs1->matakuliah = "PWEB";
$mhs1->nilai_uts = "80";
$mhs1->nilai_uas = "85";
$mhs1->nilai_tugas = "90";

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "IQBAL";
$mhs2->matakuliah = "DDP";
$mhs2->nilai_uts = "40";
$mhs2->nilai_uas = "80";
$mhs2->nilai_tugas = "10";

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "HANIP";
$mhs2->matakuliah = "SISKOM";
$mhs2->nilai_uts = "20";
$mhs2->nilai_uas = "30";
$mhs2->nilai_tugas = "40";

$data_mhs = [$mhs1, $mhs2, $mhs3]

?>
<H3>DAFTAR NILAI MAHASISWA<H3>
    <table border="1" cellpadding="2" cellspacing="2" width="100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Lengkap</th>
                <th>Nama Lengkap</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Kelulusan</th>
        </tr>
        </thead>
        <tbody>
            <?php
                foreach($data_mhs as $obj) {
                    ?>

               <td><?= $nomor ?></td><td><?=$obj->nama?></td>         
               <td><?= $obj->matakuliah ?></td><td><?=$obj->nilai_uts?></td>         
               <td><?= $obj->nilai_uas ?></td><td><?=$obj->nilai_tugas?></td>         
               <td><?= $obj->nilai_uas ?></td><td><?=$obj->nilai_tugas?></td>         
            <?php 
                }
            ?>
        </tbody>
    </table>