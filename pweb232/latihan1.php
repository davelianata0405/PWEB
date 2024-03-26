<html>
     <head>
        <title>Form Barang</title>
     </head>

     <body>

    <table border="3">
	<tr>
	    <th rowspan="2">Kode</th>
        <th rowspan="2">Nama Barang</th>
	    <th rowspan="2">Satuan</th>
	    <th colspan="2">Harga</th>
		<th rowspan="2">Foto</th>	   
	    <th rowspan="2">Action</th>	
	</tr>

	<!-- ini baris 2 -->

	<tr>             
	    
	     <td>Beli</td>
	     <td>Jual</td>
	
    <!-- ini baris 3 (isian) -->
	<tr>
	     <td>M01</td>
         <td>Spidol</td>
	     <td>Biji</td>
	     <td>3000</td>
	     <td>5000</td>
	     <td>
			<img src="spidol.jpg" alt="Spidol" style="width:100px;height:100px">
		 </td>
		 <td>
           
		 <a href="latihan1.2.php" target="_blank"><input type="button" name="Update" value="Update"></a>
           
	     </td>		
	</tr>

    <tr>
	     <td>M02</td>
         <td>Bolpoin</td>
	     <td>Biji</td>
	     <td>1000</td>
	     <td>2000</td>
	     <td><img src="bolpoin.jpeg" alt="Bolpoin" style="width:100px;height:100px"></td>
		 <td>
		 <a href="latihan1.2.php" target="_blank"><input type="button" name="Update" value="Update"></a>
	     </td>		
	</tr>
    </table>
	<a href="latihan1.3.php" target="_blank"><input type="button" name="Insert" value="Insert"></a>
     </body>
</html>