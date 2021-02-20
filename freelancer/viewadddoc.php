<?php
//session_start();
require_once('header.php'); 
require_once("../connectionclass.php");
$obj=new ConnectionClass();
$jobrid=$_REQUEST['jid'];
$qry="select * from task t inner join job_post j inner join org_reg o on t.job_id=j.job_id  and o.email=t.email where  t.job_id='$jobrid'";
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
                    <div class="panel-heading"><h3>Document List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Job Id</th>
            <th>File</th>
            <th>Description</th>
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
            <td><?php echo $res['job_id'];?></td>
            <td><a target="_blank" href="../Organization/documentadd/docadd/<?php echo $res['document'];?>">View File</a></td>
            <td><?php echo $res['description1'];?></td>
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