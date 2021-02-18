<?php
//session_start();
 require_once('header.php'); 
require_once("../ConnectionClass.php");
$obj=new ConnectionClass();
$qry="select * from job_post j inner join org_reg r on r.email=j.comp_mail and j.free_type='Freelancer'   where j.status='active'";
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
                    <div class="panel-heading"><h3>Job List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Organization Mail</th>
            <th>Job Postion</th>
            <th>Category</th>
            <th>Description</th>
            <th>Type of Project</th>
            <th>Needed Skills</th>
            <th>Qualification</th>
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
            <td><?php echo $res['comp_mail'];?></td>
            <td><?php echo $res['job_post'];?></td>
            <td><?php echo $res['category'];?></td>
            <td><?php echo $res['description'];?></td>
            <td><?php echo $res['type_of_pro'];?></td>
            <td><?php echo $res['needed_skills'];?></td>
            <td><?php echo $res['qualification'];?></td>
            <td>
              <a class="btn btn-info btn-sm" href="jobview.php?rid=<?php echo $res['job_id'];?>">View More</a>
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