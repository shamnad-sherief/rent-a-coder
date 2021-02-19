<?php
//session_start(); 
require_once('header.php'); 
require_once('../connectionclass.php');
$obj=new ConnectionClass();
$uname=$_SESSION['email'];
    $qry2="select * from free_reg f inner join request r on f.email=r.femail where r.oemail='$uname'  ";
    $result=$obj->GetTable($qry2);
    //var_dump($result);
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
                      <h4>Feedback</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-2">
                      </div>
                        <div class="col-md-8">
                        <form class="cmxform" id="signupForm" method="post" action="codes/feedback_exe.php?action=insert">
                          <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="details" required>
                              <span class="bar"></span>
                              <label>Description</label>
                            </div>

                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="number" class="form-text"  name="rating" required>
                              <span class="bar"></span>
                              <label>Rating</label>
                            </div>
               
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <select class="form-text" name="id" required="">
                                    <option value="">--Select freelancer --</option><br>
                                    <?php
                                    foreach($result as $r)
                                    {

                                    ?>
                                        <option value="<?php echo $r['fid']; ?>">  
                                         <?php echo $r['name'];?></option>
                                     <?php
                                 }
                                 ?>
                                </select>
                              
                              <span class="bar"></span>
                             
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