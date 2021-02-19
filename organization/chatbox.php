<?php
///session_start(); 
require_once('header.php'); 
require_once('../connectionclass.php');
$obj=new ConnectionClass();
$uname=$_SESSION['email'];
    $qry2="select * from free_reg f inner join request r on f.email=r.femail where r.oemail='$uname'  ";
    $result=$obj->GetTable($qry2);
    //var_dump($result);
$qry="select * from chatbox c inner join org_reg r inner join free_reg fr on fr.fid=c.fid and r.oid=c.oid where r.email='$uname'";
$result1=$obj->GetTable($qry);
//var_dump($result1);
?>

  		
          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Chatbox</h3>
                        
                    </div>
                  </div>
                </div>
                <div class="form-element">

               

                 
                <div class="col-md-12 padding-0">
                  
                <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Chatbox Messages</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-2">
                      </div>
                        <div class="col-md-8">
                        <form class="cmxform" id="signupForm" method="post" action="codes/chat_exe.php?action=insert">
                          <div class="col-md-12">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="text" class="form-text"  name="details" required>
                              <span class="bar"></span>
                              <label>Description</label>
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

    
         
          
     <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">List</h3>
                        
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Chat List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Freelancer Name</th>
            <th>Message to Freelancer</th>
            <th>Reply from Freelancer</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($result1 as $res) 
            {
                $i++;
            ?>
          <tr data-expanded="true">
            <td><?php echo $i;?></td>
            <td><?php echo $res['name'];?></td>
            <td><?php echo $res['message'];?></td>
              <?php 
            if($res['reply']=='')
            {
              ?>
              <td><?php echo "Waiting For Freelancer Reply";?></td>
              <?php
            }
            else
            {
              ?>
              <td><?php echo $res['reply'];?></td>
              <?php
            }
            ?>
            <td><?php echo $da=date("d-m-Y", strtotime($res['date']) );?></td>
          </tr>
          <?php
            }
            ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
<?php require_once('footer.php'); ?>