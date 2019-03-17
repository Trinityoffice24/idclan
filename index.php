<!DOCTYPE html>
<html>
<head>
	<title>IDCLAN</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">IDCLAN.CO.ID</h1>
		<h3 class="deskripsi">Tempat dimana para Gamer terhubung</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=news">NEWS</a></li>
			<li><a href="index.php?page=standing">STANDING</a></li>
            <li><a href="index.php?page=contact">CONTACT</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'news':
				include "halaman/news.php";
				break;
			case 'standing':
				include "halaman/standing.php";
				break;
			case 'contact':
				include "halaman/contact.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
	<a href="login.php"> Click here to Login<a><br/>
 	<a href="register.php"> Click here to Register<a><br/>   
</body>
</html>