<?php
switch($jenis){
case "beranda" ; include("beranda.php");break;
case "berita_tampil"; include("berita/berita_tampil.php");break;
case "berita_create"; include("berita/berita_create.php");break;
case "berita_update"; include("berita/berita_update.php");break;
case "manajemen_home"; include("web/manajemen_home.php");break;
case "home_update"; include("web/home_update.php");break;
case "manajemen_kepengurusan"; include("web/manajemen_kepengurusan.php");break;
case "manajemen_prokda"; include("web/manajemen_prokda.php");break;
}
 ?>
