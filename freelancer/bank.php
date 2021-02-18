<?php 
//session_start();
require_once('header.php'); 
require_once("../ConnectionClass.php");
$obj=new ConnectionClass();
 $email=$_SESSION['email']; 
 $qryy3="select fid from free_reg where email='$email'";
 $fid=$obj->GetSingleData($qryy3);
 //echo $oname;
$qry="select * from payment p inner join org_reg o inner join bank b  on o.oid=p.from and b.email='$email' where p.tofree='$fid'";
$result=$obj->GetTable($qry);
//var_dump($result);
?>

  		
         <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Bank Details</h3>
                        
                    </div>
                  </div>
              </div> 
  
             <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>View Bank Details</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                       <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Organisor Name</th>
            <th>Date</th>
            <th>Amount</th>
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
             <td><?php echo $res['org_name'];?></td>
            <td><?php echo $da=date("d-m-Y", strtotime($res['pay_date']) );?></td>
             <td><?php echo $res['pay_amount'];?></td>
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