<!DOCTYPE html>
<html>
<head>
	<title> Form Pendaftran Universitas </title>
</head>
<body>
<h1> Universitas S.2 </h1>
<h3> Form Pendaftaran </h3>
	<form method="POST">
		<table>
			<tr>
				<td> Nama Lengkap </td>
				<td><input type="text" name="a"></td>
			</tr>
			<tr>
				<td> Tempat Lahir </td>
				<td><input type="text" name="b"></td>
			</tr>
			<tr>
				<td><label for="c"> Tanggal Lahir </label></td>
				<td><input type="date" name="c"></td>
			</tr>
			<tr>
				<td> Alamat Rumah </td>
				<td><textarea name="d"></textarea></td>
			</tr>
			<tr>
				<td> Jenis Kelamin </td>
				<td colspan="1">
					<input type="radio" name="gender" value="Pria">Laki-laki
					<input type="radio" name="gender" value="Wanita">Perempuan
				</td>
			</tr>
			<tr>
				<td> Asal Sekolah </td>
				<td><input type="text" name="f"></td>
			</tr>
			<tr>
				<td> Nilai UN </td>
				<td><input type="number" name="i" value="Nilai"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Kirim">
				</td>
			</tr>
			<tr>
				<td>
					<button> Reset </button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 

	if(isset($_POST['submit'])) {
		$nama = @$_POST['a'];
		$tempat = @$_POST['b'];
		$tanggal = @$_POST['c'];
		$alamat = @$_POST['d'];
		$jk = @$_POST['gender'];
		$asal = @$_POST['f'];
		$nilai = @$_POST['i'];

		echo "Nama Lengkap : " . $nama . "<br>";
		echo "Tempat Lahir : " . $tempat . "<br>";
		echo "Tanggal Lahir : " . $tanggal . "<br>";
		echo "Alamat : " . $alamat . "<br>";
		echo "Jenis Kelamin : " . $jk . "<br>";
		echo "Asal Sekolah : " . $asal . "<br>";
		echo "Nilai UN : " . $nilai . "<br>";
	}
 ?>