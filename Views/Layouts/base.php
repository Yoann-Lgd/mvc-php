<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">
    <link rel="stylesheet" href="./Public/css/output.css">
    <title><?= $page_title; ?></title>
</head>
<body>
    <?php require_once('Views/Layouts/menu.php');?>
    <?= $page_content; ?>
    <script src="./Public/js/navbar.js"></script>
</body>
</html>