<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<header>
		<h1 class="judul">IDCLAN.CO.ID</h1>
		<h3 class="deskripsi">Tempat dimana para Gamer terhubung</h3>
	</header>
    <a href="index.php">Click here to go back!</a><br/><br/>
<body>
<div class="lg-container">
		<h1>LOGIN USER</h1>
		<form action="akses/p_login_member.php" id="lg-form" name="lg-form" method="post">
			
		  <div>
			<label for="email">email:</label>
			  <input type="text" name="email" id="email" placeholder="email"/>
		  </div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			
		</form>
		<div id="message"></div>
</div>
</body>
</html>