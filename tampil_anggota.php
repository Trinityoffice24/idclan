<style>
#anggota{
background:#transparent;
border:1px solid #ccc;
margin:auto;
width:710px;
padding:4px;
border-radius:3px;
}
.tabel{
border:1px solid #ccc;
}
#tr{
border:1px solid #ccc;
background:#444;
color:fff;
padding:12px;
text-align:center;
}
</style>
<header>
		<h1 class="judul">IDCLAN.CO.ID</h1>
		<h3 class="deskripsi">Tempat dimana para Gamer terhubung</h3>
	</header>
<div id="anggota">
<p align="center">&raquo;DAFTAR NAMA ANGGOTA&laquo;</p>
<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
$sql="SELECT * FROM user";
$result = mysql_query($sql);
$query = "SELECT 1";
$result = $mysqli->query($query);
$followingdata = $result->fetch_assoc();
echo"<table border='1px'>";
echo"<td>Nama</td>";
echo"<td>jenis Kelamin</td>";
echo"<td>Email</td>";
echo"<td>Alamat</td>";
echo"<td>Game</td>";
echo"<td>ID Game</td>";
echo"</tr>";
while ($row = mysql_fetch_array($result))
{
echo "<tr>";
echo"<td>".$row['nama']."</td>";
echo"<td>".$row['jenis_kelamin']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['alamat']."</td>";
echo"<td>".$row['game']."</td>";
echo"<td>".$row['id_game']."</td>";
echo"</tr>";
}
echo"</table>";
?>
<a href="register.php">&laquo; Back</a>
</div>