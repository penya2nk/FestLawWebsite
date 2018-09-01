<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('parts/V_head.php'); ?>
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(<?php echo base_url(); ?>template/images/slider/slider-2.png)">
        </div>
      </div>
      <a id="tohash" href="#services"><i class="fa fa-angle-down" style="font-size:100px; color:#ef8522"></i></a>
    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <h1><img class="img-responsive" src="<?php echo base_url(); ?>template/images/kecil.png" alt="logo"></h1>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Kegiatan</a></li>
            <li class="scroll"><a href="#about-us">Tentang</a></li>
            <li class="scroll"><a href="#portfolio">Galeri</a></li>
            <li class="scroll"><a href="#contact">Kontak</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Kegiatan</h2>
            <p>Festival Laweyan 2018 ini akan dilaksanakan mulai tanggal 1 Juli hingga 3 Oktober 2018 bertempat di Kampoeng Batik Laweyan, Surakarta, dengan tema <b>"Edukasi dan Eksibisi"</b></p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
          <!-- Cipta Kreasi -->
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <a href="<?php echo site_url("kegiatan/C_CiptaKreasi");?>">
              <div class="service-icon">
                <i class="fa fa-gift"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Cipta Kreasi Cinderamata Laweyan</h3>
              <p><i>1 Juli s.d. 15 September 2018</i></p>
              <p>Merupakan salah satu kegiatan edukasi pengembangan pemberdayaan kreatif warga Laweyan, yaitu berupa Lomba Cipta Cinderamata Khas Kampoeng Batik Laweyan.</p>
            </div>
          </div>
          <!-- Batik Ketitik -->
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <a href="<?php echo site_url("kegiatan/C_BatikKetitik");?>">
              <div class="service-icon">
                <i class="fa fa-star"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Batik Ketitik Laweyan Kuncoro</h3>
              <p><i>1 Juli s.d. 15 September 2018</i></p>
              <p>Merupakan salah satu kegiatan edukasi pengembangan pemberdayaan kreatif warga Laweyan, yaitu berupa Lomba Cipta Kreatif Desain Motif Batik Tulis dan Batik Cap Khas Kampoeng Batik Laweyan.</p>
            </div>
          </div>
          <!-- Laweyan Resik -->
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <a href="<?php echo site_url("kegiatan/C_ResikNyenengke");?>">
              <div class="service-icon">
                <i class="fa fa-trash"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Laweyan Resik Laweyan Nyenengke</h3>
              <p><i>1 Agustus s.d. 30 September 2018</i></p>
              <p>Kegiatan ini merupakan salah satu kegiatan edukasi pengembangan pemberdayaan kreatif warga Laweyan, yaitu berupa Lomba Tata Hias Lingkungan Kampoeng Batik Laweyan.</p>
            </div>
          </div>
          <!-- Miphik -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <a href="<?php echo site_url("kegiatan/C_MiphikLaweyan");?>">
              <div class="service-icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Miphik Nyang Laweyan</h3>
              <p><i>1 September s.d. 3 Oktober 2018</i></p>
              <p>Merupakan bentuk apresiasi kepada wisatawan/pelanggan Kampoeng Batik Laweyan dengan pemberian voucher belanja produk batik di toko/showroom Kampoeng Batik Laweyan.</p>
            </div>
          </div>
          <!-- Nyanthing Nyenengke -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <a href="<?php echo site_url("kegiatan/C_NyanthingNyenengke");?>">
              <div class="service-icon">
                <i class="fa fa-pencil"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Nyanthing Kuwi Nyenengke</h3>
              <p><i>1 September s.d. 3 Oktober 2018</i></p>
              <p>Merupakan salah satu kegiatan edukasi pengenalan cara membuat kain batik kepada masyarakat umum seperti komunitas, organisasi, perusahaan, sekolah, dll secara berkelompok.</p>
            </div>
          </div>
          <!-- Kawah Condrodimuko -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <a href="<?php echo site_url("kegiatan/C_KawahCondrodimuko");?>">
              <div class="service-icon">
                <i class="fa fa-music"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Kawah Condrodimuko</h3>
              <p><i>25 September 2018</i></p>
              <p>Merupakan acara Opening Ceremony Festival Laweyan 2018 yang akan menampilkan pertunjukan kolosal kolaborasi teatrikal tari, musik etnik serta batik perform.</p>
            </div>
          </div>
          <!-- Lensa Laweyan -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="950ms">
            <a href="<?php echo site_url("kegiatan/C_LensaLaweyan");?>">
              <div class="service-icon">
                <i class="fa fa-image"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Lensa Laweyan</h3>
              <p><i>25 September s.d. 3 Oktober 2018</i></p>
              <p>Merupakan kegiatan pameran foto tentang Laweyan tempo dulu sampai sekarang. Pameran foto ini digelar di sepanjang gang-gang kecil dengan dibatasi tembok tinggi yang merupakan lanscape khas perumahan di Kampoeng Batik Laweyan.</p>
            </div>
          </div>
          <!-- Rolasan Bareng Laweyan Wareg -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <a href="<?php echo site_url("kegiatan/C_RolasanWareg");?>">
              <div class="service-icon">
                <i class="fa fa-cutlery"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Rolasan Bareng Laweyan Wareg</h3>
              <p><i>26 September 2018</i></p>
              <p>Merupakan perwujudan manunggal Pemerintah, Pengusaha, Pekerja dan Warga serta para tamu undangan Kampoeng Batik Laweyan dalam bentuk makan siang bersama di sepanjang jalan Sidoluhur yang merupakan jalan utama Laweyan.</p>
            </div>
          </div>
          <!-- Jagongan Laweyan -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1150ms">
            <a href="<?php echo site_url("kegiatan/C_JagonganLaweyan");?>">
              <div class="service-icon">
                <i class="fa fa-microphone"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Jagongan Laweyan</h3>
              <p><i>27 September 2018</i></p>
              <p>Merupakan kegiatan sarasehan warga yang menjadi media sumbang saran bagi warga masyarakat terhadap Pemerintah Kelurahan Laweyan terkait isu-isu pelaksanaan dan perencanaan pembangunan Kelurahan Laweyan sekarang dan yang akan datang.</p>
            </div>
          </div>
          <!-- Fashion -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1250ms">
            <a href="<?php echo site_url("kegiatan/C_FashionStreet");?>">
              <div class="service-icon">
                <i class="fa fa-road"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Fashion on the Street at Night</h3>
              <p><i>29 September 2018</i></p>
              <p>Merupakan kegiatan Peragaan Busana Batik Muslimah yang dilaksanakan di Jalan Sidoluhur dengan menampilkan 500 peragawati terbanyak sebagai upaya pembuatan/pemecahan rekor MURI.</p>
            </div>
          </div>
          <!-- Laweyan Waras -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1350ms">
            <a href="<?php echo site_url("kegiatan/C_LaweyanWaras");?>">
              <div class="service-icon">
                <i class="fa fa-heartbeat"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Laweyan Waras</h3>
              <p><i>30 September 2018</i></p>
              <p>Merupakan kegiatan olah raga jalan sehat keluarga Laweyan dengan rute menyusuri jalan-jalan kecil diantara tembok tembok tinggi perumahan di Kampoeng Batik Laweyan.</p>
            </div>
          </div>
          <!-- Dolanan Laweyan -->
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1450ms">
            <a href="<?php echo site_url("kegiatan/C_DolananLaweyan");?>">
              <div class="service-icon">
                <i class="fa fa-futbol-o"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Dolanan Laweyan</h3>
              <p><i>30 September 2018</i></p>
              <p>Merupakan kegiatan festival yang diperuntukkan bagi anak-anak Laweyan. Dalam konsep dolanan, kegiatan ini akan menggali dan menghidupkan kembali beberapa permainan anak-anak tempo dulu.</p>
            </div>
          </div>
          <!-- Laweyan Award -->
          <div class="col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1550ms">
            <a href="<?php echo site_url("kegiatan/C_LaweyanAward");?>">
              <div class="service-icon">
                <i class="fa fa-trophy"></i>
              </div>
            </a>
            <div class="service-info">
              <h3>Laweyan Award</h3>
              <p><i>2 Oktober 2018</i></p>
              <p>Merupakan kegiatan Closing Ceremony Festival Laweyan 2018 yang berisi penyerahan hadiah bagi  para pemenang Lomba dan penyerahan Laweyan Award dimana Laweyan Award ini merupakan bentuk apresiasi warga Laweyan kepada perorangan, Lembaga, Instansi Pemerintah yang telah berperan aktif dalam pengembangan Kelurahan Laweyan sebagai Kampoeng wisata Batik.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->

  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Tentang Festival Laweyan</h2>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p>Laweyan merupakan salah satu kawasan wisata yang berada di Kota Solo. Dengan jargon Kampoeng Batik dan Kawasan Cagar Budaya,  Laweyan menjadi icon wisata Kota Solo yang telah dikenal hingga manca negara. Saat ini Kampoeng Laweyan telah ditetapkan sebagai salah satu objek vital Nasional bidang pariwisata melalui Keputusan Menteri Pariwisata No. KM.70/UM.001/MP/2016. Apresiasi pemerintah ini menjadi sebuah harapan sekaligus tantangan bagi Kelurahan Laweyan untuk menata kelola pembangunan dan pengembangan kawasan wisata Kampoeng Batik  Laweyan beserta seluruh potensinya, sehingga apresiasi ini akan memberikan dampak yang positif dan konstruktif bagi pengembangan lingkungan Laweyan secara keseluruhan.</p>
            </p>Salah satu bentuk upaya bersama Pemerintah dan warga Kelurahan Laweyan untuk mendukung dan mengembangkan  potensi Laweyan ini adalah melalui penyelenggaraan kegiatan Festival Laweyan.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p>Festival Laweyan merupakan kegiatan kreatif seni budaya kearifan lokal Kelurahan Laweyan yang dilaksanakan setiap tahun. Selain untuk memperingati Hari Ulang Tahun Kampoeng Batik Laweyan serta Hari Batik Nasional, Festival ini juga ditujukan  sebagai upaya penguatan aset-aset pendukung wisata Kampoeng Batik Laweyan  khususnya di bidang kreatif, seni dan budaya.</p>
            <p>Dalam Festival ini akan disajikan beberapa kegiatan kreatif unjuk potensi warga dan wilayah. Sebagai sebuah kawasan destinasi wisata, tentu saja Festival Laweyan ini tidak sekedar  “dipertontonkan” untuk warga Laweyan saja namun juga “diarahkan” untuk menjadi pintu masuk wisatawan sebanyak-banyaknya. Oleh karena itu, konsep berbagi peran dan kerja bersama akan menjadi landasan semangat kerja kreatif Festival kali ini. Pengembangan pemberdayaan kearifan lokal akan menjadi bagian terbesar dari keseluruhan rangkaian kegiatan.</p>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Galeri FESTIVAL LAWEYAN</h2>
          <p>Dokumentasi selama kegiatan FESTIVAL LAWEYAN 2018. Untuk dokumentasi yang lebih lengkap dapat dilihat di  <a href="https://www.facebook.com/festival.laweyan/photos/" target="_blank">Fanspage FESTIVAL LAWEYAN</a></p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-01.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Laweyan Resik Laweyan Nyenengke</h3>
                    <p>Berjalan menyusuri sudut-sudut Kampoeng Batik Laweyan, Solo.</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/bs2-resiknyenengke-01.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-02.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Laweyan Resik Laweyan Nyenengke</h3>
                    <p>Para dewan juri dari Kecamatan, Dinas Pariwisata Solo, dan Kominfo.</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-02.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-03.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Laweyan Resik Laweyan Nyenengke</h3>
                    <p>Foto bersama para perangkat kampung yaitu RT/RW.</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-03.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-04.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Laweyan Resik Laweyan Nyenengke</h3>
                    <p>Foto bersama warga Kampoeng Batik Laweyan Solo.</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-04.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-05.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Laweyan Resik Laweyan Nyenengke</h3>
                    <p>Foto bersama warga Kampoeng Batik Laweyan Solo.</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-05.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-06.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Laweyan Resik Laweyan Nyenengke</h3>
                    <p>Menyantap hidangan yang telah disediakan.</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-06.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-07.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Laweyan Resik Laweyan Nyenengke</h3>
                    <p>Foto bersama warga Kampoeng Batik Laweyan Solo.</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-07.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-08.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Laweyan Resik Laweyan Nyenengke</h3>
                    <p>Foto bersama warga Kampoeng Batik Laweyan Solo.</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href="<?php echo base_url(); ?>template/images/galeri/resiknyenengke/kc2-resiknyenengke-08.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Hubungi Kami</h2>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <!-- <form id="main-contact-form" name="contact-form" method="post" action=<?php //site_url("C_index/send_email") ?>> -->
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>
                <div class="form-group">
                  <!-- <button type="submit" class="btn-submit">Send</button> -->
                  <a type="button" class="btn-submit" href="mailto:festivallaweyan2018@gmail.com" target="_blank" style="text-align: center;">Send</a>
                </div>
              <!-- </form> -->
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Untuk informasi yang lebih detail dapat menghubungi Sekretariat Panitia Festival Laweyan melalui:</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Alamat:</span> Jl. Dr. Radjiman No.521, Laweyan, Surakarta Telp. (0271) 714348</li>
                  <li><i class="fa fa-phone"></i> <span> Telepon:</span> +6281393024467 (Tom Festarandi) </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:festivallaweyan2018@gmail.com"> festivallaweyan2018@gmail.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="http://festivallaweyan.com/">festivallaweyan.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div
  </section><!--/#map-->

  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href=""><img class="img-responsive" src="<?php echo base_url(); ?>template/images/kecil.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="mailto:festivallaweyan2018@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
            <li><a class="facebook" target="_blank" href="https://www.facebook.com/festival.laweyan/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="instagram" target="_blank" href="https://www.instagram.com/festival.laweyan/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2018 - Festival Laweyan</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/" target="_blank">Themeum</a> - Modified by Panitia Festival Laweyan 2018</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
  // Set the date we're counting down to
  var countDownDate = new Date("Sep 25, 2018 19:00:00").getTime();
  // Update the count down every 1 second
  var x = setInterval(function() {
      // Get todays date and time
      var now = new Date().getTime();
      // Find the distance between now an the count down date
      var distance = countDownDate - now;
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      // Output the result in an element with id="demo"
      document.getElementById("countdown").innerHTML = days + "d  " + hours + "h  "
      + minutes + "m  " + seconds + "s  ";
      // If the count down is over, write some text
      if (distance < 0) {
          clearInterval(x);
          document.getElementById("countdown").innerHTML = "TODAY";
      }
  }, 1000);
  </script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>template/js/main.js"></script>

</body>
</html>
