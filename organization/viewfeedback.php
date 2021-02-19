<?php
//session_start();
 require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$uname=$_SESSION['email'];
$qry="select * from feedback f inner join org_reg r inner join free_reg fr on fr.fid=f.tofree and r.email=f.fromorg where r.email='$uname'";
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
                    <div class="panel-heading"><h3>Feedback List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Organizer</th>
            <th>Freelancer</th>
            <th>Posted Date</th>
            <th>Rating</th>
            <th>Details</th>
            <th>Actions</th>
          </tr>
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
            <td><?php echo $res['fromorg'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $da=date("d-m-Y", strtotime($res['date']) );?></td>
            <td><?php echo $res['rating'];?></td>
            <td><?php echo $res['details'];?></td>
            <td>
                <a class="btn btn-danger btn-sm" href="codes/feedback_exe.php?action=delete&rid=<?php echo $res['feed_id'];?>" onclick="return confirm('Are you sure to delete?');">DELETE</a>
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