<?php
//session_start();
require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$uname=$_SESSION['email'];
$qry="select * from request where oemail='$uname' order by req_id desc";
$result=$obj->GetTable($qry);
//var_dump($result);
?>

  		
         <!-- start: Content -->
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
                    <div class="panel-heading"><h3>Accept Bidding List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                          <th data-breakpoints="xs">ID</th>
                          <th>Job Id</th>
                          <th>Organization Mail</th>
                          <th>Freelancer Mail</th>
                          <th>Status</th>
                          <th>Accepted Date</th>
                          <th>Project Percentage</th>   
                          <th>Completed Date</th>
                          <th>Action</th>
        <tbody>
            <?php
            $i=0;
            foreach ($result as $res) 
            {
                $i++;
            ?>
          <tr data-expanded="true">
                          <td><?php echo $i;?></td>
                          <td><?php echo $res['job_id']; ?></td>
                          <td><?php echo $res['oemail']; ?></td>
                          <td><?php echo $res['femail']; ?></td>
                          <td><?php echo $res['status']; ?></td>
                          <td><?php echo $da=date("d-m-Y", strtotime($res['accepted_date']) );?></td>
                          <td><?php echo $res['pro_percentage']; ?></td>
                          <td><?php echo $res['complete_date'];?></td>
                          <td><a href="bankdetails.php?action=insert&job_id=<?php echo $res['job_id']; ?>" class="btn btn-xs btn-info">Payment</a></td>
                          
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