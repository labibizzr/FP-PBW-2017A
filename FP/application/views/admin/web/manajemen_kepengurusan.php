<?php echo base_url('assets/tinymce/tinymce.min.js');?>
<!-- <script type="text/javascript" src="http://localhost/FP/assets/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
      selector : 'textarea#mytextarea'
    });
    </script>
     -->
<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js');?>"></script>
    <script type="text/javascript">
    tinymce.init({
      selector : 'textarea#mytextarea',

    });
    </script>
  <?php echo validation_errors();?>

  <?php
        echo form_open_multipart('c_admin/manajemen_kepengurusan');
         ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="form-signin-heading">Edit kepengurusan</h2>
      <div class="form-group">
        <label for='penulis'>Deskripsi</label>
        <?php $txtdeskripsi = array('name' => 'deskripsi', 'class' => 'form-control', 'autofocus' => 'autofocus', 'id' => 'mytextarea', 'value' => $data['deskripsi']);
      	echo form_textarea($txtdeskripsi);
      	 ?>
      </div>
      <div class="form-group">
        <label for="gambar">Gambar Organigram (insert only .png)</label>
        <?php $upgambar = array('name' => 'gambar', 'class' => 'form-control', 'autofocus' => 'autofocus');
      	echo form_upload($upgambar);
      	 ?>
       </div>
      <div class="form-group">
      <?php $button = array('name' => 'submit', 'class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit');
      echo form_button($button,'submit');
      echo form_close();
      ?>
      <div>

      </div>

    </div>
  </div>
 </div>
</div>
