<?php
$siswa = ["Nama", "Akuhhhh", "Ahong", "Doni", "Setiawan"];

echo "<br> Array awal : <br>";
print_r($siswa);

//menghapus eleemen terakhir dari array
$orang_terakhir = array_pop($siswa);

//Menampilkan  elemen terakhir yang di hapus
echo "<br> elemen yang akan di hapus  "  .$orang_terakhir. "<br>";

//menampilkan array setelah penghapusan 
echo" <br> Array setelah penghapusan : <br>";
print_r($siswa);
?>