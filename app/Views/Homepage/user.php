<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- navigasi menu -->
<?= $this->include("Layout/NavMenu");?>
<!-- halaman pengguna -->
<div class="user-page">
    <!-- informasi pengguna -->
    <div class="user-info">
        <!-- background halaman pengguna -->
        <div class="user-bg">
            <img src="<?= base_url("Img/bg.jpg");?>" alt="" class="bg-user-img">
        </div>
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