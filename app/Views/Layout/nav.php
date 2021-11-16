<!-- navigasi menu -->
<nav class="navigation-menu">
    <!-- bagian kiri navgasi -->
    <div class="side-left-navigation">
        <!-- cari postingan, orang, ekstrakurikuller dan informasi -->
        <form class="search-form">
            <!-- form pencarian -->
            <input type="text" placeholder="cari postingan..." name="search form" id="search-input" class="Thisform search-input">
            
            <!-- tombol pencarian -->
            <button type="submit" class="Thislink search-btn rounded-circle" id="search-btn"><i class="fa fa-fw fa-search"></i></button>
        </form>

        <!-- tombol bantuan -->
        <a href="" class="Thislink access-button rounded-circle"><i class="fa fa-fw fa-microphone"></i></a>
        <a href="" class="Thislink access-button rounded-circle"><i class="fa fa-fw fa-video"></i></a>
    </div>

    <!-- bagian kanan navigasi -->
    <div class="side-right-navigation">
        <!-- tombol tambah postingan -->
        <a href="" class="Thislink add-post rounded-circle"><i class="far fa-fw fa-plus-square"></i></a>

        <!-- tombol menu postingan -->
        <a href="<?= base_url("Home/post")?>" class="Thislink post-menu rounded-circle">
            <i class="fa fa-fw fa-ellipsis-v post-menu-left"></i>
            <i class="fa fa-fw fa-ellipsis-v post-menu-center"></i>
            <i class="fa fa-fw fa-ellipsis-v post-menu-right"></i>
        </a>

        <!-- tombol akun utama -->
        <a href="<?= base_url("Home/account")?>" class="Thislink account rounded-circle">
            <img src="<?= base_url("Img/u4.jpg");?>" alt="user image" class="user-img" id="user-img">
        </a>
    </div>
</nav>