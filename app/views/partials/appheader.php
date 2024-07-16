<div id="topbar" class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php print_link(HOME_PAGE) ?>">
            <img class="img-responsive" src="<?php print_link(SITE_LOGO); ?>" /> <?php echo SITE_NAME ?>
            </a>
            <?php 
            if(user_login_status() == true ){ 
            ?>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <?php Html :: render_menu(Menu :: $navbartopleft  , "navbar-nav mr-auto" ); ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <?php 
                            if(!empty(USER_PHOTO)){
                            ?>
                            <img class="img-fluid" style="height:30px;" src="<?php print_link(set_img_src(USER_PHOTO,30,30)); ?>" />
                                <?php
                                }
                                else{
                                ?>
                                <span class="avatar-icon"><i class="fa fa-user"></i></span>
                                <?php
                                }
                                ?>
                                <span>Hi <?php echo ucwords(USER_NAME); ?> !</span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="<?php print_link('account') ?>"><i class="fa fa-user"></i> My Account</a>
                                <a class="dropdown-item" href="<?php print_link('index/logout?csrf_token=' . Csrf::$token) ?>"><i class="fa fa-sign-out"></i> Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php 
                } 
                ?>
            </div>
        </div>
		
	<div id="topbar" class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="http://10.30.67.102/prakerin-sisfo/Home">
<img class="img-responsive" src="http://10.30.67.102/prakerin-sisfo/assets/images/logo.png" /> prakerin-sisfo            </a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-responsive-collapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse navbar-responsive-collapse">
<ul id="" class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link " href="index">
<span class="menu-label">Home</span>
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-boundary="viewport" data-toggle="dropdown">
<span class="menu-label">Tentang kami</span>
</a>
<ul id="" class="dropdown-menu submenu list-unstyled" >
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/sejarah">
<span class="menu-label">Sejarah</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/visi_dan_misi">
<span class="menu-label">Visi Dan Misi</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/struktur_organisasi">
<span class="menu-label">Struktur Organisasi</span>
</a>
</li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-boundary="viewport" data-toggle="dropdown">
<span class="menu-label">Media</span>
</a>
<ul id="" class="dropdown-menu submenu list-unstyled" >
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/berita">
<span class="menu-label">Berita</span>
</a>
</li>

<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/informasi">
<span class="menu-label">Informasi</span>
</a>
</li>

<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/artikel">
<span class="menu-label">Artikel</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/gallery">
<span class="menu-label">Gallery</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/youtube">
<span class="menu-label">Youtube</span>
</a>
</li>



<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/instagram">
<span class="menu-label">Instagram</span>
</a>
</li>
</ul>
</li>


 










 
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-boundary="viewport" data-toggle="dropdown">
<span class="menu-label">Kemahasiswaan</span>
</a>
<ul id="" class="dropdown-menu submenu list-unstyled" >
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/Index">
<span class="menu-label">Kemahasiswaan</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/">
<span class="menu-label">Peranturan Akademik</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/">
<span class="menu-label">Organisasi MAhasiswa dan Ukm</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/">
<span class="menu-label">Infomahasiswa</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item " href="http://10.30.67.102/prakerin-sisfo/">
<span class="menu-label">Prestasi mahasiswa</span>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link " href="http://10.30.67.102/prakerin-sisfo/laporan">
<span class="menu-label">Laporan</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link " href="http://10.30.67.102/prakerin-sisfo/alumni_sisfo">
<span class="menu-label">Alumni sisfo</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link " href="http://10.30.67.102/prakerin-sisfo/pengumuman">
<span class="menu-label">Pengumuman</span>
</a>
</li>




 

<li class="nav-item">
<a class="nav-link active" href="http://10.30.67.102/prakerin-sisfo/kontak_kami/add">
<span class="menu-label">Kontak Kami</span>
</a>
</li>
 
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">

<span>Login</span>
</a>
<ul class="dropdown-menu">
<a class="dropdown-item" href="<?php print_link('account') ?>"><i class="fa fa-user"></i>Login</a>
<a class="dropdown-item" href="<?php print_link('index/logout?csrf_token=' . Csrf::$token) ?>"><i class="fa fa-sign-out"></i> Logout</a>
</ul>
</li>
</ul>






</div>
</div>
</div>		