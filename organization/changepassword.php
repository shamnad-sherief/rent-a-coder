<?php require_once('header.php'); ?>

  		
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
                      <h4>Change Password</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-2">
                      </div>
                        <div class="col-md-8">
                        <form class="cmxform" id="signupForm" method="post" action="codes/changepassword_exe.php">
                          <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="currentpass" required>
                              <span class="bar"></span>
                              <label>Current Password</label>
                            </div>

                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_password" name="newpass" required>
                              <span class="bar"></span>
                              <label>New Password</label>
                            </div>

                            

                           
                         
                           
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="password" class="form-text" id="validate_confirm_password" name="conpass" required>
                              <span class="bar"></span>
                              <label>Confirm Password</label>
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