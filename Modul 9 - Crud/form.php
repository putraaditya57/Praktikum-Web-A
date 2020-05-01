<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="box-form">
		<div class="title-form">
			Formulir Pendaftaran Mahasiswa
		</div>

		<div class="content-form">
			<form action="insert.php" method="post">
				Nama Lengkap<br>
				<input type="text" name="nama" /><br>
				Tempat Lahir<br>
				<input type="text" 	name="temp" /><br>
				Tanggal Lahir<br>
				<input type="date" 	name="tgl" /><br>
				Jenis Kelamin<br>
				<input type="radio" name="jk" value="L"/>Laki-Laki
				<input type="radio" name="jk" value="P" />Perempuan<br>
				Agama<br>
				<input type="text" name="agm" /><br>
				E-Mail<br>
				<input type="text" name="eml" /><br>
				Alamat<br>
				<textarea name="jln"></textarea><br>
				<input type="submit" name="tombol" value="Daftar" />
			</form>
		</div>

	</div>
</body>
</html>