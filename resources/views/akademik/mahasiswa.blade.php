<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 

       <h2>Mahasiswa</h2>
    <ol>
        <?php
            foreach ($mhs as $namaMhs) 
            {
                echo "<li> $namaMhs </li>";
            }
        ?>
    </ol>
    <div>
        <img src="" alt="">
    </div>
    <div>
    Padang &copy; <?= date('d-m-Y') ?>
    </div>
</body>
</html>