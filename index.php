<!DOCTYPE html>
<html>
<head>
<!-- For CSS Used, using Bootstrap 41 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="niagahoster-style.css">
</head>
<body>

<div class="container">
    <!-- Navbar Notification -->
    <div class="top-navbar-1">
        <ul class="nav-top d-none d-xl-flex">
            <li>
                <a href="tel:0274-2885822" aria-label="Telephone" class="nh-navbar__subnav-item-link">
                    <i class="nh-navbar__subnav-item-icon  fas fa-phone"></i>
                    0274-2885822
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="Intercom('show');" aria-label="Live Chat" class="nh-navbar__subnav-item-link">
                    <i class="nh-navbar__subnav-item-icon  fas fa-comment-alt"></i>
                    Live Chat
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" onclick="Intercom('show');" aria-label="Live Chat" class="nh-navbar__subnav-item-link">
                    <i class="nh-navbar__subnav-item-icon  fas fa-comment-alt"></i>
                    Member Area
                </a>
            </li>
        </ul>
    </div>
    <!-- Menu utama -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="frontend-test/assets/png/niagahoster-logo-300x72.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Hosting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Domain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Server</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Website</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Afiliasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
            </ul>
            <!--
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <!-- First Content: Title -->
    <div class="content-first row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <p class="content-first-title-1">
                PHP Hosting
            </p>
            <p class="content-first-subtitle-1">
                Cepat, Handal, penuh dengan modul PHP yang anda butuhkan.
            </p>
            <ul class="content-first-list-marker">
                <li>
                    Solusi PHP untuk peforma query yang lebih cepat
                </li>
                <li>
                    Konsumsi memori yang lebih rendah.
                </li>
                <li>
                    Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7
                </li>
                <li>
                    Fitur ekripsi IonCube dan Zend Guard Loaders
                </li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <img src="frontend-test/assets/svg/illustration banner PHP hosting-01.svg">
        </div>
    </div>
    <!-- End of First Content -->
    <!-- Second Content: Post-Title -->
    <!-- Logo Zenguard, composer Ion -->
    <div class="content-second">
        <table>
            <tr>
                <td>
                    <img src="frontend-test/assets/svg/icon PHP Hosting_zendguard.svg">
                </td>
                <td>
                    <img src="frontend-test/assets/svg/icon PHP Hosting_composer.svg">
                </td>
                <td>
                    <img src="frontend-test/assets/svg/icon PHP Hosting_ioncube.svg">
                </td>
            </tr>
            <tr>
                <td>
                    PHP Zend Guard Loader
                </td>
                <td>
                    PHP Composer
                </td>
                <td>
                    PHP ionCube Loader
                </td>
            </tr>
        </table>
            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <img src="frontend-test/assets/svg/icon PHP Hosting_zendguard.svg">
                PHP Zend Guard Loader
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <img src="frontend-test/assets/svg/icon PHP Hosting_composer.svg">
                PHP Composer
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <img src="frontend-test/assets/svg/icon PHP Hosting_ioncube.svg">
                PHP ionCube Loader
            </div> -->
        
        
    </div>
    <!-- Third Content -->
    <div class="content-third row">
        <div class="col-12">
            <p class="content-third-title-1">
            <b>Paket Hosting Singapura yang Tepat</b>
            </p>
            <p class="content-third-subtitle-1">
            Diskon 40% + Domain dan SSL Gratis untuk Anda.
            </p>
        </div>
    </div>
    <!-- Fourth Content -->
    <div class="content-fourth row">
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <table>
                <tr>
                    <td class="content-fourth-title-package">
                        Bayi
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-old-price">
                        <del>Rp. 19.900<del>
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-new-price">
                        Rp. <span>14</span>.900 / bln
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-user-register">
                        938 pengguna terdaftar
                    </td>
                </tr>
                    <!-- Benefit Each Package -->
                <tr>
                    <td class="content-fourth-detail">
                        0.5X Resource Power             <br>
                        500 MB Disk Space               <br>
                        Unlimited Bandwidth             <br>
                        Unlimited Databases             <br>
                        1 Domain                        <br>
                        Instant Backup                  <br>
                        Unlimited SSL Gratis Selamanya  <br>
                        <button>
                        Pilih sekarang!
                        </button>
                    </td>
                </tr>
            </table>   
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <table>
                <tr>
                    <td class="content-fourth-title-package">
                        Pelajar
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-old-price">
                        <del>Rp. 46.900<del>
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-new-price">
                        Rp. <span>23</span>.450 / bln
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-user-register">
                        4.168 pengguna terdaftar
                    </td>
                </tr>
                <!-- Benefit Each Package -->
                <tr>
                    <td class="content-fourth-detail">
                        1X Resource Power               <br>
                        Unlimited Disk Space            <br>
                        Unlimited Bandwidth             <br>
                        Unlimited POP3 Email            <br>
                        Unlimited Databases             <br>
                        10 Addon Domains                <br>
                        Domain Gratis Selamanya         <br>
                        Instant Backup                  <br>
                        Unlimited SSL Gratis Selamanya  <br>
                        <button>
                        Pilih sekarang!
                        </button>
                    </td>
                </tr>
            </table>   
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <table >
                <tr>
                    <td class="content-fourth-title-package">
                        Personal
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-old-price">
                        <del>Rp. 58.900<del>
                    </td>
                </tr>
                <tr >
                    <td class="content-fourth-new-price">
                        Rp. <span>38</span>.900 / bln
                    </td>
                </tr>
                <tr >
                    <td class="content-fourth-user-register">
                        10.017 pengguna terdaftar
                    </td>
                </tr>
                <!-- Benefit Each Package -->
                <tr>
                    <td class="content-fourth-detail">
                        2X Resource Power               <br>
                        Unlimited Disk Space            <br>
                        Unlimited Bandwidth             <br>
                        Unlimited POP3 Email            <br>
                        Unlimited Databases             <br>
                        Unlimited Addon Domains         <br>
                        Instant Backup                  <br>
                        Domain Gratis Selamanya         <br>
                        Unlimited SSL Gratis Selamanya  <br>
                        Private Name Server  <br>
                        SpamAssasin Mail Protection  <br>
                        <button>
                        Pilih sekarang!
                        </button>
                    </td>
                </tr>
            </table>   
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <table>
                <tr>
                    <td class="content-fourth-title-package">

                        Bisnis
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-old-price">
                        <del>Rp. 109.900<del>
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-new-price">
                        Rp. <span>65</span>.900 / bln
                    </td>
                </tr>
                <tr>
                    <td class="content-fourth-user-register">
                        3.552 pengguna terdaftar
                    </td>
                </tr>
                <!-- Benefit Each Package -->
                <tr >
                    <td class="content-fourth-detail">
                        3X Resource Power               <br>
                        Unlimited Disk Space            <br>
                        Unlimited Bandwidth             <br>
                        Unlimited POP3 Email            <br>
                        Unlimited Databases             <br>
                        Unlimited Addon Domains         <br>
                        Magic Auto Backup & Restore     <br>
                        Domain Gratis Selamanya         <br>
                        Unlimited SSL Gratis Selamanya  <br>
                        Private Name Server             <br>
                        Prioritas Layanan Support       <br>
                        (Icon star 5x)                  <br>
                        SpamExpert Pro Mail Protection  <br>
                        <button>
                        Diskon 40%
                        </button>
                    </td>
                </tr>
            </table>   
        </div> 
    </div>
    <!-- PHP Advantage and Features -->
    <div class="content-4">
        <p align=center>
        Powerful dengan limit PHP yang lebih besar
        </p>
        <br>
        <div class=row>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <table>
                    <tr>
                        <td>
                            max executing time 300s
                        </td>
                    </tr>
                    <tr>
                        <td>
                            max executing time 300s
                        </td>
                    </tr>
                    <tr>
                        <td>
                            php memory limit 1024 MB
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <table>
                    <tr>
                        <td>
                            post max size 1024 MB
                        </td>
                    </tr>
                    <tr>
                        <td>
                            upload max filesize 1024 MB
                        </td>
                    </tr>
                    <tr>
                        <td>
                            max input vars 2500
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Div divider -->
    <div class=divider>
    </div>
    <!-- Include package inside PHP -->
    <div class="include-package">
        <p align=center>
            Semua Paket Hosting Sudah Termasuk
        </p>
        <br>
        <div class=row>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <img>
                <p align=center>
                PHP Semua Versi
                </p>
                <br>
                <p align=center>
                Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <img>
                <p align=center>
                MySql Versi 5.6
                </p>
                <br>
                <p align=center>
                Nikmati MySQL versi terbaru, tercepat, dan kaya akan fitur.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <img>
                <p align=center>
                Panel Hosting cPanel
                </p>
                <br>
                <p align=center>
                Kelola website dengan panel canggih yang familiar di hati Anda.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <img>
                <p align=center>
                Garansi Uptime 99.9%
                </p>
                <br>
                <p align=center>
                Data center yang mendukung kelangsungan web anda 24/7.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <p align=center>
                Database InnoDB Unlimited
                </p>
                <br>
                <p align=center>
                Jumlah dan ukuran database yang tumbuh sesuai kebutuhan anda.
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                
                <p align=center>
                Wildcard Remote MySQL
                </p>
                <br>
                <p align=center>
                Mendukung s/d 25 max_user_connections dan 100 max_connections
                </p>
            </div>
        </div>
    </div>
        <!-- Div divider -->
        <div class=divider>
    </div>
    <!-- Fully support laravel-->
    <div class="support-laravel">
        <p align=center>
            Mendukung Penuh Framework Laravel
        </p>
        <div class=row>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                Tak perlu menggunakan dedicated server maupun VPS yang mahal.
                Layanan PHP hosting murah kami mendukung penuh framework favorit Anda
                <ul>
                    <li>
                        Install Laravel 1 klik dengan Softaculous Installer.
                    </li>
                    <li>
                        Mendukung ekstensi PHP MCrypt, phar, mbstring, json, dan fileinfo.
                    </li>
                    <li>
                        Tersedia compser dan SSH untuk menginstall packages pilihan Anda.
                    </li>
                </ul>
                <p>
                    Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis
                </p>
                <button>
                    Pilih Hoting anda
                </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0">
                <img>
            </div>
        </div>
    </div>
    <!-- PHP Modules-->
    <div class="php-modul">
        Modul lengkap untuk Menjalankan Aplikasi PHP Anda
        <table>
            <tr>
                <td>
                    IcePHP <br>
                    apc <br>
                    apcu <br>
                    apm <br>
                    ares <br>
                    bcmath <br>
                    mbcompiler <br>
                    big_int <br>
                    bitset <br>
                    bloomy <br>
                    bz2_filter <br>
                    clamav <br>
                    coin_acceptor <br>
                    crack <br>
                    dba <br>
                </td>
                <td>
                    http <br>
                    huffman <br>
                    idn <br>
                    igbinary <br>
                    imagick <br>
                    imap <br>
                    inclued <br>
                    inotify <br>
                    interbase <br>
                    intl <br>
                    ioncube_loader <br>
                    ioncube_loader_4 <br>
                    jsmin <br>
                    json <br>
                    ldap <br>
                </td>
                <td>
                    nd_pdo_mysql <br>
                    oauth <br>
                    oci8 <br>
                    odbc <br>
                    opcache <br>
                    pdf <br>
                    pdo <br>
                    pdo_dblib <br>
                    pdo_firebird <br>
                    pdo_mysql <br>
                    pdb_odbc <br>
                    pdo_pgsql <br>
                    pdo_sqlite <br>
                    pgsql <br>
                    phalcon <br>
                </td>
                <td>
                    stats <br>
                    stem <br>
                    stomp <br>
                    suhosin <br>
                    sybase_ct <br>
                    sysvmsg <br>
                    sysvsem <br>
                    sysvshm <br>
                    tidy <br>
                    timezonedb <br>
                    trader <br>
                    translit <br>
                    uploadprogress <br>
                    uri_template <br>
                    uuid <br>
                </td>
            </tr>
        </table>
        <p align=center>
            <button>
                Selengkapnya
            </button>
        </p>
    </div>
    <!-- Live Linux Hosting-->
    <div class="live-linux-hosting row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>
            Linux Hosting yang Stabil dengan Teknologi LIVE
        </h3>
        <p>
            SuperMicro IntelXeon 24-cores server dengan RAM 128 GB dan teknologi LIVE CloudLinux untuk stabilitas server anda.
            Dilengkapi dengan SSD untuk kecepatan MySQL dan caching, Apache load balancer berbasis LiteSpeed Technologies, 
            CageFS security, Raid-10 protection dan auto backup untuk keamanan website anda.
        </p>
        <p align=center>
            <button>
                Pilih Hoting Anda
            </button>
        </p>
        </div>
        <!-- For image, not shown if mobile -->
        <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0">
        <img>
        </div>
    </div>

</div>
<!-- Footer : Share -->
<div class="footer-show container">
    <div class=row>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            Bagikan jika anda menyukai halaman ini
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Detail tombol share Facebook, Twitter, Google
        </div>

</div>
<!-- Footer : Contact -->
<div class="footer-contact container">
    Perlu BANTUAN? Hubungi Kami : 0274-5305505 | 
    <button>Live chat</button>
</div>
<!-- Footer : Main  Menu -->
<div class="footer-main container">
    <div class=row>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            HUBUNGI KAMI
            <br><br>
            <br>0274-5305505 
            <br>Senin - Minggu
            <br>24 Jam Nonstop
            <br>
            <br>Jl. Selokan Mataram Monjali
            <br>Karangjati MT I/304
            <br>Sinduadi, Mlati, Sleman
            <br>Yogyakarta 55284

        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            LAYANAN
            <br>
            <br><a>Domain</a>
            <br><a>Shared Hosting</a>
            <br><a>Cloud VPS Hosting</a>
            <br><a>Managed VPS Hosting</a>
            <br><a>Web Builder</a>
            <br><a>Keamanan SSL / HTTPS</a>
            <br><a>Jasa Pembuatan Website</a>
            <br><a>Program Affiliasi</a>
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            SERVICE HOSTING
            <br>
            <br><a>Hosting Murah</a>
            <br><a>Hosting Indonesia</a>
            <br><a>Hosting Singapura SG</a>
            <br><a>Hosting PHP</a>
            <br><a>Hosting Wordpress</a>
            <br><a>Hosting Laravel</a>

            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            TUTORIAL
            <br>
            <br><a>Knowledge</a>
            <br><a>Blog</a>
            <br><a>Cara Pembayaran</a>
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            TENTANG KAMI
            <br>
            <br><a>Tim Niagahoster</a>
            <br><a>Karir</a>
            <br><a>Events</a>
            <br><a>Penawaran dan Promo Spesial</a>
            <br><a>Kontak Kami</a>
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            KENAPA PILIH NIAGAHOSTER?
            <br>
            <br><a>Support Terbaik</a>
            <br><a>Garansi Harga Termurah</a>
            <br><a>Domain Gratis Selamanya</a>
            <br><a>Datacenter Hosting Terbaik</a>
            <br><a>Review Pelanggan</a>
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            NEWSLETTER
            <br>
            Komponen Email berlangganan
            <br>
            <br> Dapatkan promo dan konten menarik dari penyedia hosting terbaik anda.

        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            Lambang Facebook, Twitter, Google
            <br>
            
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            PEMBAYARAN
            <br>
            BCA, Mandiri, BNI, Visa, Mastercard, ATM Bersama, PermataBank, Prima, ALTO
            <br>
            Aktivasi instan dengan e-payment. Hosting dan Domain Langsung Aktif!
        </div>
    </div>
</div>
<!-- Footer : Copyright -->
<div class="footer-copyright container">
Copyright (c)2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja dan DC Biznet Technovillage Jakarta
<br>
Syarat dan Ketentuan | Kebijakan dan Privasi
<br>
Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
</div>

</body>
</html> 