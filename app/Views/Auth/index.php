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
        <!-- logo -->
        <div class="logo">
            <!-- logo -->
            <img src="<?= base_url("Img/paskib.png")?>" alt="logo img" class="logo-img" id="logo-img">

            <!-- teks logo -->
            <div class="text-logo text-uppercase">
                <span class="name-img">pasukan pengibar bendera pusaka</span>
                <span class="name-school">sma negeri 17 kabupaten tangerang</span>
            </div>
        </div>

        <!-- halaman utama informasi sekolah -->
        <div class="information">
            <!-- paragraf untuk menjelaskan gambar -->
            <div class="par-image"></div>

            <!-- background sekolah, organisasi dan ekstrakurikuller -->
            <div class="bg-image">
                <img src="<?= base_url("Img/p9.jpg");?>" alt="bg image" class="bg-soe" id="bg-soe">
            </div>
        </div>

        <!-- slider informasi -->
        <div class="slider-information-wrapper">
            <div class="slider-image-information">
                <!-- tombol pindah informasi -->
                <button class="slide-top-btn Thislink rounded-circle">
                    <!-- tombol slide atas -->
                    <i class="fa fa-fw fa-chevron-up"></i>
                </button>
                
                <!-- slide manual -->
                <div class="slider-btn-manual">
                    <!-- checkbox disembunyikan -->
                    <input type="checkbox" name="ex1" id="ex1" class="ex1 check-sekom">
                    <input type="checkbox" name="ex2" id="ex2" class="ex2 check-sekom">
                    <input type="checkbox" name="ex3" id="ex3" class="ex3 check-sekom">
                    <input type="checkbox" name="ex4" id="ex4" class="ex4 check-sekom">
                    <input type="checkbox" name="ex5" id="ex5" class="ex5 check-sekom">
                    <input type="checkbox" name="ex6" id="ex6" class="ex6 check-sekom">
                    <input type="checkbox" name="ex7" id="ex7" class="ex7 check-sekom">
                    <input type="checkbox" name="ex8" id="ex8" class="ex8 check-sekom">
                    <input type="checkbox" name="ex9" id="ex9" class="ex9 check-sekom">
                    <input type="checkbox" name="ex10" id="ex10" class="ex10 check-sekom">
                    <input type="checkbox" name="ex11" id="ex11" class="ex11 check-sekom">
                    <input type="checkbox" name="ex12" id="ex12" class="ex12 check-sekom">

                    <!-- checkbox custom -->
                    <label for="ex1" class="sekom"></label>
                    <label for="ex2" class="sekom"></label>
                    <label for="ex3" class="sekom"></label>
                    <label for="ex4" class="sekom"></label>
                    <label for="ex5" class="sekom"></label>
                    <label for="ex6" class="sekom"></label>
                    <label for="ex7" class="sekom"></label>
                    <label for="ex8" class="sekom"></label>
                    <label for="ex9" class="sekom"></label>
                    <label for="ex10" class="sekom"></label>
                    <label for="ex11" class="sekom"></label>
                    <label for="ex12" class="sekom"></label>
                </div>
                
                <button class="slide-down-btn Thislink rounded-circle">
                    <!-- tombol slide bawah -->
                    <i class="fa fa-fw fa-chevron-down"></i>
                </button>
            </div>
        </div>

        <!-- teks informasi ekstrakurikuller -->
        <a href="" class="Thislink text-information">
            <h1 class="title-information">Lorem ipsum dolor sit amet.</h1>
            <span class="main-information-excul">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit ducimus commodi inventore dolores adipisci aperiam sit optio, necessitatibus delectus laboriosam.</span>
        </a>
    </div>
</div>
<?= $this->endSection();?>