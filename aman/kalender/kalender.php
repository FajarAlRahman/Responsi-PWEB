<?php
	//mengambil tanggal sistem saat ini (1 - 31)
	$hari = date("d");
	//mengambil bulan sistem saat ini (1 12)
	$bulan = date ("m");
	//mengambil tahun sistem saat ini 
	$tahun = date("Y");
	//mencari jumlah hari bulan dan tahun ini 
	$jumlahhari=date("t",mktime(0,0,0, $bulan, $hari, $tahun)); 
?>
	<br><br>
<?php
	switch ($bulan) 
	{
		case 1: $nmbulan = "Januari"; break;
		case 2: $nmbulan = "Februari"; break;
		case 3: $nmbulan = "Maret"; break;
		case 4: $nmbulan = "April"; break; 
		case 5: $nmbulan = "Mei"; break;
		case 6: $nmbulan = "Juni"; break; 
		case 7: $nmbulan = "Juli"; break;
		case 8: $nmbulan = "Agustus"; break;
		case 9: $nmbulan = "September"; break;
		case 10: $nmbulan = "Oktober"; break;
		case 11: $nmbulan = "Nopember"; break; 
		case 12: $nmbulan = "Desember"; break;
	}
	echo "<center><h1>$nmbulan $tahun</h1></center>"; 
?> 
	<style type="text/css">
		td:hover{
			background-color: lightgray;
		}
		a{
			width: 200px;
			padding: 8px 16px;
			text-align: center;
			text-decoration: none;
			margin: 0 10px;
			border-radius: 25px;
			font-weight: bold;
			border: 2px solid #0000ab;
			background: #0000ab;
			color: #fff;
			cursor: pointer;
			transition: background 0.4s;
		}
		a.is-active, a:hover{
			background-color: transparent;
			color: black;
			border: 2px solid black;
		}
	</style>
	<br>
	<table style="border:2px solid #1E90FF" align="center" cellpadding="10"> 
		<tr bgcolor="#ADD8E6">
			<td align=center><font color="#FF0000">Min</font></td>
			<td align=center>Sen</td>
			<td align=center>Sel</td>
			<td align=center>Rab</td> 
			<td align=center>Kam</td>
			<td align=center>Jum</td>
			<td align=center>Sab</td> 
		</tr>
<?php

	$s=date ("w", mktime (0,0,0,$bulan,1,$tahun)); 
	for ($ds=1; $ds<=$s; $ds++) 
	{
		echo "<td></td>";
	}

	for ($d=1; $d<=$jumlahhari; $d++) 
	{
		//jika minggu ke 0, maka buat baris baru 
		if (date("w",mktime (0,0,0,$bulan, $d, $tahun)) == 0)
		{
			echo "<tr>";
		}
		$warna="#000000"; // warna default

		//jika hari Minggu beri warna merah 
		if (date("l",mktime (0,0,0,$bulan, $d, $tahun)) == "Sunday") 
		{
			$warna="#FF0000";
		}
		//Beri warna default tanggal tiap harinya (selain hari minggu) 
		echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";

		//jika hari ke enam, akhiri baris
		if (date("w",mktime (0,0,0,$bulan, $d, $tahun))== 6) 
		{
			echo "</tr>";
		}
	}
	echo '</table>';

	echo "<br><br><center><a href='../home.php'>Home</a></center>"
?>