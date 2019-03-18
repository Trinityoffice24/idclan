<?php 
session_start();
	$is_ajax = $_REQUEST['is_ajax'];
	if(isset($is_ajax) && $is_ajax)
	{
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		include('../koneksi/koneksi.php');
		$sql=mysql_query("SELECT * FROM user WHERE email='$email' AND password='$password'");
		$num_rows=mysql_num_rows($sql);
		
		if($num_rows>0)
		{
			$rows=mysql_fetch_array($sql);
			$email=$rows['email'];
			$_SESSION['email']=$email;
			echo "success";
		}
	}

?>