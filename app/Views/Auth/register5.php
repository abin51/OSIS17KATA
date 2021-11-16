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
            <a href="<?= base_url("Auth/register4");?>" class="Thislink register-list-form">keamanan</a>
            <a href="<?= base_url("Auth/register5");?>" class="Thislink register-list-form-1">syarat dan ketentuan</a>
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
            <form action="<?= base_url("Auth")?>" class="form-register-ubio rounded" method="post">
                <div class="sk-bio">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quisquam distinctio omnis inventore rem, nulla, officiis ab quod, molestiae eligendi quae. Est magnam natus exercitationem quidem similique rem illum molestiae ducimus, dolorem ratione pariatur, voluptate numquam alias, odit modi voluptatum ipsam saepe nobis totam quod? Dolor velit molestias recusandae quisquam aliquid, a eveniet sequi facere facilis iusto explicabo perferendis tenetur dicta, consectetur ullam sapiente culpa asperiores excepturi animi eligendi deleniti voluptatem? Nesciunt minima adipisci molestias nisi laudantium ea unde nihil voluptatem tempora itaque similique impedit, quam labore voluptate autem asperiores voluptatum. Expedita velit nisi optio odio enim praesentium aspernatur aliquid, magni eos eum doloribus tempore voluptatem error dolores ratione eaque itaque sapiente maiores dicta quibusdam sit? Ducimus commodi voluptate, quo tenetur numquam sunt inventore esse eum saepe placeat assumenda odit qui veritatis architecto illum, quaerat illo temporibus quisquam praesentium quae ipsam! Esse repudiandae nemo dolorum eligendi eos eum cum magni animi. Doloremque id inventore temporibus minima repellat blanditiis ratione consectetur! Expedita amet recusandae exercitationem nihil iure excepturi molestiae aperiam natus magni, quod, corporis animi. Voluptas, eum! Animi, tempora. Doloribus, deserunt corporis quis provident similique repellendus architecto saepe mollitia repellat officiis, quae modi quas dicta eligendi? Rem aut cum hic numquam?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quisquam distinctio omnis inventore rem, nulla, officiis ab quod, molestiae eligendi quae. Est magnam natus exercitationem quidem similique rem illum molestiae ducimus, dolorem ratione pariatur, voluptate numquam alias, odit modi voluptatum ipsam saepe nobis totam quod? Dolor velit molestias recusandae quisquam aliquid, a eveniet sequi facere facilis iusto explicabo perferendis tenetur dicta, consectetur ullam sapiente culpa asperiores excepturi animi eligendi deleniti voluptatem? Nesciunt minima adipisci molestias nisi laudantium ea unde nihil voluptatem tempora itaque similique impedit, quam labore voluptate autem asperiores voluptatum. Expedita velit nisi optio odio enim praesentium aspernatur aliquid, magni eos eum doloribus tempore voluptatem error dolores ratione eaque itaque sapiente maiores dicta quibusdam sit? Ducimus commodi voluptate, quo tenetur numquam sunt inventore esse eum saepe placeat assumenda odit qui veritatis architecto illum, quaerat illo temporibus quisquam praesentium quae ipsam! Esse repudiandae nemo dolorum eligendi eos eum cum magni animi. Doloremque id inventore temporibus minima repellat blanditiis ratione consectetur! Expedita amet recusandae exercitationem nihil iure excepturi molestiae aperiam natus magni, quod, corporis animi. Voluptas, eum! Animi, tempora. Doloribus, deserunt corporis quis provident similique repellendus architecto saepe mollitia repellat officiis, quae modi quas dicta eligendi? Rem aut cum hic numquam?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quisquam distinctio omnis inventore rem, nulla, officiis ab quod, molestiae eligendi quae. Est magnam natus exercitationem quidem similique rem illum molestiae ducimus, dolorem ratione pariatur, voluptate numquam alias, odit modi voluptatum ipsam saepe nobis totam quod? Dolor velit molestias recusandae quisquam aliquid, a eveniet sequi facere facilis iusto explicabo perferendis tenetur dicta, consectetur ullam sapiente culpa asperiores excepturi animi eligendi deleniti voluptatem? Nesciunt minima adipisci molestias nisi laudantium ea unde nihil voluptatem tempora itaque similique impedit, quam labore voluptate autem asperiores voluptatum. Expedita velit nisi optio odio enim praesentium aspernatur aliquid, magni eos eum doloribus tempore voluptatem error dolores ratione eaque itaque sapiente maiores dicta quibusdam sit? Ducimus commodi voluptate, quo tenetur numquam sunt inventore esse eum saepe placeat assumenda odit qui veritatis architecto illum, quaerat illo temporibus quisquam praesentium quae ipsam! Esse repudiandae nemo dolorum eligendi eos eum cum magni animi. Doloremque id inventore temporibus minima repellat blanditiis ratione consectetur! Expedita amet recusandae exercitationem nihil iure excepturi molestiae aperiam natus magni, quod, corporis animi. Voluptas, eum! Animi, tempora. Doloribus, deserunt corporis quis provident similique repellendus architecto saepe mollitia repellat officiis, quae modi quas dicta eligendi? Rem aut cum hic numquam?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quisquam distinctio omnis inventore rem, nulla, officiis ab quod, molestiae eligendi quae. Est magnam natus exercitationem quidem similique rem illum molestiae ducimus, dolorem ratione pariatur, voluptate numquam alias, odit modi voluptatum ipsam saepe nobis totam quod? Dolor velit molestias recusandae quisquam aliquid, a eveniet sequi facere facilis iusto explicabo perferendis tenetur dicta, consectetur ullam sapiente culpa asperiores excepturi animi eligendi deleniti voluptatem? Nesciunt minima adipisci molestias nisi laudantium ea unde nihil voluptatem tempora itaque similique impedit, quam labore voluptate autem asperiores voluptatum. Expedita velit nisi optio odio enim praesentium aspernatur aliquid, magni eos eum doloribus tempore voluptatem error dolores ratione eaque itaque sapiente maiores dicta quibusdam sit? Ducimus commodi voluptate, quo tenetur numquam sunt inventore esse eum saepe placeat assumenda odit qui veritatis architecto illum, quaerat illo temporibus quisquam praesentium quae ipsam! Esse repudiandae nemo dolorum eligendi eos eum cum magni animi. Doloremque id inventore temporibus minima repellat blanditiis ratione consectetur! Expedita amet recusandae exercitationem nihil iure excepturi molestiae aperiam natus magni, quod, corporis animi. Voluptas, eum! Animi, tempora. Doloribus, deserunt corporis quis provident similique repellendus architecto saepe mollitia repellat officiis, quae modi quas dicta eligendi? Rem aut cum hic numquam?
                    </p>
                </div>

                <div class="right-bio agree-sk"> 
                    <div class="check-agree">
                        <input type="checkbox" name="check-sk" id="check-sk" class="check-sk me-1">
                        <label for="check-sk" class="check-label text-capitalize">dengan ini saya menyetujui <a href="" class="Thislink">syarat dan ketentuan</a> yang berlaku!</label>
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