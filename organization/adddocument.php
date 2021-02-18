<?php 
//session_start();
require_once('header.php'); 
require_once("../ConnectionClass.php");
$obj=new ConnectionClass();
$jobrid=$_REQUEST['jid'];
$uname=$_SESSION['email'];
$qry="select * from task t inner join job_post j inner join org_reg o on t.job_id=j.job_id and t.job_id='$jobrid' and o.email=t.email where o.email='$uname' ";
$result=$obj->GetTable($qry);
//var_dump($result);
?>

  		
          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Document Insertion</h3>
                        
                    </div>
                  </div>
                </div>
                <div class="form-element">

               

                 
                <div class="col-md-12 padding-0">
                  
                <div class="col-md-12">
                  <div class="col-md-12 panel">
                    <div class="col-md-12 panel-heading">
                      <h4>Add Document</h4>
                    </div>
                    <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                      <div class="col-md-12">
                        <form method="post" enctype="multipart/form-data" action="codes/insert_exe.php?action=insert&jid=<?php echo $jobrid;?>">
                          <div class="col-md-6">
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                              <input type="file" class="form-text"  name="file" required>
                              <span class="bar"></span>
                              </div>
                          <div class="form-group form-animate-text" style="margin-top:40px !important;">
                             <input type="text" class="form-text"  name="description"  pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" required>
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
            <td><a target="_blank" href="documentadd/docadd/<?php echo $res['document'];?>">View File</a>
              <form method="post" enctype="multipart/form-data" action="codes/editdoc_exe.php?action=pdfupdate&id=<?php echo $res['task_id'];?>&jid=<?php echo $res['job_id'];?>">
                                    
                                      <input type="file" name="fileToUpload" required=""></td>
                                       
            <td><?php echo $res['description1'];?>
              <input type="text" class="form-text"  name="description"  pattern="/^[a-zA-Z0-9 _-.,:']+$/" title="Must contain alphabets and numbers" required>
               <button type="submit" class="btn btn-info btn-sm">Submit</button>
                                
                            </form>
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
          
    
<?php require_once('footer.php'); ?>