<?php
//session_start(); 
require_once('header.php'); 
require_once("../ConnectionClass.php");
$obj=new ConnectionClass();
$jobrid=$_REQUEST['rid'];
$uname=$_SESSION['email'];
$qry="select * from job_post j inner join org_reg r on r.email=j.comp_mail  where r.email='$uname' and j.status='active' and j.job_id='$jobrid'";
$result=$obj->GetSingleRow($qry);
//var_dump($result);
?>

  		
          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Job Post Edit</h3>
                        
                    </div>
                  </div>
                </div>
                <div class="form-element">

               

                 
                <div class="col-md-12 padding-0">
                  
                <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Job Post</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <form class="cmxform"  method="post" action="codes/jobedit_exe.php?action=update&rid=<?php echo $result['job_id']?>">
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="job_post" pattern="[a-zA-Z ]+" title="Characters only" value=" <?php echo $result['job_post'];?>"value=""required>
                              <span class="bar"></span>
                              <label>Job Position</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="category" pattern="[a-zA-Z ]+" title="Characters only"  value=" <?php echo $result['category'];?>" required>
                              <span class="bar"></span>
                              <label>Category</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers"  value=" <?php echo $result['description'];?>"name="description" required>
                              <span class="bar"></span>
                              <label>description</label>
                            </div>
                          
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="[a-zA-Z ]+" title="Characters only"  value=" <?php echo $result['type_of_pro'];?>" name="type_of_pro" required>
                              <span class="bar"></span>
                              <label>Type of Project</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers"  value=" <?php echo $result['needed_skills'];?>"name="needed_skills" required>
                              <span class="bar"></span>
                              <label>Needed Skills</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" name="qualification"  value=" <?php echo $result['qualification'];?>"required>
                              <span class="bar"></span>
                              <label>Qualification</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                               <select name="free_type" required="" class="form-text">
                                    <option value="<?php echo $result['free_type']; ?>"><?php echo $result['free_type']; ?></option>
                                    <?php
                                   if($result['free_type']=="Freelancer")
                                    {
                                        ?>
                                        <option>Organization</option>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <option>Freelancer</option>
                                        <?php
                                    }
                                    ?>
                                </select>
                              <span class="bar"></span>
                              <label>Freelancer Type</label>
                            </div>
                           
                            
                          </div>

                          <div class="col-md-6">
                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  value=" <?php echo $result['country1'];?>" pattern="[a-zA-Z ]+" title="Characters only" name="country" required>
                              <span class="bar"></span>
                              <label>Country</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" name="lvl_of_exp" required  value=" <?php echo $result['lvl_of_exp'];?>">
                              <span class="bar"></span>
                              <label>Level of Experience</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers"  value=" <?php echo $result['time_required'];?>" name="time_required" required>
                              <span class="bar"></span>
                              <label>Time Required</label>
                            </div>
                            
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="date" class="form-text"  value="<?php echo $result['post_date'];?>" name="post_date" required>
                              <span class="bar"></span>
                              <label>Posted Date</label>
                            </div>
                            
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  value=" <?php echo $result['sal_expected'];?>" name="sal_expected" required>
                              <span class="bar"></span>
                              <label>Salary Expected</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <select name="status" required="" class="form-text">
                                    <option value="<?php echo $result['status']; ?>"><?php echo $result['status']; ?></option>
                                    <?php
                                   if($result['status']=="Active")
                                    {
                                        ?>
                                        <option>Inactive</option>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <option>Active</option>
                                        <?php
                                    }
                                    ?>
                                </select>
                              <span class="bar"></span>
                              <label>Status</label>
                            </div>

                          </div>                   
                          <div class="col-md-12">
                              
                              <input class="submit btn btn-danger" type="submit" value="Submit">
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
             
              </div>
              </div>
        
        
        
            </div>
          <!-- end: content -->

    
         
          
    
<?php require_once('footer.php'); ?>