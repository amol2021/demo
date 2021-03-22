
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()  ?>admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">Customer form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
     
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-offset-3 col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">

              <center><h3 class="box-title">Customer Form</h3></center> 
             <center><?php 
              echo $this->session->flashdata('message');
              ?></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" name="myform" id="myform" enctype="multipart/form-data">
              <div class="box-body">

                
                <div class="form-group">
                  <label for="package_name" class="col-sm-3 control-label">Customer Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="cust_name" name="cust_name" placeholder="Customer Name">
                  </div>
                </div>

                
             
               

                 <div class="form-group">
                  <label for="required_time" class="col-sm-3 control-label">Customer Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="cust_email" name="cust_email" placeholder="Customer Email">
                  </div>
                 </div>

                 <div class="form-group">
                  <label for="package_details" class="col-sm-3 control-label">Customer Address</label>

                  <div class="col-sm-9">
                    
                     <textarea class="form-control" id="cust_address" name="cust_address" rows="5" id="comment" placeholder="Customer Address"></textarea>
                  </div>
                 </div>

                 <div class="form-group">
                 <label for="category_image"  class="col-sm-3 control-label">Customer Profile image</label>
              
                <div class="col-sm-9">
                   <input type="file" class="form-control-file" id="cust_profile_img" name="cust_profile_img">
                </div>
                </div>

                <div class="form-group">
                  <label for="percentage" class="col-sm-3 control-label">Customer Mobile</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="cust_mobile" name="cust_mobile" placeholder="Customer Mobile">
                  </div>
                 </div>

               

                <div class="form-group">
                  <label for="add_on_benefit" class="col-sm-3 control-label">Customer Age</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="cust_age" name="cust_age" placeholder="Customer Age">
                  </div>
                 </div>

                <div class="form-group">
                 <label for="status" class="col-sm-3 control-label">Status</label>
              
                <div class="col-sm-9">
                  <input type="radio" class="" id="status" name="status" value="Active" checked="checked" >Active
                  <input type="radio" class="" id="status1" name="status" value="Inactive" style="margin-left: 15px;">Inactive
                </div>
              </div>

                 

               <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                   <button type="submit" name="submit" class="btn btn-info">Submit</button>
                </div>
               </div>

                 
               
              </div>
              <!-- /.box-body -->
             
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
         
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <script src="<?php echo base_url() ?>assets/js/jquery-2.2.4.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
  <script type="text/javascript">

(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            
            $("#myform").validate({

                rules: {
                   
                    cust_name: "required",

                    cust_email: "required",

                    cust_address: "required",

                    cust_profile_img: "required",

                    cust_mobile:  "required",

                    cust_age: "required",

                    
                  
                  
                },
                 messages: {
                    cust_name: "Please enter the Customer Name ",
                   
                    cust_email: "Please enter the Customer Email",

                    cust_address: "Please enter the Customer Address",

                    cust_profile_img: "Please Insert the Customer Profile Image",

                    cust_mobile:  "Please Enter the Customer Mobile",

                    cust_age: "Please enter the Customer Age",

                   
                   
                   
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>


  
 