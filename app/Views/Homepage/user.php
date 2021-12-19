<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- navigasi menu -->
<?= $this->include("Layout/NavMenu");?>
<!-- halaman pengguna -->
<div class="user-page">
    <!-- user -->
    <div class="user">
        <!-- informasi pengguna -->
        <div class="rounded user-info">
            <!-- background halaman pengguna -->
            <div class="rounded user-bg">
                <img src="<?= base_url("Img/bg.jpg");?>" alt="" class="bg-user-img">
            </div>
            
            <!-- konten informasi pengguna -->
            <div class="user-info-content">
                <!-- gambar pengguna -->
                <div class="shadow-sm user-info-image"></div>

                <!-- status pengguna -->
                <div class="shadow-sm user-status"></div>

                <!-- edit profil pengguna -->
                <a href="" class="Thislink edit-profile"><i class="fa fa-fw fa-pen"></i></a>

                <!-- informasi pengguna -->
                <div class="user-information">
                    <a href="" class="Thislink u-name">e.abin_51</a>
                    <h2 class="text-capitalize l-name">muhamad enggar abin pramuja</h2>

                    <!-- label pengguna -->
                    <div class="u-label">
                        <!-- asal sma -->
                        <div class="text-uppercase school label-item">sman 17 kabupaten tangerang</div>

                        <!-- cita cita -->
                        <div class="text-capitalize ambition label-item">cyber security</div>
                    </div>

                    <!-- social media pengguna -->
                    <div class="u-sosmed">
                        <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-instagram"></i></a>
                        <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-github"></i></a>
                        <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-pinterest"></i></a>
                        <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-dribbble"></i></a>
                        <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-youtube"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <!-- tambahkan postingan -->
        <div class="rounded add-post">
            <!-- input teks postingan -->
            <textarea name="post-input" placeholder="Masukan Teks ..." id="post-input" class="rounded post-input"></textarea>

            <!-- area tag, tambah gambar dan kirim -->
            <form class="post-tag">
                <!-- tag -->
                <input type="text" placeholder="Tag teman ..." name="tag" id="tag" class="Thisform tag">

                <!-- tombol postingan -->
                <div class="btn-post">
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-layer-group"></i></a>
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-paperclip"></i></a>
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-file"></i></a>
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-image"></i></a>
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-video"></i></a>
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-microphone-alt"></i></a>
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-code"></i></a>
                </div>

                <button class="Thisbtn btn-submit-post"><i class="fa fa-fw fa-paper-plane me-1"></i>Posting</button>
            </form>
        </div>

        <!-- contoh postingan -->
        <div class="rounded post">
            <!-- informasi postingan pengguna -->
            <div class="userpost-information">
                <!-- user image -->
                <div class="user-image"></div>

                <!-- nama pengguna dan waktu posting -->
                <div class="uname-post">
                    <!-- nama pengguna -->
                    <a class="Thislink uname">e.abin_51</a>

                    <!-- waktu posting -->
                    <div class="time-post">Diposting Senin 12 desember 2021, pukul 12.23</div>
                </div>
            </div>

            <!-- gambar postingan -->
            <div class="rounded post-image"></div>

            <!-- teks postingan -->
            <div class="text-userpost">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ducimus magnam odio illum architecto officiis laudantium. Nesciunt numquam aut dolorum?</span>
            </div>

            <!-- navigasi postingan -->
            <nav class="nav-userpost"></nav>
        </div>
    </div>
        
    <!-- dashboard halaman pengguna -->
    <div class="user-dashboard">
        <!-- jam dan cuaca -->
        <div class="rounded clock">
            <!-- kalender -->
            <div class="rounded calendar"></div>

            <!-- jam dan cuaca -->
            <div class="clowet">
                <!-- jam -->
                <div class="rounded clock-wrap"></div>

                <!-- cuaca -->
                <div class="rounded weather"></div>
            </div>
        </div>

        <!-- jumlah postingan -->
        <div class="number-ofpost">
            <div class="rounded image">
                <i class="fa fa-fw fa-images"></i>
            </div>
            <div class="rounded post">
                <i class="fa fa-fw fa-upload"></i>
            </div>
            <div class="rounded storage">
                <i class="fa fa-fw fa-database"></i>
            </div>
        </div>

        <!-- kegiatan harian -->
        <div class="rounded todo">
            <!-- todo navigasi -->
            <form class="todo-nav">
                <!-- input todo -->
                <input type="text" placeholder="Tambahkan kegiatan ..." name="todo-input" id="todo-input" class="Thisform todo-input">

                <!-- btn submit todo -->
                <button class="Thisbtn btn-todo"><i class="fa fa-fw fa-plus"></i></button>

                <!-- penggaturan todo -->
                <a href="" class="Thislink btn-settodo"><i class="fa fa-fw fa-cog"></i></a>
                <a href="" class="Thislink btn-settodo"><i class="fa fa-fw fa-chart-bar"></i></a>
            </form>

            <!-- todo konten -->
            <div class="rounded todo-content"></div>
        </div>

        <!-- pencapaian -->
        <div class="rounded achievement">
            <div class="chl challenge1"></div>
            <div class="chl challenge2"></div>
            <div class="chl challenge3"></div>
            <div class="chl challenge4"></div>
            <div class="chl challenge5"></div>
            <div class="chl challenge6"></div>
        </div>

        <!-- postingan pilihan -->
        <div class="rounded featured-post">
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
            <div class="fp rounded"></div>
        </div>
    </div>
</div>
<?= $this->endSection();?>