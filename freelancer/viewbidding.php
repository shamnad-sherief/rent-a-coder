<?php
//session_start();
require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$uname=$_SESSION['email'];
$jid=$_REQUEST['job_id'];
$qry="select * from bidding b inner join free_reg f inner join login l inner join job_post j on l.username=f.email and l.status='active' and f.email=b.email  where f.email='$uname' and j.job_id=b.job_id and b.job_id='$jid'";
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
            <th>Amount</th>
            <th>Status</th>
            <th>Progress</th>
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
            <td><?php echo $res['amount'];?></td>
            <td><?php echo $res['bstatus'];?></td>
            <td>
              <?php 
              if($res['bstatus']=='Accept')
              {
                ?>
               <a class="btn btn-info btn-sm" href="progress.php?rid=<?php echo $res['bid_id'];?>">Progress</a>
               <?php 
              }
              
              elseif($res['bstatus']=='Reject')
              {
                ?>
               <a class="btn btn-danger btn-sm">Rejected</a>
               <?php
} 
              else
              {
                echo "Bidding is active";
              }
              ?>
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