<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form Pemesanan</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <h1>Penginapan Bukit Indah</h1>
      <h2>Form Pemesanan Kamar</h2>
      <hr size="3" width="50%" align="left" color="black"/>
      <form action="submit.php" method="post" style="width: 30rem;">
         <div style="display: grid;">
            <div class="flex flex-col">
               <div class="flex flex-row justify-left items-center" style="column-gap: 10px; height: 28px;">
                  <p>Kode Kamar</p>
                  <input type="text" name="kode" size="10" required> 
               </div>
               <div class="flex flex-row justify-left items-center" style="column-gap: 10px; height: 28px;">
                  <p>Nama Kamar</p>
                  <input type="text" name="nama" size="10" required> 
               </div>
               <div class="flex flex-row justify-left items-center" style="column-gap: 10px; height: 28px;">
                  <p>Jenis Kamar</p>
                  <select name="jenis_kamar" required>
                     <option value="single_room">Single Room</option>
                     <option value="double_room">Double Room</option>
                     <option value="family_room">Family Room</option>
                  </select>
               </div>
               <div class="flex flex-row justify-left items-center" style="column-gap: 10px; height: 28px;">
                  <p>Type Kamar</p>
                  <div class="flex flex-row">
                     <input type="radio" name="type" value="VIP">VIP</input>
                     <input type="radio" name="type" value="VVIP">VVIP</input>
                  </div>
               </div>
               <div class="flex flex-row justify-left items-center" style="column-gap: 10px; height: 28px;">
                  <p>Banyak Kamar</p>
                  <input type="number" name="banyak" size="10" required>kamar</input>
               </div>
               <div class="flex flex-row justify-left items-center" style="column-gap: 10px; height: 28px;">
                  <p>Lama Kamar</p>
                  <input type="number" name="lama" size="10" required>malam</input>
               </div>
            </div>
         </div>

         <div class="flex flex-row" style="column-gap: 10px;">
            <input type="submit" name="submit" value="Proses">
            <input type="reset" name="reset" value="Batal">
         </div>
      </form>
   </body>
</html>