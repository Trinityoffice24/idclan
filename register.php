<style>
#daftar{
background:#transparent;
border:1px solid #ccc;
margin:auto;
width:400px;
padding:4px;
border-radius:3px;
}
.texbox{
border:1px solid #ccc;
height:25px;
}
.texarea{
border:1px solid #ccc;
}
.btn{
width:85px;
height:30px;
color:#099;
font-weight:bold;
margin-bottom:3px;
}
.btn:hover{
background:#333;
color:#fff;
font-weight:bold;
cursor:pointer;
border:2px solid #099;
border-radius:4px;
}
</style>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if ($_POST['act']=="add"){
$sql_add="INSERT INTO user (nama,jenis_kelamin,agama,alamat,email,handphone,password,tanggal_lahir,game,id_game) VALUES ("
."'".$_POST['nama']."',
'".$_POST['jenis_kelamin']."',
'".$_POST['agama']."',
'".$_POST['alamat']."',
'".$_POST['email']."',
'".$_POST['handphone']."',
'".$_POST['password']."',
'".$_POST['tanggal_lahir']."',
'".$_POST['game']."',
'".$_POST['id_game']."') ";
mysqli_connect($mysql_hostname , $mysql_username);
echo'<script>alert("Data Berhasil Disimpan");window.location ="tampil_anggota.php";</script>';
}
?>
<header>
		<h1 class="judul">IDCLAN.CO.ID</h1>
		<h3 class="deskripsi">Tempat dimana para Gamer terhubung</h3>
	</header>
    <a href="index.php">Click here to go back!</a><br/><br/>
<div id="daftar">
<p align="center">&raquo;FORM PENDAFTARAN ANGGOTA&laquo;</p>
<table border="0px">
<form method="post" enctype="multipart/form-data">
<tr><td>Nama Lengkap</td> <td>:</td> <td><input name="nama" size="25" class="texbox"></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><select name="jenis_kelamin" class="texbox" value="<?php $_POST['jenis_kelamin']?>">
<option value="pilih">--Pilih--</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select></td></tr>
<tr><td>Agama</td><td>:</td><td><select name="agama" class="texbox" value="<?php $_POST['agama']?>>
<option value="pilih">--Pilih--</option>
<option value="pilih">--Pilih--</option>
<option value="Islam">Islam</option>
<option value="kristen">Kristen</option>
<option value="Hindu">Hindu</option>
<option value="buddha">Buddha</option>
<option value="Katolik">Katolik</option>
</select></td></tr>
<tr><td>Alamat</td> <td>:</td><td><textarea name="alamat" cols="25" rows="3" class="texarea"></textarea></td></tr>
<tr><td>Email</td> <td>:</td><td><input name="email" size="25" class="texbox"></td></tr>
<tr><td>Telepon</td> <td>:</td><td><input name="telepon" size="25" class="texbox"></td></tr>
<tr><td>Password</td> <td>:</td><td><input name="password" size="25" class="texbox"></td></tr>
<tr><td>Tanggal Lahir</td> <td>:</td><td><input name="tanggal_lahir" size="25" class="date"></td></tr>
tr><td>Game</td><td>:</td><td><select name="game" class="texbox" value="<?php $_POST['game']?>>
<option value="pilih">--Pilih--</option>
<option value="pilih">--Pilih--</option>
<option value="DOTA2">DOTA2</option>
<option value="ML">Mobile Legends</option>
<option value="PUBG">PUBG</option>
<option value="PUBGM">PUBG Mobile</option>
<option value="PB">Point Blank</option>
</select></td></tr>
<tr><td>ID Game</td> <td>:</td><td><input name="id_game" size="25" class="texbox"></td></tr>


<tr><td><input type="submit" value="Simpan" class="btn">
<input type="hidden" name="act" value="add"></td></tr>
</table>
</form>
</div>