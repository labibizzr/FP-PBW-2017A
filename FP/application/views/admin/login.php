
<?php echo validation_errors();
?>
    <!-- <label for="username">Username</label>
    <input type="input" name="username" /><br />

    <label for="password">Password</label>
    <input type="password" name="password"  /><br />

    <input type="submit" value="submit" /> -->

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Login</title>

    <!-- Latest compiled CSS -->

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/signin.css" media="screen" rel="stylesheet" type="text/css" />

    <script language="javascript">

  function validasi(form){
    if (form.username.value==""){
	  alert("Username masih kosong");
	  form.username.focus();
	  return (false);
	}
    if (form.password.value==""){
	  alert("Password masih kosong");
	  form.password.focus();
	  return (false);
	}
  return (true);
  }
  </script>

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">

           <?php
            $frm_login = array('class' => 'form-signin', 'onsubmit' => 'return validasi(this)');
            echo form_open('admin', $frm_login);
           ?>
           <h2 class="form-signin-heading">Login administrator</h2>
           <div class="form-group">
           <?php
           $txtuser = array('name' => 'username', 'class' => 'form-control', 'placeholder' => 'Masukan Username', 'autofocus' =>'autofocus');
    	     echo form_input($txtuser);?>
           </div>
           <div class="form-group">
           <?php $txtpass = array('name' => 'password', 'class' => 'form-control', 'placeholder' => 'Masukan Password');
        	 echo form_password($txtpass); ?>
           </div>
           <div class="form-group">
        	 <?php $button = array('name' => 'login', 'class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit'); ?>
           <a href="<?php echo site_url('admin/lupapassword')?>"><p> forgot password ? </p> </a>

           <?php echo form_button($button,'Login'); ?>

        	 <?php echo form_close(); ?>

           </div>
         </div>
         <div class="col-md-4">
         </div>
        </div>
      </div>
    <!-- JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  </body>
</html>
