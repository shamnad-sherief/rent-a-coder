<?php
//session_start();
require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$uname=$_SESSION['email'];
$rid=$_REQUEST['rid'];
$qry="select * from request r inner join bidding b on r.job_id=b.job_id where b.bid_id='$rid' and b.bstatus='Accept' order by r.req_id desc";
$result=$obj->GetSingleRow($qry);
$jobid=$result['job_id'];
//var_dump($result);
?>

  		
         
          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Work Progress</h3>
                        
                    </div>
                  </div>
                </div>
                <div class="form-element">

               

                 
                <div class="col-md-12 padding-0">
                  
                <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Work Progress</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <form class="cmxform" method="post" action="codes/req_exe.php?action=update&rid=<?php echo $rid;?>">
                          <div class="col-md-6">
                           <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="id" placeholder="job id" value="<?php echo $jobid;?>" readonly>
                              <span class="bar"></span>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="org_mail" value="<?php echo $result['oemail'];?>" readonly="">
                              <span class="bar"></span>
                            </div>

                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="f_mail" value="<?php echo $result['femail'];?>" readonly="">
                              <span class="bar"></span>
                            </div>
                             <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="status" value="<?php echo $result['status'];?>" required="">
                              <span class="bar"></span>
                            </div>

                          </div>

                        <div class="col-md-6">
                        

                           <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="date" class="form-text"  name="accepted_date" value="<?php echo $result['accepted_date'];?>" readonly="">
                              <span class="bar"></span>
                              
                            </div>


                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="pro_percentage" value="<?php echo $result['pro_percentage'];?>" pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" required>
                              <span class="bar"></span>
                              
                            </div>
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="date" class="form-text"  name="complete_date" value="<?php echo $result['complete_date'];?>">
                              <span class="bar"></span>
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