<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM METHOD GET</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tilt+Neon">
</head>
<body>
    <?php
        if (isset($_GET["nama"])) {
            echo "Data Nama Uang Dinputkan Adalah : " . $_GET["nama"];
        } else {
            echo 'Mohon input nama anda.';
        }
    ?>
</body>
</html>