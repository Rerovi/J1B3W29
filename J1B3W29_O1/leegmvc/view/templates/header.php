<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
          integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>/css/style.css">
    <title><?= APPLICATION_TITLE ?></title>
    <script src="<?= URL ?>/js/script.js"></script>
    <link rel="stylesheet" href="<?= URL ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<div id="container">
    <header>
        <h1 class="logo">Planningstool</h1>
    </header>
    <nav>
        <div class="table">
             <ul class="navList">
                 <li class="navItems" id="navItemReference"><a href="<?= URL ?>/planning/index">Overzicht </a></li>
                 <li class="navItems"><a href=" <?= URL ?>planning/games">Alle games </a></li>
                 <li class="navItems"><a href="<?= URL ?>/planning/addPlanning">Toevoegen </a></li>
            </ul>
        </div>
    </nav>