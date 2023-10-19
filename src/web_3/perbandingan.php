<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tilt+Neon">
      <title>Perbandingan</title>
   </head>
   <body>
      <div class="flex flex-col" style="gap: 5px;">
        <div class="flex flex-col">
            <div> Operator Perbandingan Sama Dengan</div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 90px;">
                <?php 
                $bill_1 = 200;
                $bill_2 = 40;
                $text_1 = "PHP";
                $hasil = $bill_1 == $bill_2;
               
                echo "$bill_1 == $bill_2 = $hasil";
                ?>
            </div>
        </div>
        <div class="flex flex-col">
            <div> Operator Tidak Sama Dengan</div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 94px;">
                <?php
                $bill_1 = 200;
                $bill_2 = 40;
                $text_1 = "PHP";
                $hasil = $text_1 != $bill_2;
               
                echo "$text_1 != $bill_2 = $hasil";
                ?>
            </div>
        </div>
        <div class="flex flex-col">
            <div> Operator Lebih Sama Dengan Kali</div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 104px;">
                <?php 
                $bill_1 = 200;
                $bill_2 = 40;
                $text_1 = "PHP";
                $hasil = $bill_1 >= $bill_2;
               
                echo "$bill_1 >= $bill_2 = $hasil";
                ?>
            </div>
        </div>
        <div class="flex flex-col">
            <div> Operator Tidak Sama Dengan</div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 102px;">
                <?php 
                $bill_1 = 200;
                $bill_2 = 40;
                $text_1 = "PHP";
                $text_2 = "php";
                $hasil = $text_1 != $text_2;
               
                echo "$text_1 != $text_2 = $hasil";
                ?>
            </div>
        </div>
      </div>
   </body>
</html>