<?php require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
 $email=$_SESSION['email']; 
$qry="select * from org_reg where email='$email'";
$exe=$obj->GetSingleRow($qry);
  		?>
          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Settings</h3>
                        
                    </div>
                  </div>
                </div>
                <div class="form-element">

               

                 
                <div class="col-md-12 padding-0">
                  
                <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-2">
                      </div>
                        <div class="col-md-8">
                        <form class="cmxform"  method="post" action="codes/profileorg_exe.php?action=update">
                          <div class="col-md-12">
                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="Name" value="<?php echo $exe['org_name'];?>" name="org_name" pattern="[a-zA-Z ]+" title="Characters only" required>
                              <span class="bar"></span>
                              <label>Name of Organization</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="location" value="<?php echo $exe['location'];?>" name="location" pattern="[a-zA-Z ]+" title="Characters only" required>
                              <span class="bar"></span>
                              <label>Location</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <textarea name="address" class="form-text" placeholder="Address" value="<?php echo $exe['address'];?>" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" required ><?php echo $exe['address'];?></textarea>
                              <span class="bar"></span>
                              <label>Address</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="Country" value="<?php echo $exe['country'];?>" name="country" pattern="[a-zA-Z ]+" title="Characters only" required>
                              <span class="bar"></span>
                              <label>Country</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="State" value="<?php echo $exe['state'];?>" name="state" pattern="[a-zA-Z ]+" title="Characters only" required>
                              <span class="bar"></span>
                              <label>State</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="City" value="<?php echo $exe['city'];?>" name="city" pattern="[a-zA-Z ]+" title="Characters only" required>
                              <span class="bar"></span>
                              <label>City</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="Pincode" value="<?php echo $exe['pincode'];?>" name="pincode" pattern="[6789][0-9]+" minlength="6" maxlength="6"   required>
                              <span class="bar"></span>
                              <label>Pincode</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="license Number" value="<?php echo $exe['license_no'];?>" name="license_no" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers"required>
                              <span class="bar"></span>
                              <label>Licence Number</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="Mobile Number" pattern="[9876][0-9]{9}" value="<?php echo $exe['ph_no'];?>" title="Enter a valid mobile number" maxlength="10" minlength="10" required="" name="ph_no">
                              <span class="bar"></span>
                              <label>Phone Number</label>
                            </div>
                          </div>                 
                          <div class="col-md-12">
                              
                              <input class="submit btn btn-danger" type="submit" value="Submit">
                        </div>
                      </form>

                    </div>
                    <div class="col-md-2">
                      </div>
                  </div>
                </div>
              </div>
             
              </div>
              </div>
        
        
        
            </div>
          <!-- end: content -->

    
         
          
    
<?php require_once('footer.php'); ?>