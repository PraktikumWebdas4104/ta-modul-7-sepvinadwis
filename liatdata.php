<?php 
	session_start();
?>
<center>
<table border="0" width="500">
	<tr>
		<tH width="100"><a href="datamhsbr.php">EDIT DATA</a></tH>
	</tr>
</table>
</center><br><br>

<form method="POST">
	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length="15" value="<?php echo $_SESSION['nim'];?>"></td>
		</tr>


		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $_SESSION['nama'];?>"></td>
		</tr>



		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jekel" value="laki2
				<?php 
						if($_SESSION['jekel']=='Laki-Laki'){
							echo'selected';}?>"
							>Laki-Laki<br/>
				<input type="radio" name="jekel" value="perempuan
				<?php 
						if($_SESSION['jekel']=='Perempuan'){
							echo'selected';}?>"
							>Perempuan<br/>
			</td>
		</tr>



		<tr>
			<td>Prodi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="D3 Manajemen Informatika
					<?php 
						if($_SESSION['prodi']=='D3 Manajemen Informatika'){
							echo'selected';}?>"
							>D3 Manajemen Informatika
				</option>

				<option value="D3 Perhotelan 
					<?php 
						if($_SESSION['prodi']=='D3 Perhotelan'){
							echo'selected';}?>"
							>D3 Perhotelan
				</option>

				<option value="S1 Administrasi Bisnis 
					<?php 
						if($_SESSION['prodi']=='S1 Administrasi Bisnis'){
							echo'selected';}?>"
							>S1 Administrasi Bisnis
				</option>

				<option value="S1 DKV
					<?php 
					if($_SESSION['prodi']=='S1 DKV'){
						echo'selected';}?>"
						>S1 DKV
				</option>

				<option value="S1 Akuntansi 
					<?php 
					if($_SESSION['prodi']=='S1 Akuntansi'){
						echo'selected';}?>"
						>S1 Akuntansi
				</option>
			</select></td>
		</tr>




		<tr>
			<td>FAKULTAS</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="fit 
					<?php 
					if($_SESSION['fakultas']=='fit'){
						echo'selected';}?>"
						>FIT
				</option>

				<option value="fik
				<?php 
					if($_SESSION['fakultas']=='fik'){
						echo'selected';}?>"
						>FIK
				</option>

				<option value="fkb
					<?php 
					if($_SESSION['fakultas']=='fkb'){
						echo'selected';}?>"
						>FKB
				</option>
			</select></td>
		</tr>



		<tr>
			<td>ASAL</td>
			<td>:</td>
			<td><textarea name="asal" value="<?php echo $_SESSION['asal'];?>"></textarea></td>
		</tr>



		<tr>
			<td>MOTO HIDUP</td>
			<td>:</td>
			<td><textarea name="motohidup" value="<?php echo $_SESSION['motohidup'];?>"></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="delete" name="delete" value="HAPUS DATA"></td>
		</tr>
	</table>
	<br>

	<input type="submit" name="update" value="update"> &nbsp; <a href="datamhsbr.php"> <input type="button" name="kembali" value="Kembali"></a>
	
</form>
<?php 
	if(isset($_POST['update'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$jeniskelamin=$_POST['jekel'];
		$prodi=$_POST['prodi'];
		$fakultas=$_POST['fakultas'];
		$asal=$_POST['asal'];
		$motohidup=$_POST['motohidup'];

		$host="localhost";
		$user="root";
		$pass="";
		$db="db_mahasiswabaru";
		$koneksi=mysqli_connect($host,$user,$pass,$db);
		$sql=$koneksi->query("UPDATE `mhs` SET `nama`='$nama',`nim`='$nim',`jeniskelamin`='$jeniskelamin',`prodi`='$prodi',`fakultas`='$fakultas',`asal`='$asal', `motohidup`='$motohidup',");

			echo "DATA BERHASIL DIUPDATE";
	}
 ?>