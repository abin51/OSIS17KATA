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