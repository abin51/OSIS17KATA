<!-- navigasi menu -->
<nav class="Navmenu shadow-sm">
    <!-- navigasi kiri -->
    <div class="nav-left">
        <!-- pencarian -->
        <form action="" method="get" class="Thisform rounded-pill search" id="search">
            <!-- kolom pencarian -->
            <input type="text" placeholder="cari..." name="search-input" id="search-input" class="Thisform search-input">
            <button type="submit" class="Thisbtn btn-submit" id="btn-submit"><i class="fa fa-fw fa-search"></i></button>
            <button type="submit" class="Thisbtn btn-mic" id="btn-mic"><i class="fa fa-fw fa-microphone"></i></button>
            <button type="submit" class="Thisbtn btn-camera" id="btn-camera"><i class="fa fa-fw fa-camera"></i></button>
        </form>
    </div>

    <!-- navigasi kanan -->
    <div class="nav-right">
        <!-- link navigasi -->
        <a href="" class="Thislink btn-page"><i class="fa fa-fw fa-book-open"></i></a>
        <a href="" class="Thislink btn-page"><i class="fa fa-fw fa-keyboard"></i></a>
        <a href="" class="Thislink btn-page"><i class="fa fa-fw fa-comments"></i></a>
        <button class="Thislink Thisbtn btn-page" id="user-notification"><i class="fa fa-fw fa-bell"></i></button>
        <a href="<?= base_url("homepage")?>" class="Thislink btn-page"><i class="fa fa-fw fa-home"></i></a>

        <!-- gambar pengguna -->
        <div class="Thislink rounded-circle user-img"></div>
    </div>
</nav>

<!-- notifikasi pengguna -->
<div class="rounded shadow-sm user-notification-content"></div>

<!-- tutup notifikasi -->
<div class="close-notification"></div>

<!-- menu dropdown pengguna -->
<div class="rounded shadow-sm dropdown-user">
    <!-- kecerahan dan mode -->
    <div class="rounded modebright"></div>

    <!-- link dropdown menu -->
    <div class="dropdown-link">
        <a href="" class="rounded Thislink droplink"></a>
        <a href="" class="rounded Thislink droplink"></a>
        <a href="" class="rounded Thislink droplink"></a>
        <a href="" class="rounded Thislink droplink"></a>
    </div>
</div>

<!-- tutup dropdown -->
<div class="close-dropdown"></div>