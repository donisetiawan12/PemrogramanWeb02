<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 01 PHP | Doni Setiawan</title>
</head>
<body>
    <h1>Doni Setiawan Sedang Belajar PHP</h1>

    <?php
            $nama = "Doni Setiawan";
            $nim  = "0110224010";
            $prodi = "Teknik Informatika";
            $ipk = 5.0;
    ?>

    <p>Nama : <?php echo $nama; ?></p>
    <p>Nim : <?php echo $nim; ?></p>
    <p>Prodi : <?php echo $prodi; ?></p>
    <p>IPK : <?=$ipk; ?></p>
</body>
</html>