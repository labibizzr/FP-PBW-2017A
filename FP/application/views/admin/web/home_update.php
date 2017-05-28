<?php echo validation_errors();?>

<?php
      echo form_open_multipart('c_admin/home_update/'.$data['id']);
       ?>
<div class="container">
<div class="row">
  <div class="col-md-8">
    <h2 class="form-signin-heading">Buat berita baru</h2>
    <div class="form-group">
      <label for='penulis'>Title Caption</label>
      <?php
      $txtpenulis = array('name' => 'title_caption', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => $data['title_caption']);
      echo form_input($txtpenulis);
      ?>
    </div>
    <div class="form-group">
      <label for='judul'>Isi Caption</label>
      <?php  $txtjudul = array('name' => 'isi_caption', 'class' => 'form-control', 'autofocus' => 'autofocus', 'value' => $data['isi_caption']);
      echo form_input($txtjudul);
      ?>
    </div>
    <div class="form-group">
      <label for="gambar">Gambar Slider</label>
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
