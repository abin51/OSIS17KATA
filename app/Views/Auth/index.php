<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- Tampilan untuk form masuk -->
<div class="login-wrapper">
    <!-- form masuk -->
    <div class="login">
        <!-- form bagian atas -->
        <div class="osis-img">
            <img src="<?= base_url("Img/osis1.png");?>" alt="osis image" class="osis-image" id="osis-image">
        </div>

        <!-- teks masuk -->
        <span class="text-login">masuk</span>

        <!-- form bagian tengah -->
        <form action="<?= base_url("Home/account"); ?>" method="POST" class="form-login" id="form-login">
            <!-- nama lengkap -->
            <input type="text" placeholder="Nama lengkap" name="nama_lengkap" id="name" class="Thisform name">

            <!-- email -->
            <input type="email" placeholder="Email" name="email" id="email" class="Thisform email">

            <!-- kode id -->
            <input type="number" placeholder="Kode id" name="kode_id" id="code" class="Thisform code pe-2">

            <!-- katasandi -->
            <input type="password" placeholder="Katasandi" name="katasandi" id="pass" class="Thisform pass">

            <!-- ingat saya dan tombol masuk -->
            <div class="forget-login">
                <!-- tombol masuk -->
                <button type="submit" class="Thislink login-btn" id="login-btn">masuk</button>
               
                <!-- lupa akun -->
                <a href="" class="Thislink forget-link">lupa akun!</a>
            </div>
        </form>

        <!-- masuk melalui -->
        <!-- teks masuk melalui -->
        <span class="text-login-with">melalui :</span>

        <!-- masuk dengan sosial media -->
        <div class="login-with">
            <a href="" class="Thislink login-with-icon rounded-circle google"><i class="fab fa-fw fa-google"></i></a>
            <a href="" class="Thislink login-with-icon rounded-circle facebook"><i class="fab fa-fw fa-facebook"></i></a>
            <a href="" class="Thislink login-with-icon rounded-circle instagram"><i class="fab fa-fw fa-instagram"></i></a>
            <a href="" class="Thislink login-with-icon rounded-circle linkedin"><i class="fab fa-fw fa-linkedin"></i></a>
            <a href="" class="Thislink login-with-icon rounded-circle github"><i class="fab fa-fw fa-github"></i></a>
        </div>

        <!-- buat akun baru -->
        <a href="<?= base_url("Auth/register")?>" class="Thislink register-link">buat akun</a>

        <!-- informasi website -->
        <div class="bottom-information">
            <!-- sosial media OSIS -->
            <div class="social-media-icon">
                <a href="" class="Thislink sosmed-icon"><i class="fab fa-fw fa-instagram"></i></a>
                <a href="" class="Thislink sosmed-icon"><i class="fab fa-fw fa-youtube"></i></a>
                <a href="" class="Thislink sosmed-icon"><i class="fab fa-fw fa-twitter"></i></a>
                <a href="" class="Thislink sosmed-icon"><i class="fab fa-fw fa-github"></i></a>
            </div>

            <!-- hak cipta -->
            <span class="hakcipta text-capitalize" id="hakcipta">
                OSIS17KABTA
            </span>

            <!-- kode versi website -->
            <a href="<?= base_url("Page/version");?>" class="Thislink version" id="version">
                V.14.2.21
            </a>
        </div>
    </div>

    <!-- bagian informasi mengenai sekolah -->
    <div class="school-information">
        <div class="information">
            <!-- background sekolah, organisasi dan ekstrakurikuller -->
            <div class="bg-image">
                <img src="<?= base_url("Img/p9.jpg");?>" alt="bg image" class="bg-soe" id="bg-soe">
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();?>