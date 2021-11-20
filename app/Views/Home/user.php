<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- kode halaman navigasi -->
<?= $this->include("Layout/nav");?>

<!-- kode halaman aside -->
<?= $this->include("Layout/aside-slide");?>

<!-- halaman konten -->
<main class="main-content">
    <!-- header background -->
    <div class="user-bg">
        <!-- kode unik -->
        <div class="code-id ">
            <span class="text-code-id me-1">kode id :</span>
            <span class="code">122032125643</span>
        </div>

        <!-- sosial media -->
        <a href="" class="Thislink social-media">
            <span class="social-media-text me-1">sosial media :</span>
            <i class="far fa-fw fa-plus-square"></i>
        </a>

        <!-- latar belakang -->
        <div class="user-bg-image">
            <img src="<?= base_url("Img/bg3.jpg");?>" alt="" class="bg-image" id="bg-image">
        </div>
    </div>
    
    <div class="user-content-wrapper">
        <!-- kontent utama -->
        <div class="left-user-content">
            <div class="dashboard-user-wrapper">
                <!-- profil pengguna -->
                <div class="user-profile">
                    <!-- foto profil -->
                    <div class="user-image rounded-circle">
                        <img src="<?= base_url("img/u4.jpg");?>" alt="profil" class="user-img" id="user-img">
                    </div>
                    
                    <!-- ganti foto -->
                    <form class="change-img">
                        <input type="file" name="change image" id="input-img" class="input-img">
                        <label for="input-img" class="rounded-circle"><i class="fa fa-fw fa-plus"></i></label>
                    </form>
                    
                    <!-- dashboard pengguna -->
                    <div class="user-dashboard">
                        <!-- pengaturan pengguna -->
                        <a href="" class="Thislink u-set"><i class="fa fa-fw fa-cog"></i></a>
                        
                        <!-- informasi pengguna -->
                        <div class="user-dashboard-information">
                            <a href="" class="u-name">@e.abin_51</a>
                            <span class="l-name text-capitalize">muhamad enggar abin pramuja</span>
                            <span class="u-bio">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At laudantium dolor nam sunt assumenda aliquid harum aut quaerat maiores repellendus, nihil obcaecati optio temporibus sint. Suscipit necessitatibus laborum accusantium quibusdam.</span>
                            <a href="" class="bio-detail text-capitalize">selengkapnya</a>
                        </div>

                        <!-- navigasi pengguna -->
                        <div class="user-nav">
                            <a href="" class="Thislink nav-link"><i class="fa fa-fw fa-th-large me-2"></i>postingan</a>
                            <a href="" class="Thislink nav-link"><i class="fa fa-fw fa-image me-2"></i>gambar</a>
                            <a href="" class="Thislink nav-link"><i class="fa fa-fw fa-video me-2"></i>video</a>
                            <a href="" class="Thislink nav-link"><i class="fa fa-fw fa-pen-nib me-2"></i>narasi</a>
                        </div>
                    </div>
                </div>

                <!-- postingan pengguna -->
                <div class="user-post">
                    <!-- postingan -->
                    <div class="post">
                        <img src="<?= base_url("Img/p26.jpg");?>" alt="post" class="user-post" id="user-post">
                    </div>
                    <div class="post">
                        <img src="<?= base_url("Img/p16.jpg");?>" alt="post" class="user-post" id="user-post">
                    </div>
                    <div class="post">
                        <img src="<?= base_url("Img/p27.jpg");?>" alt="post" class="user-post" id="user-post">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- informasi -->
        <div class="right-user-content">
            <!-- dashboard pengguna -->
            <div class="user-dashboard">
                <!-- info -->
                <a href="" class="Thislink info-dashboard"><i class="fa fa-fw fa-info-circle"></i></a>
                
                <!-- pengunjung -->
                <div class="viewer">
                    <span class="text-viewer">pengunjung</span>
                    <a href="" class="Thislink total-viewer">13.089</a>
                </div>
                
                <!-- dashboard -->
                <div class="stalkpost">
                    <!-- penguntit -->
                    <div class="stalker">
                        <span class="text-stalker">penguntit</span>
                        <a href="" class="Thislink total-stalker">129</a>
                    </div>
                    
                    <!-- postingan -->
                    <div class="total-post">
                        <span class="text-post">postingan</span>
                        <a href="" class="Thislink post-total">3</a>
                    </div>
                </div>
            </div>

            <!-- informasi sekolah -->
            <div class="school-information">
                <!-- teks informasi -->
                <span class="text-information">informasi</span>

                <div class="list-information-school"></div>
                <div class="list-information-school"></div>
                <div class="list-information-school"></div>
            </div>
        </div>
    </div>
    </main>
<?= $this->endSection();?>