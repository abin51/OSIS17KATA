<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- Tampilan untuk form daftar -->
<div class="register-wrapper">
    <div class="register-list">
        <div class="osis-img">
            <img src="<?= base_url("Img/osis1.png");?>" alt="osis image" class="osis-image" id="osis-image">
        </div>

        <!-- teks masuk -->
        <span class="text-register">buat akun baru</span>
        
        <!-- form daftar -->
        <div class="list-create-account">
        <a href="<?= base_url("Auth/register");?>" class="Thislink register-list-form">data diri</a>
            <a href="<?= base_url("Auth/register1");?>" class="Thislink register-list-form">data ekstrakurikuler</a>
            <a href="<?= base_url("Auth/register2");?>" class="Thislink register-list-form">tahun masuk</a>
            <a href="<?= base_url("Auth/register3");?>" class="Thislink register-list-form-1">jurusan</a>
            <a href="<?= base_url("Auth/register4");?>" class="Thislink register-list-form">keamanan</a>
            <a href="<?= base_url("Auth/register5");?>" class="Thislink register-list-form">syarat dan ketentuan</a>
        </div>

        <a href="" class="Thislink register-btn">sudah punya akun!</a>

        <!-- teks masuk melalui -->
        <span class="text-register-with">melalui :</span>

        <!-- masuk dengan sosial media -->
        <div class="register-with">
            <a href="" class="Thislink register-with-icon rounded-circle google"><i class="fab fa-fw fa-google"></i></a>
            <a href="" class="Thislink register-with-icon rounded-circle facebook"><i class="fab fa-fw fa-facebook"></i></a>
            <a href="" class="Thislink register-with-icon rounded-circle instagram"><i class="fab fa-fw fa-instagram"></i></a>
            <a href="" class="Thislink register-with-icon rounded-circle linkedin"><i class="fab fa-fw fa-linkedin"></i></a>
            <a href="" class="Thislink register-with-icon rounded-circle github"><i class="fab fa-fw fa-github"></i></a>
        </div>

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

    <!-- formulir pendaftaran -->
    <div class="register-form">
        <!-- halaman utama informasi sekolah -->
        <div class="information">
            <!-- background sekolah, organisasi dan ekstrakurikuller -->
            <div class="bg-image">
                <img src="<?= base_url("Img/p9.jpg");?>" alt="bg image" class="bg-soe" id="bg-soe">
            </div>
        </div>

        <!-- formulir data diri -->
        <div class="form-register-bio">
            <form action="<?= base_url("Auth/register4");?>" class="form-register-ubio rounded" method="post">
                <div class="left-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">jurusan sekolah menengah atas</span>
                    <!-- jurusan -->
                    <input type="text" name="jurusan" placeholder="Jurusan" id="major" class="Thisform form-bio major">

                    <!-- pelaran yang diminati -->
                    <div class="lesson-wrapper">
                        <input type="text" name="minat-pelajaran" placeholder="Pelajaran yang diminati" id="lesson-tag-input" class="Thisform form-bio lesson-tag-input">
                    </div>
                </div>

                <div class="right-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">rencana setelah lulus</span>
                    
                    <!-- list rencana setelah lulus -->
                    <textarea placeholder="Daftar rencana setelah lulus" id="wishlist" class="wishlist"></textarea>

                    <!-- pelaran yang diminati -->
                    <div class="plan-wrapper">
                        <input type="text" name="rencana" placeholder="Rencana setelah lulus" id="plan" class="Thisform form-bio plan">
                    </div>

                    <div class="btn-reg">
                        <!-- lanjut -->
                        <button type="submit" class="next-btn">lanjutkan</button>
                        <a href="<?= base_url("Auth/register2")?>" class="Thislink next-page">lewati</a>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>