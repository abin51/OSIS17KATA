<!-- informasi pengguna -->
<div class="rounded user-info">
    <!-- background halaman pengguna -->
    <div class="rounded user-bg">
        <img src="<?= base_url("Img/bg.jpg");?>" alt="" class="bg-user-img">
    </div>
    
    <!-- konten informasi pengguna -->
    <div class="user-info-content">
        <!-- gambar pengguna -->
        <input type="file" name="photo profile" id="add-photo-profile" class="d-none add-photo-profile">
        <label for="add-photo-profile" class="Thislink rounded-circle shadow-sm user-info-image">
            <i class="fa fa-fw fa-camera-retro"></i>
        </label>

        <!-- status pengguna -->
        <div class="Thislink rounded-circle shadow-sm user-status" id="user-status">
            <i class="far fa-fw fa-smile-wink"></i>
        </div>

        <!-- edit profil pengguna -->
        <a href="" class="Thislink edit-profile"><i class="fa fa-fw fa-pen"></i></a>

        <!-- informasi pengguna -->
        <div class="user-information">
            <a href="" class="Thislink u-name">e.abin_51</a>
            <h2 class="text-capitalize l-name">muhamad enggar abin pramuja</h2>

            <!-- label pengguna -->
            <div class="u-label">
                <!-- asal sma -->
                <a href="" class="Thislink text-uppercase rounded-pill school label-item">sman 17 kabupaten tangerang</a>

                <!-- cita cita -->
                <a href class="Thislink text-capitalize rounded-pill ambition label-item">cyber security</a>
            </div>

            <!-- social media pengguna -->
            <div class="u-sosmed">
                <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-instagram"></i></a>
                <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-github"></i></a>
                <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-pinterest"></i></a>
                <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-dribbble"></i></a>
                <a href="" class="Thislink usosmed-link"><i class="fab fa-fw fa-youtube"></i></a>
            </div>
        </div>
    </div>

</div>