<!-- tambahkan postingan -->
<div class="rounded add-post">
    <!-- input teks postingan -->
    <textarea name="post-input" placeholder="Masukan Teks ..." id="post-input" class="rounded post-input"></textarea>

    <!-- area tag, tambah gambar dan kirim -->
    <form class="post-tag">
        <!-- tag -->
        <input type="text" placeholder="Tag teman ..." name="tag" id="tag" class="Thisform rounded-pill tag">

        <!-- tombol postingan -->
        <input type="file" name="add-file" id="add-file" class="d-none add-file">
        <input type="file" name="add-image" id="add-image" class="d-none add-image">
        <input type="file" name="add-video" id="add-video" class="d-none add-video">
        <div class="btn-post">
            <a href="" class="Thislink rounded-circle btn-post-link"><i class="fa fa-fw fa-layer-group"></i></a>
            <button class="Thislink rounded-circle Thisbtn btn-post-link"><i class="fa fa-fw fa-paperclip"></i></button>
            <label for="add-file" class="Thislink rounded-circle btn-post-link"><i class="fa fa-fw fa-file"></i></label>
            <label for="add-image" class="Thislink rounded-circle btn-post-link"><i class="fa fa-fw fa-image"></i></label>
            <label for="add-video" class="Thislink rounded-circle btn-post-link"><i class="fa fa-fw fa-video"></i></label>
            <a href="" class="Thislink rounded-circle btn-post-link"><i class="fa fa-fw fa-microphone-alt"></i></a>
            <button class="Thislink rounded-circle Thisbtn btn-post-link"><i class="fa fa-fw fa-code"></i></button>
        </div>

        <button class="Thislink rounded-pill Thisbtn btn-submit-post"><i class="fa fa-fw fa-paper-plane me-1"></i>Posting</button>
    </form>
</div>