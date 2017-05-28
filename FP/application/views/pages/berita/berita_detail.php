<?php
      $mdy = DateTime::createFromFormat('Y-m-d', $berita[0]['tanggal'])->format('d-M-Y');
      list($tanggal,$bulan,$tahun) = explode('-',$mdy);

 ?>
<section id="page-breadcrumb">
 <div class="vertical-center sun">
      <div class="container">
          <div class="row">
              <div class="action">
                  <div class="col-sm-12">
                      <h1 class="title"><?php echo $berita[0]['judul']; ?></h1>

                  </div>
              </div>
          </div>
      </div>
 </div>
</section>
<section id="blog-details" class="padding-top">
      <div class="container">
          <div class="row">
              <div class="col-md-9 col-sm-7">
                  <div class="row">
                  <!-- Detail Berita -->
                       <div class="col-md-12 col-sm-12">
                          <div class="single-blog blog-details two-column">
                              <div class="post-thumb">
                                  <a href="#"><img src="<?php echo base_url($berita[0]['gambar']); ?>" class="img-responsive" alt=""></a>
                                  <div class="post-overlay">
                                      <span class="uppercase"><a href="#"><?php echo $tanggal; ?> <br><small><?php echo $bulan; ?></small></a></span>
                                  </div>
                              </div>
                              <div class="post-content overflow">
                                  <h2 class="post-title bold"><a href="#"><?php echo $berita[0]['judul']; ?></a></h2>
                                  <h3 class="post-author">
                                        <a href="#">Posted by <?php echo $berita[0]['penulis']. "  on " .$mdy; ?></a>
                                  </h3>
                                  <p><?php echo $berita[0]['isi']; ?></p>
                                  <div class="post-bottom overflow">
                                      <ul class="nav navbar-nav post-nav">
                                          <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- end of Detail berita -->
                  </div>
               </div>
                <?php include('sidebar.php') ?>
              </div>
            </div>
          </section>
