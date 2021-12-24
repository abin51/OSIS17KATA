<!DOCTYPE html>
<html lang="en">
<head>
    <!-- title web -->
    <title><?= $title;?></title>
    <!-- Meta tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Style -->
    <link rel="stylesheet" href="<?= base_url('Css')?>/main.css">

    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" >
</head>

<body class="body-wrapper">

<!-- main body -->
<?= $this->renderSection('Main-body');?>
    
</body>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<!-- javascript -->
<script src="<?= base_url('Js/Javascript.js')?>"></script>
</html>