<?php
	include("hdr.html");

	include("form.html"); 
	$nim=@$_POST["nim"];
	$nama=@$_POST["nama"];
	$kota=@$_POST["kota"];
	
	//simpan kedalam file
		$fileku=fopen("data.txt","a+"); //buka file dengan mode archieve
		$data=$nim."; ".$nama."; ".$kota. "\n"; //gabungkan data 
		fwrite($fileku, $data); //simpan data ke dalam file 
		fclose($fileku); //close agar terjadi write data secara fisik

	echo "<table border='1' style='width: 100%; background: lightblue;''>";
	echo "<tr><td><center>NIM</center></td><td><center>NAMA</center></td><td><center>KOTA</center></td></tr>";
	$buka=fopen("data.txt","r");
        
	while ($isi=fgets($buka)) {
		$pisah=explode(';', $isi);
		echo "<tr><td style='background: white;'>$pisah[0]</td><td style='background: white;'>$pisah[1]</td><td style='background: white;'>$pisah[2]</td></tr>";
	}
	echo "</table>";

	

	include("ftr.html");
?>