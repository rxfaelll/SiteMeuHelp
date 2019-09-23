<?php 
    include 'php/header.php';
    include 'php/fixedSocialBar.php';
    include 'php/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link rel="stylesheet" href="css/main.css">
    <title>Meu Help</title>
</head>
<body>
    <!-- Header -->
    <?php
        getHeader();
    ?>

    <!-- Fixed social bar -->
    <?php
        getFixedSocialBar();
    ?>

    <div>
        <h1></h1>
        <p>Lorem ipsum dolor sit amet</p>
    </div>

    <!-- Footer -->
    <?php 
        getFooter();
    ?>
</body>
</html>