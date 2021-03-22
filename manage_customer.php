
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Manage Customer
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">Manage Customer</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">	
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	


            	<!--   <div id="result"></div>  -->
            	                
            	
            <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr class="success">
                  
                  <th>cust_name</th>
                  <th>cust_email</th>
                  <th>cust_mobile</th>
                  <th>cust_profile_img</th>
                  <th>cust_age</th>
                  <th>cust_address</th>
                  <th>Status</th>
                  
                  
                  
                  <!-- <th class="text-center">Action</th> -->
                </tr>
                </thead>
                <tbody>
                	<?php 
                	
                	foreach($data as $managepackage)
                		//for($i = 0; $i < count($data); ++$i)
                	{

                	 ?>
                <tr>
                  <td><?php echo $managepackage['cust_name'] ?></td>
               
                  <td><?php echo $managepackage['cust_email'] ?></td>
                  
                  <td><?php echo $managepackage['cust_mobile'] ?></td>
                   <td>
                    <img style="width: 100px;height: 100px;" src="<?php echo base_url('profile_pic/'.$managepackage['cust_profile_img']) ?>" alt="<?php echo $managepackage['cust_profile_img']; ?>">
                  </td>
                 
                  <td><?php echo $managepackage['cust_age'] ?></td>
                  <td><?php echo $managepackage['cust_address'] ?></td>
                 
                  <td><?php echo $managepackage['status'] ?></td>
                  
                 <!--  <td>
                  	<a class="btn" href="<?php //echo base_url('admin/editPackage/'.$managepackage['id']) ?>"><span class="glyphicon glyphicon-pencil text-success" style="font-size: 18px;"></span></a>&nbsp;&nbsp; | &nbsp;&nbsp;
                   	<a  class="btn" onclick="return confirm('Are you sure you want to delete this item?');" href="<?php //echo base_url('admin/deletePackage/'.$managepackage['id']) ?>"><span style="font-size: 18px;" class="glyphicon glyphicon-remove text-danger"></span></a> 
                  </td> -->
                </tr>
                <?php
                }  

            ?>
               
              </table>
          </tbody>
              <div class="pull-right">
            <?php //echo $pagination; ?>
        </div>
            </div>
            
        
    

            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>admin/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>



  
  