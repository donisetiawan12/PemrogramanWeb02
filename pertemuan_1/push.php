<?php 
//array push 
$komponen = ["Mobo", "Processor", "RAM", "SSD", "GPU"];

//menambahkan elemen diakhir
array_push($komponen, "PSU", "Cassing");

echo "Setelah Push<br>";

print_r($komponen);
?>