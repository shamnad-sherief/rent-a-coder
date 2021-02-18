<?php require_once('header.php'); ?>

  		
          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Job Post</h3>
                        
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
                        <form class="cmxform"  method="post" enctype="multipart/form-data"action="codes/jobpost_exe.php?action=insert">
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="job_post" pattern="[a-zA-Z ]+" title="Characters only" required>
                              <span class="bar"></span>
                              <label>Job Position</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="category" pattern="[a-zA-Z ]+" title="Characters only" required>
                              <span class="bar"></span>
                              <label>Category</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" name="description" required>
                              <span class="bar"></span>
                              <label>description</label>
                            </div>
                          
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="[a-zA-Z ]+" title="Characters only"  name="type_of_pro" required>
                              <span class="bar"></span>
                              <label>Type of Project</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" name="needed_skills" required>
                              <span class="bar"></span>
                              <label>Needed Skills</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" name="qualification" required>
                              <span class="bar"></span>
                              <label>Qualification</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <select name="free_type" required="" class="form-text">
                                 <option value="">--Select--</option>
                                      <option value="Freelancer"> Freelancer </option>
                                   <option value="Organization"> Organization </option>               
                                   </select>
                              <span class="bar"></span>
                              <label>Freelancer Type</label>
                            </div>
                            
                            
                          </div>

                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  pattern="[a-zA-Z ]+" title="Characters only" name="country" required>
                              <span class="bar"></span>
                              <label>Country</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" name="lvl_of_exp" required>
                              <span class="bar"></span>
                              <label>Level of Experience</label>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" name="time_required" required>
                              <span class="bar"></span>
                              <label>Time Required</label>
                            </div>
                            
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="date" class="form-text"  name="post_date" required>
                              <span class="bar"></span>
                              <label>Posted Date</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="file" class="form-text"  name="file" required>
                              <span class="bar"></span>
                              <label>File</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="sal_expected" required>
                              <span class="bar"></span>
                              <label>Salary Expected</label>
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                             <select name="status" required="" class="form-text">
                                 <option value="">--Status--</option>
                                      <option value="Active"> Active </option>
                                   <option value="Inactive"> Inactive </option>               
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