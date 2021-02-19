<?php
//session_start();
require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$jobrid=$_REQUEST['rid'];
$uname=$_SESSION['email'];
$qry="select * from bidding b inner join org_reg o inner join job_post j inner join free_reg f on f.email=b.email and o.email=j.comp_mail and  b.bstatus='active' and j.job_id=b.job_id where j.comp_mail='$uname' and j.job_id='$jobrid'";
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
                    <div class="panel-heading"><h3>Bidding List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                          <th data-breakpoints="xs">ID</th>
                          <th>Name of Freelancer</th>
                          <th>Address</th>
                          <th>Area of Study</th>
                          <th>Qualifications</th>
                          <th>Experience</th>
                          <th>Contact</th>   
                          <th>Amount</th>
                          <th>Action</th>
        </thead>
        <tbody>
            <?php
            $i=0;
            foreach ($result as $res) 
            {
                $i++;
            ?>
          <tr data-expanded="true">
                          <td><?php echo $i;?></td>
                          <td><?php echo $res['name']; ?></td>
                          <td><?php echo $res['address']; ?></td>
                          <td><?php echo $res['area_of_study']; ?></td>
                          <td><?php echo $res['degree']; ?>, <?php echo $res['other_quali']; ?></td>
                          <td><?php echo $res['work_exp']; ?></td>
                          <td><?php echo $res['phno']; ?><br><?php echo $res['email']; ?></td>
                          <td><?php echo $res['amount'];?></td>
                          <td>
                            <a href="codes/approve_bid_exe.php?action=update&id=<?php echo $res['bid_id']; ?>&jid=<?php echo $res['job_id'];?>&mail=<?php echo $res['email'];?>" class="btn btn-xs btn-info">Accept</a>
                          </td>
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