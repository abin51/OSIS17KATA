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
                <input type="file" name="photo profile" id="add-photo-profile" class="d-none add-photo-profile">
                <label for="add-photo-profile" class="Thislink shadow-sm user-info-image">
                    <i class="fa fa-fw fa-camera-retro"></i>
                </label>

                <!-- status pengguna -->
                <div class="Thislink shadow-sm user-status" id="user-status">
                    <i class="far fa-fw fa-smile-wink"></i>
                </div>

                <!-- edit profil pengguna -->
                <a href="" class="Thislink edit-profile"><i class="fa fa-fw fa-pen"></i></a>

                <!-- informasi pengguna -->
                <div class="user-information">
                    <a href="" class="Thislink u-name">e.abin_51</a>
                    <h2 class="text-capitalize l-name">muhamad enggar abin pramuja</h2>

                    <!-- label pengguna -->
                    <div class="u-label">
                        <!-- asal sma -->
                        <a href="" class="Thislink text-uppercase school label-item">sman 17 kabupaten tangerang</a>

                        <!-- cita cita -->
                        <a href class="Thislink text-capitalize ambition label-item">cyber security</a>
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
                <input type="file" name="add-file" id="add-file" class="d-none add-file">
                <input type="file" name="add-image" id="add-image" class="d-none add-image">
                <input type="file" name="add-video" id="add-video" class="d-none add-video">
                <div class="btn-post">
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-layer-group"></i></a>
                    <button class="Thislink Thisbtn btn-post-link"><i class="fa fa-fw fa-paperclip"></i></button>
                    <label for="add-file" class="Thislink btn-post-link"><i class="fa fa-fw fa-file"></i></label>
                    <label for="add-image" class="Thislink btn-post-link"><i class="fa fa-fw fa-image"></i></label>
                    <label for="add-video" class="Thislink btn-post-link"><i class="fa fa-fw fa-video"></i></label>
                    <a href="" class="Thislink btn-post-link"><i class="fa fa-fw fa-microphone-alt"></i></a>
                    <button class="Thislink Thisbtn btn-post-link"><i class="fa fa-fw fa-code"></i></button>
                </div>

                <button class="Thislink Thisbtn btn-submit-post"><i class="fa fa-fw fa-paper-plane me-1"></i>Posting</button>
            </form>
        </div>

        <!-- postingan -->
        <div class="rounded post">
            <!-- informasi postingan pengguna -->
            <div class="userpost-information">
                <!-- user image -->
                <div class="Thislink user-image"></div>

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
            <nav class="nav-userpost">
                <!-- nabigasi emosi dan komentar -->
                <div class="nav-left">
                    <a href="" class="Thislink link-emoticon"><i class="fa fa-fw fa-grin-squint"></i></a>
                    <!-- <a href="" class="Thislink link-emoticon"><i class="fa fa-fw fa-smile"></i></a>
                    <a href="" class="Thislink link-emoticon"><i class="fa fa-fw fa-frown"></i></a> -->
                    <a href="" class="Thislink link-emoticon"><i class="fa fa-fw fa-heart"></i></a>
                    <a href="" class="Thislink link-emoticon"><i class="fa fa-fw fa-comment"></i></a>
                    <a href="" class="Thislink link-emoticon"><i class="fa fa-fw fa-share-alt"></i></a>
                </div>

                <!-- navigasi pengguna -->
                <div class="nav-right">
                    <a href="" class="Thislink nav-user"><i class="fa fa-fw fa-ellipsis-h"></i></a>
                </div>
            </nav>
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
                <div class="rounded clock-wrap">
                    <!-- jam -->
                    <div class="hour">
                        <span class="hour-clock" id="hour-clock"></span>
                    </div>

                    <div class="minsec-wrap">
                        <div class="rounded min-sec">
                            <!-- menit detik -->
                            <div class="minutes">
                                <span class="minute-clock" id="minute-clock"></span>
                            </div>
                            <div class="second">
                                <span class="second-clock" id="second-clock"></span>
                            </div>
                        </div>
                        
                        <!-- mili detik -->
                        <div class="rounded m-second">
                            <span class="mi-second" id="mi-second"></span>
                        </div>
                    </div>
                </div>

                <!-- cuaca -->
                <div class="rounded weather">
                    <!-- konten cuaca -->
                    <div class="weather-content">
                        <i class="fa fa-fw fa-cloud-moon-rain"></i>
                    </div>

                    <!-- konten suhu dan waktu -->
                    <div class="timetem">
                        <div class="rounded time-wet">
                            <i class="fa fa-fw fa-moon"></i>
                        </div>

                        <div class="rounded tem-wet">
                            <span>37&#x2103;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jumlah postingan -->
        <div class="number-ofpost">
            <div class="rounded image" id="ds-user-image">
                <i class="fa fa-fw fa-images"></i>
            </div>
            <div class="rounded post" id="ds-user-post">
                <i class="fa fa-fw fa-upload"></i>
            </div>
            <div class="rounded storage" id="ds-user-storage">
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
                <button class="Thislink Thisbtn btn-todo"><i class="fa fa-fw fa-plus"></i></button>

                <!-- penggaturan todo -->
                <a href="" class="Thislink btn-settodo"><i class="fa fa-fw fa-cog"></i></a>
                <a href="" class="Thislink btn-settodo"><i class="fa fa-fw fa-chart-bar"></i></a>
            </form>

            <!-- todo konten -->
            <div class="rounded todo-content">
                <!-- list todo -->
                <div class="rounded list-todo-content">
                    <!-- list info kiri -->
                    <div class="list-left-info">
                        <!-- input check -->
                        <input type="checkbox" name="check-todo" id="check-todo" class="d-none check-todo">
                        <label for="check-todo" class="todo-input-check"></label>
                        
                        <!-- teks list todo -->
                        <div class="text-list">Lorem ipsum dolor sit amet.</div>
                    </div>

                    <!-- list info kanan -->
                    <div class="list-right-info">
                        <span class="time-todo">12.30</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- pencapaian -->
        <div class="rounded achievement">
            <a href="" class="Thislink chl challenge1"></a>
            <a href="" class="Thislink chl challenge2"></a>
            <a href="" class="Thislink chl challenge3"></a>
            <a href="" class="Thislink chl challenge4"></a>
            <a href="" class="Thislink chl challenge5"></a>
            <a href="" class="Thislink chl challenge6"></a>
        </div>

        <!-- postingan pilihan -->
        <div class="rounded featured-post">
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
            <div class="Thislink fp rounded"></div>
        </div>
    </div>
</div>
<?= $this->endSection();?>