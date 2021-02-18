<?php
		require_once('header.php');
		?>
<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1> Login form</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="codes/login_exe.php" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" placeholder="User Name" name="email" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" placeholder="Password" name="password" required=""/>
					</div>
					<div class="login-check">
						 
					</div>
					<div class="bottom">
						<button class="btn">Log In</button>
					</div>
					<div class="links">
						<p><a href="forgotpassword.php">Forgot Password?</a></p>
						<p class="right"><a href="../reg.php">New User? Register</a></p>
						<div class="clear"></div>
					</div>
					<div class="links">
						<p align="center" style="padding-left: 75px;"><a href="../index.php">Home</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			
		</div>
		
		<?php
		require_once('footer.php');
		?>