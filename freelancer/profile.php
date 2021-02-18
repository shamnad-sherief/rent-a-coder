<?php require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
 $email=$_SESSION['email']; 
$qry="select * from free_reg where email='$email'";
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
                        <form class="cmxform"  method="post" action="codes/profile_exe.php?action=update">
                          <div class="col-md-12">
                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="Name" value="<?php echo $exe['name'];?>" name="name" pattern="[a-zA-Z ]+" title="Characters only" required>
                              <span class="bar"></span>
                              <label>Name</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <textarea name="address" class="form-text" placeholder="Address" value="<?php echo $exe['address'];?>"   pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" required ><?php echo $exe['address'];?></textarea>
                              <span class="bar"></span>
                              <label>Address</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" placeholder="Mobile Number" pattern="[9876][0-9]{9}" value="<?php echo $exe['phno'];?>" title="Enter a valid mobile number" maxlength="10" minlength="10" required="" name="phno">
                              <span class="bar"></span>
                              <label>Phone Number</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">   
                            <input type="date" name="dob" value="<?php echo $exe['dob'];?>" class="form-text" required="">
                            <span class="bar"></span>
                              <label>Date Of Birth</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">   
                            <input type="text" name="degree" value="<?php echo $exe['degree'];?>" class="form-text" placeholder="degree" pattern="[a-zA-Z ]+" title="Characters only" required="">
                            <span class="bar"></span>
                              <label>Degree</label>
                          </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="institution" placeholder="Name of Institution" required="" pattern="[a-zA-Z ]+" title="Characters only"  value=" <?php echo $exe['institution'];?>">
                              <span class="bar"></span>
                              <label>Institution Name</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" value="<?php echo $exe['university'];?>"  name="university" pattern="[a-zA-Z ]+" title="Characters only"  placeholder="Name of University" required="">
                              <span class="bar"></span>
                              <label>University Name</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" value="<?php echo $exe['other_quali'];?>" name="other_quali" pattern="[a-zA-Z ]+" title="Characters only"  placeholder="Other Qualifications" >
                              <span class="bar"></span>
                              <label>Other Qualification</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="work_exp" placeholder="Work experience" value="<?php echo $exe['work_exp'];?>"  pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers"required="">
                              <span class="bar"></span>
                              <label>Work experience</label>
                            </div>
                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <select name="current_status" required="" class="form-text">
                                    <option value="<?php echo $exe['current_status']; ?>"><?php echo $exe['current_status']; ?></option>
                                    <?php
                                   if($exe['current_status']=="Working")
                                    {
                                        ?>
                                        <option>Not Working </option>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <option>Working</option>
                                        <?php
                                    }
                                    ?>
                                  </select>
                                    <span class="bar"></span>
                                  <label>Work Status</label>
                                   </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" name="work_place" value="<?php echo $exe['work_place'];?>" placeholder="Work Place" pattern="[a-zA-Z ]+" title="Characters only" class="form-text" required="">
                             <span class="bar"></span>
                              <label>Work Place</label>
                          </div>
                           <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" name="post" placeholder="Name of Designation" class="form-text" pattern="[a-zA-Z ]+" title="Characters only"  value=" <?php echo $exe['post'];?>" required="">
                            <span class="bar"></span>
                              <label>Post</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" name="years_worked" value="<?php echo $exe['years_worked'];?>"placeholder="Years of Experience"  pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers"required="" class="form-text">
                              <span class="bar"></span>
                              <label>Years Worked</label>
                          </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <textarea name="area_of_study" placeholder="Area of Study" class="form-text"  pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" value="<?php echo $exe['area_of_study'];?>"><?php echo $exe['area_of_study'];?></textarea>
                            <span class="bar"></span>
                              <label>Area Of Study</label>
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