<?php 
	if(isset($_POST['tombol'])){
		include 'koneksi.php';
		$form = mysqli_query($conn, "INSERT INTO mahasiswa VALUES
		(NULL, 	'".$nama=$_POST['nama']."',
				'".$temp=$_POST['temp']."',
				'".$tgl=$_POST['tgl']."',
				'".$jk=$_POST['jk']."',
				'".$agm=$_POST['agm']."',
				'".$eml=$_POST['eml']."',
				'".$jln=$_POST['jln']."')");
		if($form){
			echo '<script>alert("Data Berhasil Disimpan");window.location="tampil.php";</script>';
		}
		else{
			echo 'Gagal Daftar';
		}	
	}
?>