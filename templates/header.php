<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikace pro výběr kytary</title>

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vlastní styly -->
    <link rel="stylesheet" href="/styles.css">
</head>
<body>

<!-- NAVBAR + OFFCANVAS MENU -->
<nav class="navbar navbar-dark bg-dark px-3">
    <!-- Tlačítko hamburgeru -->
    <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideMenu">
        ☰
    </button>

    <span ><a href="index.php" class="navbar-brand ms-3">Guitar Selector </a></span>
</nav>

<!-- OFFCANVAS MENU - Skryté boční menu -->
<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sideMenu">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-white" href="index.php">Domů</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="kytary.php">Kytary</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="aparatura.php">Aparatura</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="pruvodce.php">Průvodce výběrem</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="kontakt.php">Kontakt</a></li>
        </ul>
    </div>
</div>

<!-- Hlavní obsah stránky začíná zde -->
<main class="container mt-4">