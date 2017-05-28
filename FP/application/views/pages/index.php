

<div class="jumbotron">
            <div class="container text-center">
            <h1>Website Resmi Himatika UNAIR</h1>
            <img src="<?php echo base_url('assets/images/logohima.png') ?>" alt="img" class="img-responsive center-block">
            <br />
            <a href="<?php echo site_url('kepengurusan') ?>" class="btn btn-info">Learn More</a>
            </div>
        </div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <?php for($i=0;$i<count($slider);$i++){?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" <?php if($i==0) echo 'class="active"'; ?></li>
    <?php } ?>
</ol>

<!-- Wrapper for slides -->
<div class="container">
<div class="carousel-inner">

  <?php
  for($i=0; $i<count($slider); $i++){
 ?>
 <div class="item <?php if($i==0) echo 'active' ?> ">
   <img src="<?php echo base_url($slider[$i]['gambar']); ?>" alt="Chania">
   <div class="carousel-caption">
     <h3><?php echo $slider[$i]['title_caption']; ?></h3>
     <p><?php echo $slider[$i]['isi_caption']; ?></p>
   </div>
 </div>
 <?php } ?>

</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">

              <div class ="col-sm-12 text-center">
                <h1 class="title"> Latest News </h1>
              </div>
              <div class="row">
              <?php foreach($berita_recent as $item) {
                $mdy = DateTime::createFromFormat('Y-m-d', $item['tanggal'])->format('d-M-Y');
                        $isi = $item['isi'];
                        $url = url_title($item['judul']);
                        $readmore = '<a href="' .
                            site_url('berita/'.$url).
                            '"> [...] <br />Read more </a>';

                        $content = (strlen($isi)>100)?substr($isi,0,97)
                        . $readmore : $isi;
                 ?>

                 <div class="card">
  <div class="card-block">
    <h4 class="card-title"><a href="<?php echo site_url('berita/view/'.$url) ?>" ><?php echo $item['judul'] ?></h4></a>
    <img class="card-img-top img-responsive" src="<?php echo base_url($item['gambar']) ?>" alt="Card image cap" height="100" width="200">
    <h6 class="card-subtitle mb-2 text-muted">posted on <?php echo $mdy ?></h6>
    <p class="card-text"><?php echo $content ?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
                <!-- <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                          <a href="<?php echo site_url('berita/view/'.$url); ?>">
                            <img src="<?php echo base_url($item['gambar']); ?>" alt="">
                          </a>
                        </div>
                        <a href="<?php echo site_url('berita/view/'.$url); ?>">
                          <h2><?php echo $item['judul']; ?></h2>
                        </a>
                        <p><?php echo $content ?></p>
                    </div>
                </div> -->
                <?php } ?>

            </div>
        </div>
    </section>
    <!--/#services-->
