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
		<h3 class="heading mb-sm-5 mb-4 text-center"> Register Now as Freelancer</h3>
		
		<form action="codes/freelancer_exe.php?type=Freelancer" method="post">
			<div class="row">
				<div class="col-md-6 contact-left">
					<input type="text" name="name" placeholder="Your Name" required="" pattern="[a-zA-Z ]+" title="Characters only">

					<textarea name="address" placeholder="Address" required="" class="commonstle"></textarea>

					<input type="text" placeholder="Mobile Number" pattern="[9876][0-9]{9}" title="Enter a valid mobile number" maxlength="10" minlength="10" required="" name="phno">

					<input type="date" name="dob" class="commonstle" required="">
					<input type="text" placeholder="Email" required="" class="commonstle" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter Valid Email ID" name="email">

					
					<input type="text" name="degree" required=""  placeholder="Degree Name"  class="commonstle">
					<input type="text" name="institution" placeholder="Name of Institution" required="" class="commonstle">
					<input type="text" name="university" placeholder="Name of University" required="" class="commonstle">
					<input type="text" name="other_quali" placeholder="Other Qualifications"  class="commonstle">
					<input type="text" name="work_exp" placeholder="Work experience" required="" class="commonstle">

					</div>
				<div class="col-md-6 contact-right mt-md-0 mt-4">
					<input type="text" name="work_place" placeholder="Work Place" class="commonstle">
					
					<input type="text" name="post" placeholder="Name of Designation" class="commonstle">
					<input type="text" name="years_worked" placeholder="Years of Experience" required="" class="commonstle">
					

					<select name="current_status" required="" class="commonstle">
						<option value="">--Current working status--</option>
						<option value="Working"> Working </option>
	                    <option value="Notworking"> Not Working </option>               
					</select>
					<textarea name="area_of_study" placeholder="Area of Study" class="commonstle"></textarea>

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