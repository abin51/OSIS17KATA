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
            <a href="<?= base_url("Auth/register3");?>" class="Thislink register-list-form">jurusan</a>
            <a href="<?= base_url("Auth/register4");?>" class="Thislink register-list-form-1">keamanan</a>
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
            <form action="<?= base_url("Auth/register5");?>" class="form-register-ubio rounded" method="post">
                <div class="left-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">keamanan pertama</span>
                    
                    <!-- katasandi -->
                    <input type="text" name="katasandi" placeholder="Katasandi" id="password" class="Thisform form-bio password">
                    
                    <!-- ulang katasandi -->
                    <input type="text" name="katasandi1" placeholder="Ulang katasandi" id="password1" class="Thisform form-bio password1">
                   
                    <!-- katasandi pemulihan -->
                    <input type="text" name="katasandi2" placeholder="Katasandi pemulihan" id="password2" class="Thisform form-bio password2">
                    
                </div>

                <div class="right-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">keamanan ganda</span>
                    
                    <div class="right-security-bio">
                        <!-- face scan -->
                        <div class="face-scan rounded-circle"></div>
                        
                        <!-- key words -->
                        <div class="key-words">
                            <input type="text" placeholder="Warna favorit" name="key1" id="favorite-color" class="Thisform form-bio favorite-color">
                            <input type="text" placeholder="Makanan favorit" name="key2" id="favorite-food" class="Thisform form-bio favorite-food">
                            <input type="text" placeholder="Lagu favorit" name="key3" id="favorit-song" class="Thisform form-bio favorit-song">
                            <input type="text" placeholder="Film favorite" name="key4" id="favorite-film" class="Thisform form-bio favorite-film">
                            <input type="text" placeholder="Nama hewan peliharaan" name="key5" id="pet-name" class="Thisform form-bio pet-name">
                            <input type="text" placeholder="Nama sahabat" name="key6" id="bestie" class="Thisform form-bio bestie">
                            <input type="text" placeholder="Nama panggilan lucu" name="key7" id="cute-name" class="Thisform form-bio cute-name">
                        </div>
                    </div>

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