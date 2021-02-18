
<?php
		require_once('header.php');
		?>
<style type="text/css">
	.oiui{
		outline: none;
    font-size: 15px;
    color: #222;
    border: none;
    width: 90%;
    display: inline-block;
    background: transparent;
    letter-spacing: 1px;
	}
</style>
<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1> Code Varification</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="codes/entercode_exe.php" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Enter code" class="oiui" required="" name="code" />
					</div>
					
					
					<div class="bottom">
						<button class="btn">next</button>
					</div>
					<div class="links">
						<p><a href="login.php">Back to Login</a></p>
						<p class="right"><a href="../index.php">Home</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			
		</div>
		
		<?php
		require_once('footer.php');
		?>