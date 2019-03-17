<html
	<head>
    	<title> IDCLAN.CO.ID</title>
     </head>
     <body>
     	<h2>Registration Page</h2>
        <a href="file:///D|/idclan/index.php">Click here to go back!</a><br/><br/>
        <form action="file:///D|/idclan/register.php" method="post">
        	Nama 		  :<input type="text" name="nama" required="required" /> <br/>
            Alamat 		  :<input type="text" name="alamat" required="required" /> <br/>
            Email 		  :<input type="text" name="email" required="required" /> <br/>
            No. Hp 		  :<input type="number" name="handphone" required="required" /> <br/>
            Password 	  :<input type="password" name="password" required="required" /> <br/>
            Tanggal Lahir :<input type="date" name="tanggal_lahir" required="required" /> <br/>
            Game 		  :<input type="text" name="game" required="required" /> <br/>
            ID Game		  :<input type="text" name="id_game" required="required" /> <br/>
            <input type="submit" value="Register"/>
          </form>
        </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$handphone = $_POST['handphone'];
	$password = $_POST['password'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$game = $_POST['game'];
	$id_game = $_POST['id_game'];
	$bool = true;
	
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("idclan.co.id") or die("Cannot connect to database");
	$query = mysql_query("Select * from user");
	if($bool)
	{
		mysql_query("INSERT INTO user (nama, alamat, email, handphone, password, tanggal_lahir, game, id_game) VALUES 				('$nama','$alamat','$email','$handphone','$password','$tanggal_lahir','$game','$id_game')");
	 	print '<script>alert("Successfully Registered!");</script>';
		print '<script>window.location.assign("register.php");</script>';
		}
	}
?>
	
	