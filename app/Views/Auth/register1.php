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
            <form action="<?= base_url("Auth/register2")?>" class="form-register-ubio rounded" method="post">
                <div class="left-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">organisasi (opsional)</span>
                  
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
                    <span class="text-data text-capitalize">ekstrakurikuler (opsional)</span>
                    
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