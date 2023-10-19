<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tilt+Neon">
      <title>Menghitung volume balok</title>
   </head>
   <body>
      <div class="flex flex-col" style="gap: 5px;">
        <div class="flex flex-col" style="gap: 3px;">
            <div>
                <div> Operator Volume Balok</div>
                <div> Panjang Balok = 10cm</div>
                <div> Lebar Balok = 7cm</div>
                <div> Tinggi Balok = 15cm</div>
                </div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 306px;">
                <?php 
                $panjang = 10;
                $lebar = 7;
                $tinggi = 15;
                
                $hasil = $panjang * $lebar * $tinggi;

                $text_1 = "Belajar menghitung ";
                $text_2 = "volume balok ";

                $text_3 = $text_1 . $text_2 . ": " . $hasil . "cm";
               
                echo "$text_3";
                ?>
            </div>
        </div>
      </div>
   </body>
</html>