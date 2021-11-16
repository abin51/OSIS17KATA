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
        <a href="<?= base_url("Auth/register");?>" class="Thislink register-list-form-1">data diri</a>
            <a href="<?= base_url("Auth/register1");?>" class="Thislink register-list-form">data ekstrakurikuler</a>
            <a href="<?= base_url("Auth/register2");?>" class="Thislink register-list-form">tahun masuk</a>
            <a href="<?= base_url("Auth/register3");?>" class="Thislink register-list-form">jurusan</a>
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
            <form action="<?= base_url("Auth/register1");?>" class="form-register-ubio rounded" method="post">
                <div class="left-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">data ditampilkan ke publik</span>
                    
                    <!-- nama lengkap -->
                    <input type="text" name="nama_lengkap" placeholder="Nama lengkap" id="full-name" class="Thisform form-bio full-name">
                    
                    <!-- nama depan -->
                    <input type="text" name="nama_depan" placeholder="Nama depan" id="first-name" class="Thisform form-bio first-name">
                    
                    <!-- nama belakang -->
                    <input type="text" name="nama_belakang" placeholder="Nama belakang" id="last-name" class="Thisform form-bio last-name">
                    
                    <!-- nama panggilan -->
                    <input type="text" name="nama_panggilan" placeholder="Nama panggilan" id="short-name" class="Thisform form-bio short-name">
                    
                    <!-- nama pengguna -->
                    <input type="text" name="nama_pengguna" placeholder="Nama pengguna" id="username" class="Thisform form-bio username">
                </div>

                <div class="right-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">data akan disembunyikan</span>
                    
                    <!-- alamat email 1 -->
                    <input type="email" name="email1" placeholder="Alamat email 1" id="email1" class="Thisform form-bio email1">
                    
                    <!-- alamat email 2 -->
                    <input type="email" name="email2" placeholder="Alamat email 2" id="email2" class="Thisform form-bio email2">
                    
                    <!-- no telepon -->
                    <input type="number" name="no_phone" placeholder="Telepon" id="no-phone" class="Thisform form-bio no-phone pe-3">
                    
                    <!-- alamat rumah -->
                    <input type="text" name="address1" placeholder="Alamat rumah" id="address1" class="Thisform form-bio address1">
                    
                    <!-- alamat wilayah -->
                    <input type="text" name="address2" placeholder="Alamat wilayah" id="address2" class="Thisform form-bio address2">
                    
                    <div class="btn-reg">
                        <!-- lanjut -->
                        <button type="submit" class="next-btn">lanjutkan</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>