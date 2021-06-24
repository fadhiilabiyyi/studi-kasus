<?php 
	// olah data
	if(isset($_POST['submit'])) {
		$nama = htmlspecialchars($_POST["nama"]);
		$tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
		$tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
		$alamat_rumah = htmlspecialchars($_POST["alamat_rumah"]);
		$gender = htmlspecialchars($_POST["gender"]);
		$asal_sekolah = htmlspecialchars($_POST["asal_sekolah"]);
		$nilai_un = htmlspecialchars($_POST["nilai_un"]);

	}

	if( !isset($_POST["submit"]) ) {
		echo "<script>
				alert('terjadi Kesalahan, isi kembali data anda di form');
				window.location.href= 'index.php';
			  </script>";
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h3>Selamat Karena Telah Di Terima Di Universitas Ini</h3>
	<p> Berikut Rincian Data Anda...</p>

	<table border="1px solid black" cellpadding="5" cellspacing="0" style="text-align: center;">
		<tr>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat Rumah</th>
			<th>Jenis Kelamin</th>
			<th>Asal Sekolah</th>
			<th>Nilai UN</th>
		</tr>
		<tr>
			<td><?= $nama ?></td>
			<td><?= $tempat_lahir ?></td>
			<td><?= $tanggal_lahir ?></td>
			<td><?= $alamat_rumah ?></td>
			<td><?= $gender ?></td>
			<td><?= $asal_sekolah ?></td>
			<td><?= $nilai_un ?></td>
		</tr>
	</table>

</body>
</html>

