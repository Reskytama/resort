<html>
<head>
       <title>Form Penginapan</title>
</head>
<body>
 
<h1>PENGINAPAN RESORT</h1>
<h2>Form Pemesanan Kamar</h2>
<hr size=3 width=100% align=left color=black>
<form action="Invoice.php"method=post>
<pre>
<td>Kode Kamar:</td>
<td><input type=text name=Kode_Kamar size=30></td>

<td>Nama Kamar:</td>
<td><input type=text name=Nama_Kamar size=30></td>

<td>Jenis Kamar:</td>
<select name=Jenis_Kamar>
    <option value="Deluxe Room">Deluxe Room
    <option value="Premium Room">Premium Room
    <option value="Family Room">Family Room
</select>
 
Tipe Kamar : <input type=radio name=Tipe_Kamar value=HOTEL>Private Pool<br>
             <input type=radio name=Tipe_Kamar value=HOTELL>Private Pool + Breakfest <br>

Banyak Sewa : <input type=text name=Banyak_Sewa size=3> Kamar

Lama Sewa   : <input type=text name=Lama_Sewa size=3> Malam
</pre>
 
<input type=submit name=submit value=Proses>
<input type=reset name=reset value=Batal>
 
</form>
</body>
</html>