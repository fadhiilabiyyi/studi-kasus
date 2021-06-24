<!DOCTYPE html>
<html>
<head>
	<title> Form Pendaftaran Universitas </title>
</head>
<body>

<h1> Universitas S </h1>
<h3> Form Pendaftaran </h3>
	<form method="POST">
		<table>
			<tr>
				<td> Nama Peserta </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td> Tempat Lahir </td>
				<td><input type="text" name="born"></td>
			</tr>
			<tr>
				<td><label for="birthday"> Tanggal Lahir </label></td>
				<td><input type="date" id="birthday" name="birthday"></td>
			</tr>
			<tr>
				<td> Alamat Rumah </td>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<td> Jenis Kelamin </td>
				<td><input type="radio" name="kelamin" value="Laki-laki">Laki-laki</td>
				<td><input type="radio" name="kelamin" value="Perempuan">Perempuan</td>
			</tr>
			<tr>
				<td> Asal Sekolah</td>
				<td><input type="text" name="from"></td>
			</tr>
			<tr>
				<td>Nilai UN</td>
				<td><input type="number" name="score"></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="Kirim"></td>
			</tr>
		</table>
	</form>	

	<?php  
	if(isset($_POST['kirim'])){
		$name = $_POST['name'];
		$born = $_POST['born'];
		$birthday = $_POST['birthday'];
		$address = $_POST['address'];
		$kelamin = $_POST["kelamin"];
		$from = $_POST['from'];
		$score = $_POST['score'];
		 if(empty($name)){
		 		echo "...";
		 	}else{
		 		echo "Nama Lengkap : " . $name;
		 	}
		 	echo "<br>";
		 	if(empty($born)){
		 		echo "...";
		 	}else{
		 		echo "Tempat Lahir : " . $born;
		 	}
		 	echo "<br>";
		 	if(empty($birthday)){
		 		echo "...";
		 	}else{
		 		echo "Tanggal Lahir : " . $birthday;
		 	}
		 	echo "<br>";
		 	if(empty($address)){
		 		echo "...";
		 	}else{
		 		echo "Alamat Rumah : " . $address;
		 	}
		 	echo "<br>";
		 	if(empty($kelamin)){
		 		echo "...";
		 	}else{
		 		echo "Jenis Kelamin : " . $kelamin;
		 	}
		 	echo "<br>";
		 	if(empty($from)){
		 		echo "...";
		 	}else{
		 		echo "Asal Sekolah : " . $from;
			}
		 	echo "<br>";
		 	if(empty($score)){
		 		echo "...";
		 	}else{
		 		echo "Nilai UAN : " . $score;
		 	}
		}
 	?>

</body>
</html>