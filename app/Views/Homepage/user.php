<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- navigasi menu -->
<?= $this->include("Layout/NavMenu");?>
<!-- halaman pengguna -->
<div class="user-page">
    <!-- user -->
    <div class="user">
        <!-- informasi pengguna -->
        <div class="user-info">
            <!-- background halaman pengguna -->
            <div class="user-bg">
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
        <div class="add-post">
            <!-- input teks postingan -->
            <textarea name="post-input" id="post-input" class="post-input"></textarea>

            <!-- area tag, tambah gambar dan kirim -->
            <div class="post-tag">
                <!-- tag -->
                <input type="text" placeholder="Tag teman..." name="tag" id="tag" class="Thisform tag">
            </div>
        </div>

        <!-- contoh postingan -->
        <div class="post"></div>
    </div>
        
    <!-- dashboard halaman pengguna -->
    <div class="user-dashboard">
        <!-- jam dan cuaca -->
        <div class="clock"></div>

        <!-- jumlah postingan -->
        <div class="number-ofpost">
            <div class="image"></div>
            <div class="post"></div>
            <div class="storage"></div>
        </div>

        <!-- pencapaian -->
        <div class="achievement"></div>

        <!-- postingan pilihan -->
        <div class="featured-post"></div>
    </div>
</div>
<?= $this->endSection();?>