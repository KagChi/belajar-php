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
    <form action="metode_post_proses.php" method="POST">
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <div style="display: flex; flex-direction: row; gap: 10px; align-items: center;">
                <p>Masukan nama:</p>
                <input style="height: 20px;" type="text" name="nama" placeholder="nama" size="25"/>
            </div>
            <input type="submit" value="Proses"/>
        </div>
    </form>
</body>
</html>