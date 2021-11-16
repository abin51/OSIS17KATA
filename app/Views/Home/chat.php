<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- kode halaman navigasi -->
<?= $this->include("Layout/nav");?>

<!-- kode halaman aside -->
<?= $this->include("Layout/aside-slide");?>

<!-- halaman konten -->
<main class="main-content">
    <!-- kontent utama -->
    <div class="chat-left-content">
        <!-- bagian siapa yang dichat -->
    </div>

    <!-- informasi -->
    <div class="chat-right-content">

        <!-- navigasi chat -->
        <nav class="navigation-chat">
            <!-- kiri -->
            <button class="add-doc rounded-circle me-1"><i class="fa fa-fw fa-plus"></i></button>

            <form action="" class="chat-user" id="chat-user">
                <!-- tengah -->
                <input type="file" accept="image/png, image/jpeg" name="image" id="img" class="img">
                <label for="img" class="rounded-circle me-1"><i class="fa fa-fw fa-camera"></i></label>

                <input type="text" name="chat" placeholder="Ketikan pesan..." id="text-chat" class="Thisform text-chat">
                
                <!-- kanan -->
                <button type="submit" class="send rounded-circle ms-1" id="send"><i class="fa fa-fw fa-paper-plane"></i></button>
            </form>
            </nav>
    </div>
</main>
<?= $this->endSection();?>