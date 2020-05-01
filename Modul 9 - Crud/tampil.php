<h3 align="center">Biodata Mahasiswa</h3>
<table width="80%" border="3" align="center" cellpadding="4" cellpadding="4" margin="10%">
	<tr>
		<td>NIM</td>
		<td>Nama Lengkap</td>
		<td>Tempat Lahir</td>
		<td>Tanggal Lahir</td>
		<td>Jenis Kelamin</td>
		<td>Agama</td>
		<td>Email</td>
		<td>Alamat</td>
	</tr>
<?php
	include "koneksi.php";
	$sql = "select * from mahasiswa ORDER BY nim ASC";
	$form = mysqli_query($conn, $sql); 
?>

<?php $i=1; ?>
<?php foreach ($form as $baris) : ?>

<tr>
	<td> <?php echo $baris['nim'] ?> </td>
	<td> <?php echo $baris['nama'] ?> </td>
	<td> <?php echo $baris['tempat_lahir'] ?> </td>
	<td> <?php echo $baris['tgl_lahir'] ?> </td>
	<td> <?php echo $baris['jk'] ?> </td>
	<td> <?php echo $baris['agama'] ?> </td>
	<td> <?php echo $baris['email'] ?> </td>
	<td> <?php echo $baris['alamat'] ?> </td>
</tr> <?php $i++; ?>
	<?php endforeach; ?>
</table>
<a href="form.php">Kembali</a>