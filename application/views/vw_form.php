<html>
<head>
	<title></title>
</head>
<body>
    <?php echo validation_errors(); ?>
    <center>
<form action="<?= base_url('controller/cetak'); ?>"
method="post">
	<label>Nama Siswa : </label>
	<input type="text" name="nama"> <br/>
	<label>NIS : </label>
	<input type="nis" name="nis"> <br/>
    <label>Kelas : </label>
	<input type="kelas" name="kelas"> <br/>
    <label>Tanggal Lahir : </label>
    <input type='date' name="tanggallahir"> <br/>
    <label>Tempat Lahir : </label>
	<input type="tempatlahir" name="tempatlahir"> <br/>
    <label>Alamat : </label>
    <textarea name="alamat"></textarea><br/><br/>
	<label>Jenis Kelamin : </label>
	<input type='radio' name='jenis_kelamin' value='pria' />Pria
        <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan<br/>
    <label>Agama : </label>
    <select name="agama">
    	<option value="islam">Islam</option>
    	<option value="kristen">Kristen</option>
    	<option value="katolik">Katolik</option>
    	<option value="hindu">Hindu</option>
    	<option value="budha">Budha</option>
        <option value="protestan">Protestan</option>
        <option value="konghucu">Konghucu</option>
    </select><br/>
    <td colspan="3" align="center">
    <input type="submit" name="tombol" value="Simpan"/>
</form>
</center>
</body>
</html>