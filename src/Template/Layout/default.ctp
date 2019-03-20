
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OST+</title>


        <meta property="og:title" content="">
        <meta property="og:url" content="">
<!--        <meta property="og:image" content="/app/img/og.png">-->
        <meta property="og:description" content="">
        <meta name="description" content="">
        <meta name="keywords" content="" >

<!--    <meta property="og:image" content="/app/img/og.png">-->

<!--    <link rel="icon" type="image/png" sizes="32x32" href="/app/img/32x32.png">-->
<!--    <link rel="icon" type="image/png" sizes="16x16" href="/app/img/16x16.png">-->

    <!--    <link href="http://allfont.ru/allfont.css?fonts=corinthia" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="/app/css/main.css?<?= time() ?>">


</head>
<body>
<?= $this->element('header') ?>
<?= $this->fetch('content') ?>
<?= $this->element('footer') ?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


<script src="/app/js/main.js"></script>





<?= $this->fetch('pageScript'); ?>
</body>
</html>
