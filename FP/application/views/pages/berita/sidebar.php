<div class="col-md-3 col-sm-5">
         <div class="sidebar blog-sidebar ">
             <div class="sidebar-item  recent">
                <?php  ?>
                 <h3>Recent Post</h3>
                <?php foreach($berita_recent as $item) {

                     $mdy = DateTime::createFromFormat('Y-m-d', $item['tanggal'])->format('d-M-Y');
                     list($tanggal,$bulan,$tahun) = explode('-',$mdy);

                     $url = url_title($item['judul']);
                     $readmore = '<a href="' .
                     site_url('berita/'.$url).
                     '"> [...] <br />Read more </a>'
                      ?>
                      <a href="<?php echo site_url('berita/view/'.$url); ?>">
                   <div class="media">
                      <div class="pull-left">
                          <img src="<?php echo base_url($item['gambar']) ?>" height="52" width="52" alt=""></a>
                      </div>
                      <div class="media-body">
                          <h4><a href="<?php echo site_url('berita/'.$url); ?>"><?php echo $item['judul']; ?></a></h4>
                          <p>posted on <?php echo $mdy ?></p>
                      </div>
                 </div>
            </a>
                   <?php } ?>
             </div>

             <!-- <div class="sidebar-item tag-cloud">
                 <h3>Tag Cloud</h3>
                 <ul class="nav nav-pills">
                     <li><a href="#">Corporate</a></li>
                     <li><a href="#">Joomla</a></li>
                     <li><a href="#">Abstract</a></li>
                     <li><a href="#">Creative</a></li>
                     <li><a href="#">Business</a></li>
                     <li><a href="#">Product</a></li>
                 </ul>
             </div> -->
         </div>
     </div>
