
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Agent Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">



  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
.login-page, .register-page {
    background-image: url('<?php echo base_url(); ?>assets/js/importedmedia.jpg');
}
 
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b style="color: white">Agent Register</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
   <p class="login-box-msg"><?php $userdata = $this->session->userdata('userdata');
    
    if($userdata =='' ){ echo $this->session->flashdata('error'); }  ?></p><br>

    <form action="" method="post">
      
       <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Agent Name" name="name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

       <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Agent Email" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

       <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="Agent Mobile" name="mobile" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>



      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Agent / User" name="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div> 


      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
      
        <!-- /.col -->
        <div class="col-md-12">
         <center><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></center>
        </div>

        
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
