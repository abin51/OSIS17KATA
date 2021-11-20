<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- Tampilan untuk form daftar -->
<div class="register-wrapper">
    <!-- kode halaman navigasi register -->
    <?= $this->include("Layout/nav-register");?>

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