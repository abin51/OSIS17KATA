<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- kode halaman navigasi -->
<?= $this->include("Layout/nav");?>

<!-- kode halaman aside -->
<?= $this->include("Layout/aside-slide");?>

<!-- halaman konten -->
<main class="main-content">
</main>
<?= $this->endSection();?>