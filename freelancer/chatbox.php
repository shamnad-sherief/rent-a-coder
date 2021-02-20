<?php
//session_start(); 
require_once('header.php'); 
require_once('../connectionclass.php');
$obj=new ConnectionClass();
$uname=$_SESSION['email'];
$qry="select * from chatbox c inner join org_reg r inner join free_reg fr on fr.fid=c.fid and r.oid=c.oid where fr.email='$uname'";
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
            <th>Organization Name</th>
            <th>Message from Organization</th>
            <th>Reply to Organization</th>
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
            <td><?php echo $res['org_name'];?></td>
            <td><?php echo $res['message'];?></td>
            <td>
            <form class="cmxform"  method="post" action="codes/chat_exe.php?action=update&cid=<?php echo $res['chat_id'];?>">
              <div class="form-group form-animate-text">
                              <input type="text" class="form-text"  name="reply" value="<?php echo $res['reply'];?>" required="">
                               <input class="submit btn btn-danger" type="submit" value="Submit">
                              </div>
                          </form></td>
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