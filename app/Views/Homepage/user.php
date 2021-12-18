<?= $this->extend("Layout/index.php");?>

<?= $this->section("Main-body");?>
<!-- navigation menu -->
<?= $this->include("Layout/NavMenu");?>
<!-- user page -->
<div class="user-page">
    <!-- user info -->
    <div class="user-info"></div>

    <!-- user dashboard -->
    <div class="user-dashboard"></div>
</div>
<?= $this->endSection();?>