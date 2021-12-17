<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- kode halaman navigasi -->
<?= $this->include("Layout/nav");?>

<!-- kode halaman aside -->
<?= $this->include("Layout/aside-slide");?>

<!-- halaman konten -->
<main class="main-content">
    <!-- kontent utama -->
    <div class="left-content">
        <!-- status teman -->
        <div class="status-friends">
            <!-- slider status teman -->
            <div class="slider-status">
                <a href="" class="Thislink s-friend-left"><i class="rounded-circle fa fa-fw fa-chevron-left"></i></a>
                <a href="" class="Thislink s-friend-right"><i class="rounded-circle fa fa-fw fa-chevron-right"></i></a>
            </div>

            <!-- status konten -->
            <div class="status-friend-content">
                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u4.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>
                
                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u1.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>
                
                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u1.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>
                
                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u1.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u1.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u2.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>
                
                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u3.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u5.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u6.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u7.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u8.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>
                
                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u9.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u10.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u11.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u12.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>

                <!-- status -->
                <div class="status-wrapper rounded-circle">
                    <div class="friend-img rounded-circle">
                        <!-- <img src="<?= base_url("Img/u13.jpg");?>" alt="" class="user-status-img"> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- konten utama informasi sekolah -->

        <!-- tes kemampuan -->

        <!-- zona baca -->

        <!-- postingan teman -->
    </div>

    <!-- informasi -->
    <div class="right-content">
        <!-- jame dan cuaca -->
        <div class="clock-wrapper rounded">
            <!-- cuaca dan jam konten -->
            <div class="clock-content">
                <!-- jam -->
                <span class="clock rounded">10:20:10:89
                    <p class="date">sabtu, 20 okt 2021</p>
                </span>
                
                <!-- cuaca -->
                <div class="weather-wrapper rounded">
                    <!-- cuaca -->
                    <div class="weather">
                        <i class="fa fa-fw fa-cloud-sun-rain"></i>
                    </div>
                    
                    <!-- suhu -->
                    <span class="temperature">
                        35.6&#176;C
                    </span>
                </div>
            </div>

            <!-- lokasi dan pengaturan -->
            <div class="location-sett">
                <a href="" class="Thislink clock-we rounded-circle"><i class="fa fa-fw fa-cog"></i></a>
                <a href="" class="Thislink location-we text-capitalize">tangerang, banten</a>
            </div>
        </div>

        <!-- ektrakurikuller dan organisasi -->
    </div>
</main>
<?= $this->endSection();?>