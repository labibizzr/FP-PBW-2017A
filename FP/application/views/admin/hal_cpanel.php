<!-- <?php echo base_url(); ?> -->

  </head>
<body>

  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
      <a href="<?php echo site_url('admin/beranda') ?>"  <p class="navbar-brand">Halaman Admin Himatika Unair</p> </a>
      </div>
      <div id="navbar-brand" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><?php  echo anchor('admin','logout'); ?></li>
        </ul>
      </div>
    </div>
  </nav>
<div id="demo" class="collapse">
Lorem ipsum dolor text....
</div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
       <div class="list-group">
         <a href="<?php echo site_url('admin/beranda');?>" class="list-group-item"> Beranda </a>
         <a href="<?php echo site_url('admin/berita_tampil'); ?>" class="list-group-item"> Manajemen Posting </a>
         <hr>
         <a href="<?php echo site_url('admin/manajemen_home'); ?>" class="list-group-item"> Slideshow Home </a>
       </div>
      </div>

  <div class="col-md-10">
   <?php include "main_content_cPanel.php" ?>
  </div>
 </div>
</div>
