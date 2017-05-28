<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Berita</h1>
                            <p>Berita seputar himatika unair</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">

                       <?php foreach($berita as $berita_item) :
                          $mdy = DateTime::createFromFormat('Y-m-d', $berita_item['tanggal'])->format('d-M-Y');
                          list($tanggal,$bulan,$tahun) = explode('-',$mdy);
                          $isi = $berita_item['isi'];
                          $url = url_title($berita_item['judul']);
                          $readmore = '<a href="' .
                              site_url('berita/'.$url).
                              '"> [...] <br />Read more </a>';

                          $content = (strlen($isi)>350)?substr($isi,0,347)
                          . $readmore : $isi;
                           ?>
                          <!-- berita blog -->
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <a href="<?php echo site_url('berita/view/'.$url); ?>">
                                       <img src="<?php echo base_url($berita_item['gambar']); ?>" height="850" width="400" class="img-responsive" alt="">
                                    </a>
                                    <div class="post-overlay">
                                       <span class="uppercase"><a href="#"><?php echo $tanggal;?><br><small><?php echo $bulan;?></small></a></span>
                                   </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="<?php echo site_url('berita/view/'.$url); ?>"><?php echo $berita_item['judul']; ?></a></h2>
                                    <h3 class="post-author">
                                       <a href="<?php echo site_url('berita/view/'.$url); ?>">Posted by <?php echo $berita_item['penulis']. "  on ". $mdy; ?></a>
                                    </h3>
                                    <p><?php echo $content; ?></p>
                                    <div class="post-bottom overflow">
                                    </div>
                                </div>
                            </div>
                        </div>

                     <?php endforeach; ?>

                    </div>
                    <div class="blog-pagination">

                         <ul class="pagination">

                           <li><a href="<?php echo site_url('berita/'.($this->uri->segment(2)-5)) ?>">left</a></li>
                           <?php for($i=0;$i<$link_count;$i++){ ?>
                           <li <?php if($this->uri->segment(2) == ($i*5)) echo 'class="active"'; ?>><a href="<?php echo site_url('berita/'.($i*5)); ?>"><?php echo $i+1 ?></a></li>
                          <!-- <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li class="active"><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#">6</a></li>
                          <li><a href="#">7</a></li>
                          <li><a href="#">8</a></li>
                          <li><a href="#">9</a></li> -->
                          <?php } ?>
                          <li><a href="<?php echo site_url('berita/'.($this->uri->segment(2)+5)) ?>">right</a></li>
                        </ul>
                    </div>
                 </div>
              </div>
              <?php include 'sidebar.php'; ?>
              </div>
              </section>
    <!--/#blog-->
