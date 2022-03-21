<?php
    $Kode_Kamar=$_POST['Kode_Kamar'];
    $Nama_Kamar=$_POST['Nama_Kamar'];
    $Jenis_Kamar=$_POST['Jenis_Kamar'];
    $Tipe_Kamar=$_POST['Tipe_Kamar'];
    $Banyak_Sewa=$_POST['Banyak_Sewa'];
    $Lama_Sewa=$_POST['Lama_Sewa'];

    if ($Jenis_Kamar=="Deluxe Room")
            {
                $Tarif_Sewa = 150000;
            }

    elseif ($Jenis_Kamar=="Premium Room")
            {
                $Tarif_Sewa=200000;
            }

    else 
            {
                $Tarif_Sewa=300000;
            }

$Subtotal= $Tarif_Sewa * $Lama_Sewa * $Banyak_Sewa;

    if ($Tipe_Kamar=="HOTELL")
            {
                $diskon=0.1*$Subtotal;
            }
    else
            {
                $diskon=0;
            }

$Total = $Subtotal - $diskon;
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Pembayaran Kamar</title>
 </head>
 <body>
<pre>
 <tr>
   <th>Invoice Kamar</th>
   <td>==================</td>
  </tr>
   <td colspan="3" style="border-top: 5px dashed #000"></td>
   <td>Kode Kamar</td>  <td>:</td> <td><?php echo $Kode_Kamar; ?></td>
   <td>Nama Kamar</td>  <td>:</td> <td><?php echo $Nama_Kamar; ?></td>
   <td>Jenis Kamar</td> <td>:</td> <td><?php echo $Jenis_Kamar; ?></td>
   <td>Tipe Kamar</td>  <td>:</td> <td><?php echo $Tipe_Kamar; ?></td>
   <td>Tarif Sewa</td>  <td>:</td> <td><?php echo $Tarif_Sewa; ?></td>
   <td>Banyak Sewa</td> <td>:</td> <td><?php echo $Banyak_Sewa; ?></td>
   <td>Lama Sewa</td>   <td>:</td> <td><?php echo $Lama_Sewa; ?></td>
   <td>===========================</td>
   <td>Subtotal</td>    <td>:</td> <td><?php echo $Subtotal; ?></td>
   <td>Total</td>       <td>:</td> <td><?php echo $Total; ?></td>

</pre>
 </body>
 </html>