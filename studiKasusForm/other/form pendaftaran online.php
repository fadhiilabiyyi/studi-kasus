<!DOCTYPE html>
<html>
<head>
	<title>FORMULIR UNIVERSITAS PANCASILA</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="satu"></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="dua"></td>
			
			<tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td>
				<select name="lima">
					<option>Tanggal</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>

				</select>
				<select name="enam">
					<option>Bulan</option>
					<option>Januari</option>
					<option>Februari</option>
					<option>Maret</option>
					<option>April</option>
					<option>Mei</option>
					<option>Juni</option>
					<option>Juli</option>
					<option>Agustus</option>
					<option>September</option>
					<option>Oktober</option>
					<option>November</option>
					<option>Desember</option>
				</select>
				<select name="tujuh">
					<option>Tahun</option>
					<option>1990</option>
					<option>1991</option>
					<option>1992</option>
					<option>1993</option>
					<option>1994</option>
					<option>1995</option>
					<option>1996</option>
					<option>1997</option>
					<option>1998</option>
					<option>1999</option>
					<option>2000</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
				</select>
				</td>
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