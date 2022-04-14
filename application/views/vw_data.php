<html>
<head>
	<title>Tampilan Data</title>
</head>

<body>
	<center>
<table>
	<tr>
		<th colspan="3">
		Tampilan Data
	</th>
	</tr>

	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
		<?= $nama; ?>
	</td>
	</tr>
	<tr>
		<td>NIS</td>
		<td>:</td>
		<td><?php echo $nis; ?></td>
	</tr>
    <tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $kelas; ?></td>
	</tr>
    <tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $tanggallahir; ?></td>   
	</tr>
    <tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><?php echo $tempatlahir; ?></td>
	</tr>
    <tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $alamat; ?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $jenis_kelamin; ?></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td><?php echo $agama; ?></td>
	</tr>
	<tr>
	<td colspan="3" align="center">
	<a href="<?= base_url('controller');
	?>">Kembali</a>
	</td>
</tr>	
</table>
</center>
</body>
</html>
