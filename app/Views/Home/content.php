<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- kode halaman navigasi -->
<?= $this->include("Layout/nav");?>

<!-- kode halaman aside -->
<?= $this->include("Layout/aside-slide");?>

<!-- halaman konten -->
<main class="main-content">
    <!-- konten pertama -->
    <div class="top-content">
        <!-- landscape konten -->
        <div class="landscape-content">
            <img src="<?= base_url("Img/p24.jpg")?>" alt="post" class="post-image" id="post-image">
        </div>

        <!-- konten artikel -->
        <div class="article-content"></div>
    </div>

    <!-- konten kedua -->
    <div class="down-content">
        <!-- potrait konten kiri -->
        <div class="potrait-wrapper">
            <!-- left -->
            <div class="left-wrapper-content">
                <div class="left-potrait">
                    <img src="<?= base_url("Img/p18.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
                <div class="mini-content-1">
                    <img src="<?= base_url("Img/p16.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
            </div>

            <!-- right -->
            <div class="right-wrapper-content">
                <div class="mini-content-2">
                    <img src="<?= base_url("Img/p26.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
                <div class="right-potrait">
                    <img src="<?= base_url("Img/p21.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
            </div>
        </div>

        <div class="potrait-wrapper">
            <!-- left -->
            <div class="left-wrapper-content">
                <div class="left-potrait">
                    <img src="<?= base_url("Img/p22.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
                <div class="mini-content-1">
                    <img src="<?= base_url("Img/p25.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
            </div>

            <!-- right -->
            <div class="right-wrapper-content">
                <div class="mini-content-2">
                    <img src="<?= base_url("Img/p27.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
                <div class="right-potrait">
                    <img src="<?= base_url("Img/p23.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
            </div>
        </div>
    </div>

    <!-- konten kedua -->
    <div class="down-content">
        <!-- potrait konten kiri -->
        <div class="potrait-wrapper">
            <!-- left -->
            <div class="left-wrapper-content">
                <div class="left-potrait">
                    <img src="<?= base_url("Img/p15.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
                <div class="mini-content-1">
                    <img src="<?= base_url("Img/p30.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
            </div>

            <!-- right -->
            <div class="right-wrapper-content">
                <div class="mini-content-2">
                    <img src="<?= base_url("Img/p31.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
                <div class="right-potrait">
                    <img src="<?= base_url("Img/p17.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
            </div>
        </div>

        <div class="potrait-wrapper">
            <!-- left -->
            <div class="left-wrapper-content">
                <div class="left-potrait">
                    <img src="<?= base_url("Img/u4.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
                <div class="mini-content-1">
                    <img src="<?= base_url("Img/p32.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
            </div>

            <!-- right -->
            <div class="right-wrapper-content">
                <div class="mini-content-2">
                    <img src="<?= base_url("Img/p33.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
                <div class="right-potrait">
                    <img src="<?= base_url("Img/u2.jpg")?>" alt="post" class="post-image" id="post-image">
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection();?>