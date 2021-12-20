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
            <form action="<?= base_url("Auth/register3"); ?>" class="form-register-ubio rounded" method="post">
                <div class="left-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">data tahun masuk</span>
                    
                    <!-- asal sd -->
                    <input type="text" name="asal_sd" placeholder="Asal sekolah dasar" id="a_sd" class="Thisform form-bio a_sd">
                 
                    <!-- tahun lulus sd -->
                    <input type="text" name="lulus_sd" placeholder="Tahun lulus sekolah dasar" id="sd" class="Thisform form-bio sd">
                    
                    <!-- asal smp -->
                    <input type="text" name="asal_smp" placeholder="Asal sekolah menengah pertama" id="a_smp" class="Thisform form-bio a_smp">
            
                    <!-- tahun lulus smp -->
                    <input type="text" name="lulus_smp" placeholder="Tahun lulus sekolah menengah pertama" id="smp" class="Thisform form-bio smp">
                    
                    <!-- asal sma -->
                    <input type="text" name="asal_sma" placeholder="Asal sekolah menengah atas" id="a_sma" class="Thisform form-bio a_sma"> 
                    
                    <!-- tahun lulus sma -->
                    <input type="text" name="masuk_sma" placeholder="Tahun masuk sekolah menengah atas" id="sma" class="Thisform form-bio sma"> 
                </div>

                <div class="right-bio">
                    <!-- text data -->
                    <span class="text-data text-capitalize">bukti dokumen (opsional)</span>
                    
                    <!-- tampilan bukti dokumen -->
                    <div class="document-preview">
                        <div class="document-view"></div>
                        
                        <!-- upload bukti dokumen -->
                        <input type="file" name="bukti_dokumen" id="document" class="Thisform form-bio document">
                        <label for="document" class="document1">
                            <p class="upload-text">upload file</p>
                            <p class="dd-text">atau ambil dan jatuhkan file disini</p>
                        </label>
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