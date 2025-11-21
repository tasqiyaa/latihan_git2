<?php
    $nama = "Intan Tasqiyatul Mudmainnah";
    $nim = "23.N1.0027";
    $waktu = date("d M Y - H:i:s");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman PHP Sederhana</title>
</head>
<body>

    <h2>Halo dari halaman baru!</h2>

    <p>Ini contoh halaman PHP yang sangat sederhana.</p>

    <p>Nama: <?php echo $nama; ?></p>
    <p>NIM: <?php echo $nim; ?></p>
    <p>Waktu akses: <?php echo $waktu; ?></p>

</body>
</html>
