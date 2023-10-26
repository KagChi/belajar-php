<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM METHOD POST</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tilt+Neon">
</head>
<body>
    <?php
    if (isset($_POST["nama"])) {
        echo "Data Nama Uang Dinputkan Adalah : " . $_POST["nama"];
    } else {
        echo 'Mohon input nama anda.';
    }
    ?>
</body>
</html>