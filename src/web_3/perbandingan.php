<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      <title>perbandingan</title>
   </head>
   <body>
      <div class="flex flex-col" style="gap: 5px;">
        <div class="flex flex-col">
            <div> Operator Pertambahan</div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 105px;">
                <?php 
                $bill_1 = 200;
                $bill_2 = 40;
                $hasil = $bill_1 + $bill_2;
               
                echo "$bill_1 + $bill_2 = $hasil";
                ?>
            </div>
        </div>
        <div class="flex flex-col">
            <div> Operator Pengurangan</div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 102px;">
                <?php 
                $bill_1 = 200;
                $bill_2 = 40;
                $hasil = $bill_1 - $bill_2;
               
                echo "$bill_1 - $bill_2 = $hasil";
                ?>
            </div>
        </div>
        <div class="flex flex-col">
            <div> Operator Perkalian</div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 107px;">
                <?php 
                $bill_1 = 200;
                $bill_2 = 40;
                $hasil = $bill_1 * $bill_2;
               
                echo "$bill_1 * $bill_2 = $hasil";
                ?>
            </div>
        </div>
        <div class="flex flex-col">
            <div> Operator Pembagian</div>
            <div style="background-color: blueviolet; color: white; border-radius: 0.5rem; padding-left: 0.5rem; width: 82px;">
                <?php 
                $bill_1 = 200;
                $bill_2 = 40;
                $hasil = $bill_1 / $bill_2;
               
                echo "$bill_1 / $bill_2 = $hasil";
                ?>
            </div>
        </div>
      </div>
   </body>
</html>