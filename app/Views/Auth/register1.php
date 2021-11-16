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
            <a href="<?= base_url("Auth/register1");?>" class="Thislink register-list-form-1">data ekstrakurikuler</a>
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
            <form action="<?= base_url("Auth/register2")?>" class="form-register-ubio rounded" method="post">
                <div class="left-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">organisasi</span>
                    
                    <!-- nama lengkap -->
                    <input type="text" name="nama_lengkap_anggota" placeholder="Nama lengkap" id="full-name-member" class="Thisform form-bio full-name-member">
                    
                    <!-- nama organisasi -->
                    <input type="text" name="nama_organisasi" placeholder="Nama organisasi" id="organization-name" class="Thisform form-bio organization-name">
                    
                    <!-- jabatan -->
                    <input type="text" name="jabatan" placeholder="Jabatan" id="position" class="Thisform form-bio position">
                    
                    <!-- periode -->
                    <input type="text" name="periode" placeholder="Periode" id="periode" class="Thisform form-bio periode">
           
                    <!-- kode organisasi -->
                    <input type="text" name="kode_organisasi" placeholder="kode organisasi" id="code-organization" class="Thisform form-bio code-organization">
                </div>

                <div class="right-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">ekstrakurikuler</span>
                    
                    <!-- nama lengkap -->
                    <input type="text" name="nama_lengkap_anggota" placeholder="Nama lengkap" id="full-name-member" class="Thisform form-bio full-name-member">
                    
                    <!-- nama ekstrakurikuler -->
                    <input type="text" name="nama_ekstrakurikuler" placeholder="Nama ekstrakurikuler" id="excul-name" class="Thisform form-bio excul-name">
                    
                    <!-- jabatan -->
                    <input type="text" name="jabatan_ekstrakurikuler" placeholder="Jabatan" id="position-excul" class="Thisform form-bio excul-position">
                    
                    <!-- periode -->
                    <input type="text" name="periode_ekstrakurikuler" placeholder="Periode" id="periode-excul" class="Thisform form-bio excul-periode">
           
                    <!-- kode ekstrakurikuler -->
                    <input type="text" name="kode_ekstrakurikuler" placeholder="kode ekstrakurikuler" id="code-organization" class="Thisform form-bio code-organization">
              
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