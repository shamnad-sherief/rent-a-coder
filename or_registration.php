<?php 
require_once('header.php');
?>
<style type="text/css">
	.commonstle
	{
		border: 1px solid #ccc;
	    font-size: 1em;
	    color: #828282;
	    background: none;
	    width: 100%;
	    font-weight: 600;
	    letter-spacing: 1px;
	    padding: 15px 20px;
	    outline: none;
	    margin: 0.5em 0;
	}
</style>
<!-- banner -->
<div class="inner-banner" id="home">
	<div class="container">
	</div>
</div>
<!-- //banner -->

<!-- contact -->
<section class="contact py-5">
	<div class="container py-sm-3">
		<h3 class="heading mb-sm-5 mb-4 text-center"> Register Now as Organozation</h3>
		
		<form action="codes/org_exe.php?type=Organization" method="post">
			<div class="row">
				<div class="col-md-6 contact-left">
					<input type="text" name="org_name" placeholder="Your Name" required="" pattern="[a-zA-Z ]+" title="Characters only"> <div style="min-height: 10px;"></div>
					<input type="text" name="location" placeholder="Location" required="">

					<textarea name="address" placeholder="Address" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" required="" class="commonstle"></textarea>

					<input type="text" name="country" pattern="[a-zA-Z ]+" title="Characters only" placeholder="Country" required="" class="commonstle">
					<input type="text" name="state" pattern="[a-zA-Z ]+" title="Characters only" placeholder="State" required="" class="commonstle">
					<input type="text" name="city" pattern="[a-zA-Z ]+" title="Characters only" placeholder="City"  class="commonstle">

					
					
					

					</div>
				<div class="col-md-6 contact-right mt-md-0 mt-4">
					<input type="text" placeholder="PIN Code" name="pincode" pattern="[6789][0-9]+" minlength="6" maxlength="6"  required="" class="commonstle">
					<input type="text" placeholder="License Number" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" name="license_no" class="commonstle">

					<input type="text" placeholder="Contact Number" pattern="[9876][0-9]{9}" title="Enter a valid mobile number" maxlength="10" minlength="10" required="" name="ph_no" class="commonstle">

					
					<input type="text" placeholder="Email" required="" class="commonstle" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter Valid Email ID" name="email">


					<input type="password" name="password" placeholder="Password" required="" class="commonstle">
					<input type="password" name="cpass" placeholder="Confirm Password" required="" class="commonstle">
				
					<button class="btn">Send Request</button>
				</div>
			</div>
		</form>
	</div>
</section>
<!-- //contact -->


			<?php
		require_once('footer.php');
		?>