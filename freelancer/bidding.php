<?php require_once('header.php');
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$email=$_SESSION['email']; 
$jobrid=$_REQUEST['rid'];
$date=$_REQUEST['date'];
?>

      
          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Bidding</h3>
                        
                    </div>
                  </div>
                </div>
                <div class="form-element">

               

                 
                <div class="col-md-12 padding-0">
                  
                <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Bidding</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-2">
                      </div>
                        <div class="col-md-8">
                        <form class="cmxform" id="signupForm" method="post" action="codes/bidding_exe.php?action=insert">
                          <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="amount" required>
                              <span class="bar"></span>
                              <label>Amount</label>
                            </div>
                              <input type="hidden" class="form-text" value="<?php echo $jobrid?>"  name="id" required>
                              <input type="hidden" class="form-text" value="<?php echo $date?>"  name="dt" required>
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