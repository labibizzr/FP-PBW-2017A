<?php echo base_url('assets/tinymce/tinymce.min.js');?>

<script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce.min.js');?>"></script>
    <script type="text/javascript">
    tinymce.init({
      selector : 'textarea#mytextarea',

    });
    </script>
  <?php echo validation_errors();?>

  <?php
        echo form_open_multipart('c_admin/create'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="form-signin-heading">Buat berita baru</h2>
      <div class="form-group">
        <label for='penulis'>Penulis</label>
        <?php
      	$txtpenulis = array('name' => 'penulis', 'class' => 'form-control', 'autofocus' => 'autofocus');
      	echo form_input($txtpenulis);
      	?>
      </div>
      <div class="form-group">
        <label for='judul'>Judul</label>
      	<?php  $txtjudul = array('name' => 'judul', 'class' => 'form-control', 'autofocus' => 'autofocus');
      	echo form_input($txtjudul);
      	?>
      </div>
      <div class="form-group">
        <label for="isi">Isi</label>
        <?php $txtisi = array('name' => 'isi', 'class' => 'form-control', 'autofocus' => 'autofocus', 'id' => 'mytextarea');
      	echo form_textarea($txtisi);
      	 ?>
      </div>
      <div class="form-group">
        <label for="gambar">Gambar Thumbnail</label>
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
