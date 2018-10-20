<!DOCTYPE html>
<html>
<head>
	<title>Form Data Mahasiswa Baru</title>
</head>
<body>
	<form action="#" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jekel" value="laki2">Laki-Laki &nbsp;
				<input type="radio" name="jekel" value="perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Prodi </td>
			<td>:</td>
			<td><select name="prodi" style="width: 160px">
				<option value="prodi">Pilih Prodi</option>
				<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
				<option value="D3 Perhotelan">D3 Perhotelan</option>
				<option value="S1 Administrasi Bisnis">S1 Administrasi Bisnis</option>
				<option value="S1 DKV">S1 DKV</option>
				<option value="S1 Akuntasi">S1 Akuntasi</option>
			</select></td>
		</tr>
	
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas" style="width: 160px">
				<option value="fak">Pilih Fakultas</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FIK">Fakultas Industri Kreatif</option>
				<option value="FKB">Fakultas Komunikasi & Bisnis</option>
			</select></td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="motohidup"></textarea></td>
		</tr>
	

	</table><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
  	if (isset($_POST['submit'])) {
		include"koneksi.php";
		if ($koneksi) {
			
			$nama = $_POST['nama'];
			$nim = $_POST['nim'];
			$jeniskelamin = $_POST['jekel'];
			$prodi = $_POST['prodi'];
			$fakultas = $_POST['fakultas'];
			$asal = $_POST['asal'];	
			$motohidup = $_POST['motohidup'];
	
			$query = "INSERT INTO mhs 
				values ('$nama','$nim','$jeniskelamin','$prodi','$fakultas','$asal','$motohidup')";
				$hasil=mysqli_query($koneksi,$query);
				if($hasil){
					echo "DATA BERHASILLLL DI TAMBAHKAN"."<BR>";
					ECHO"<a href='liatdata.php'>LIHAT AYO</a> Untuk melihat data Mahasiswa";
				}
				else{
					echo"GAGALLLLLL DITAMBAHKAN ";
				}
		
		}
	}  
?>