<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>

<!-- pin database -->
<div class="d-none db-locked-wrap">
    <!-- konten pin -->
    <div class="rounded shadow-sm db-content">
        <form action="" class="rounded form-pin-input">
            <!-- masukan kunci pin -->
            <input type="text" placeholder="masukan pin ..." name="key-db" id="keypin" class="Thisform rounded keypin">

            <!-- tombol angka -->
            <div class="keypad">
                <span class="rounded-circle keypad-pin">1</span>
                <span class="rounded-circle keypad-pin">2</span>
                <span class="rounded-circle keypad-pin">3</span>
                <span class="rounded-circle keypad-pin">4</span>
                <span class="rounded-circle keypad-pin">5</span>
                <span class="rounded-circle keypad-pin">6</span>
                <span class="rounded-circle keypad-pin">7</span>
                <span class="rounded-circle keypad-pin">8</span>
                <span class="rounded-circle keypad-pin">9</span>
                <span class="rounded-circle keypad-pin"><i class="fa fa-fw fa-fingerprint"></i></span>
                <span class="rounded-circle keypad-pin">0</span>
                <span class="rounded-circle keypad-pin">:</span>
            </div>

            <button class="Thisbtn rounded-pill btn-pin"><i class="fa fa-fw fa-lock-open"></i></button>
        </form>
    </div>

    <!-- latar kembali -->
    <div class="db-unlocked">
        <i class="fa fa-fa fa-times"></i>
    </div>
</div>

<!-- navigasi menu -->
<?= $this->include("Layout/NavMenu");?>

<!-- halaman pengguna -->
<div class="user-page">
    
    <!-- pengguna -->
    <div class="user">
        <!-- informasi pengguna -->
        <?= $this->include("Layout/Homepage/User-layout/user-info");?>
        
        <!-- tambahkan postingan -->
        <?= $this->include("Layout/Homepage/User-layout/add-post");?>

        <!-- postingan -->
        <?= $this->include("Layout/Homepage/User-layout/user-post");?>
    </div>
        
    <!-- dashboard halaman pengguna -->
    <div class="user-dashboard">
        <!-- jam dan cuaca -->
        <?= $this->include("Layout/Homepage/User-layout/clockwet");?>

        <!-- trafik website -->
        <?= $this->include("Layout/Homepage/User-layout/trafik");?>

        <!-- list harian pengguna -->
        <?= $this->include("Layout/Homepage/User-layout/todo");?>

        <!-- pencapaian pengguna -->
        <?= $this->include("Layout/Homepage/User-layout/achievement");?>

        <!-- postingan unggulan -->
        <?= $this->include("Layout/Homepage/User-layout/featured-post");?>
    </div>
</div>
<?= $this->endSection();?>