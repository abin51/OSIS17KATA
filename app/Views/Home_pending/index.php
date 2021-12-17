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
        <!-- kode halaman status friend -->
        <?= $this->include("Layout/status-friend");?>

        <!-- konten utama informasi sekolah -->
        <div class="main-information-content rounded">
            <img src="<?= base_url("Img/p34.jpg");?>" alt="kontent sekolah" class="school-content-information">
        </div>

        <!-- tes kemampuan -->
        <div class="skill-test rounded">
            <div class="head-nav">
                <span class="text-nav text-capitalize">tes kemampuan</span>
                <div class="view-menu">
                    <!-- list menu 1 -->
                    <div class="view-1 rounded-circle">
                        <a href="" class="Thislink linkmenu"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                    </div>

                    <!-- list menu 2 -->
                    <div class="view-2 rounded-circle">
                        <a href="" class="Thislink linkmenu1"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                        <a href="" class="Thislink linkmenu2"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                    </div>

                    <!-- list menu 3 -->
                    <div class="view-3 rounded-circle">
                            <a href="" class="Thislink linkmenu1"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                            <a href="" class="Thislink linkmenu2"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                            <a href="" class="Thislink linkmenu3"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                    </div>
                </div>
            </div>

            <!-- konten tes kemampuan -->
            <div class="skill-test-content">
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
                <a href="" class="Thislink skill-content rounded-circle"></a>
            </div>
        </div>

        <!-- zona baca -->
        <div class="books rounded">
            <div class="head-nav">
                <span class="text-nav text-capitalize">taman baca</span>
                <div class="view-menu">
                    <!-- list menu 1 -->
                    <div class="view-1 rounded-circle">
                        <a href="" class="Thislink linkmenu"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                    </div>

                    <!-- list menu 2 -->
                    <div class="view-2 rounded-circle">
                        <a href="" class="Thislink linkmenu1"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                        <a href="" class="Thislink linkmenu2"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                    </div>

                    <!-- list menu 3 -->
                    <div class="view-3 rounded-circle">
                            <a href="" class="Thislink linkmenu1"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                            <a href="" class="Thislink linkmenu2"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                            <a href="" class="Thislink linkmenu3"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                    </div>
                </div>
            </div>

            <div class="book-content-wrapper">
                <div class="list-book"></div>
                <div class="list-book"></div>
                <div class="list-book"></div>
                <div class="list-book"></div>
                <div class="list-book"></div>
                <div class="list-book"></div>
            </div>
        </div>

        <!-- postingan teman -->
        <div class="post-friend">
            <!-- gambar postingan -->
            <div class="post-friend-image">
                <!-- gambar -->
                <img src="<?= base_url("Img/u2.jpg");?>" alt="" class="post-fimg" id="post-fimg">
              
                <!-- emoticon -->
            </div>

            <!-- informasi post -->
            <div class="post-friend-information">
                <!-- pengguna info -->
                <div class="user-info">
                    <div class="user-info-img rounded-circle">
                        <img src="<?= base_url("Img/u4.jpg");?>" alt="" class="user-post-info-img" id="user-post-info-img">
                    </div>
                    <div class="user-info-title">
                        <span class="name-user-info">muhamad enggar abin pramuja</span>
                        <a href="" class="Thislink username-info">@e.abin_51</a>
                    </div>

                    <!-- menu postigan -->
                    <div class="post-menu">
                        <a href="" class="Thislink icon-post-menu"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                    </div>
                </div>


                <!-- deskripsi postingan -->
                <div class="user-desc">
                    <span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, officiis laudantium. Rem odio porro tempora eos sunt totam nihil impedit harum nemo sequi! Incidunt quos ullam, iure dolor earum voluptates esse quidem dolorem similique odit minus nisi corporis. Quos, fuga! A qui iste ducimus ad beatae quia architecto itaque dicta maiores eius, cupiditate voluptatum aliquid praesentium assumenda facilis, veniam facere.
                    </span>

                    <a href="" class="Thislink more-desc">selengkapnya</a>
                </div>

                <!-- komentar -->
                <div class="comment"></div>
            </div>
        </div>
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