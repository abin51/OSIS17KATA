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