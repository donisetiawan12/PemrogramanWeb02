<?php
require_once 'db_koneksi.php';

//tangkap dlu data nya dari form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_kaprodi = $_POST['kaprodi'];
$_proses = $_POST['proses'];


//membuat array
$ar_data = [
    $_kode,
    $_nama,
    $_kaprodi
];

//buat query
if ($_proses == "Simpan") {
    $sql = "INSERT INTO prodi(kode,nama,kaprodi) VALUES (?,?,?)";
}elseif($_proses == "update") {
    $id_edit = $POST['id_edit'];
    $ar_data[] =$id_edit;
    $sql = "UPDATE prodi SET nama=?, kaprodi=?, kode=? WHERE id=?";
}elseif($_proses == "Hapus") {
    $id_hapus = $_POST['id_hapus'];
    $ar_data = [$id_hapus];
    $sql = "DELETE FROM prodi WHERE id=?";

}

//buat statment
$stmt = $dbh->prepare($sql);
//jalankan query
$stmt->execute($ar_data);
//redirect ke halaman list_prodi.php
header('Location: list_prodi.php');
?>