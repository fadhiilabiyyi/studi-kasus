<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftran Universitas</title>
</head>
<body>
<h1>Universitas Ternama</h1>
<h3>Form Pendaftaran</h3>
	<form method="POST" action="prosesData.php">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama" required autocomplete="off" autofocus=""></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir" required autocomplete="off"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir" required autocomplete="off"></td>
			</tr>
			<tr>
				<td> Alamat Rumah </td>
				<td><textarea name="alamat_rumah" required autocomplete="off"></textarea></td>
			</tr>
			<tr>
				<td> Jenis Kelamin </td>
				<td colspan="1">
					<input type="radio" name="gender" value="Pria" required>Laki-laki
					<input type="radio" name="gender" value="Wanita" required>Perempuan
				</td>
			</tr>
			<tr>
				<td> Asal Sekolah </td>
				<td><input type="text" name="asal_sekolah" required autocomplete="off"></td>
			</tr>
			<tr>
				<td> Nilai UN </td>
				<td><input type="number" name="nilai_un" value="Nilai" required autocomplete="off"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="input" name="submit">Submit!</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
