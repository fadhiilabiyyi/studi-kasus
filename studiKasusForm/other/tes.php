<!DOCTYPE html>
<html>
<head>
	<title>FORMULIR UNIVERSITAS PANCASILA</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Nama Lengkap </td>
				<td><input type="text" name="satu"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="dua"></td>
			<tr>
			<tr>
				<td><label for="birthday"> Tanggal Lahir </label></td>
				<td><input type="date" id="birthday" name="birthday"></td>
			</tr>
				<td>Alamat Rumah</td>
				<td>:</td>
				<td><textarea name="empat"></textarea></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td colspan="1">
					<input type="radio" name="gender" value="pria">Laki-laki
					<input type="radio" name="gender" value="wanita">Perempuan
				</td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><input type="text" name="sekolah"></td>
			</tr>
			<tr>
				<td>Nilai UN</td>
				<td>:</td>
				<td><input type="number" name="un" value="nilai"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Kirim">
					<input type="reset" name="reset" value="Batal">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php

	if (isset($_POST['submit'])) {
		$nama = @$_POST['satu'];
		$tempatlahir = @$_POST['dua'];
		$tanggallahir = @$_POST['lima'];
		$bulanlahir = @$_POST['enam'];
		$tahunlahir = @$_POST['tujuh'];
		$alamat = @$_POST['empat'];
		$jeniskelamin = @$_POST['gender'];
		$asalsekolah = @$_POST['sekolah'];
		$nilaiun = @$_POST['un'];

		echo "<br> <br> <br> Terimakasih telah mendaftarkan diri di Universitas Pancasila, Semoga diterima dan jangan lupa berdoa<br>";
		echo "Nama : " . $nama . "<br>";
		echo "Tempat Lahir : " . $tempatlahir . "<br>";
		echo "Tanggal Lahir : " . $tanggallahir . "<br>";
		echo "Bulan Lahir : " . $bulanlahir . "<br>";
		echo "Tahun Lahir : " . $tahunlahir . "<br>";
		echo "Alamat : " . $alamat . "<br>";
		echo "Jenis Kelamin : " . $jeniskelamin . "<br>";
		echo "Asal Sekolah : " . $asalsekolah . "<br>";
		echo "Nilai UN yang diperoleh : " . $nilaiun . "<br>";
	}
?>