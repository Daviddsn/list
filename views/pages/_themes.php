<?php
    $s = $style;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=url("/views/pages/css/style.css")?>">
    <link rel="stylesheet" href="<?=url("/views/pages/css/{$s}.css")?>">
<!--    <link rel="stylesheet" href="--><?//=url("/views/pages/css/listEdit.css")?><!--">-->
    <title>Document</title>
</head>
<body>
<header>
    <div class="container">
        <h1>Bem Vindo, Davi</h1>
        <i class="fas fa-sign-out-alt"></i>
    </div>
</header>
<div class="clear"></div>
<main>
    <?=$v->section('content')?>
</main>

<script src="<?=url("/views/pages/assets/js/jquery.js")?>"></script>
<?=$v->section("js")?>
</body>
</html>
