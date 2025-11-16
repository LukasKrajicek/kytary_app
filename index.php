<?php include 'templates/header.php'; ?>

<!-- HERO SEKCE -->
<section class="py-5 text-center">
    <h1 class="display-4 fw-bold">Vyber si ideální kytaru nebo aparaturu</h1>
    <p class="lead mt-3">
        Jednoduchý průvodce ti pomůže najít nástroj přesně podle tvých požadavků.
    </p>
    <a href="kytary.php" class="btn btn-warning btn-lg mt-3">Začít vybírat</a>
</section>

<hr class="my-5">

<!-- TŘI HLAVNÍ BOXY --> <!-- dodělat bg-light -> změnit na dark a outline na light, jen aby ten text šel vidět -->     
<div class="row text-center">

    <div class="col-md-4 mb-4">
        <div class="p-4 bg-light rounded-3 shadow">
            <h3>Kytary</h3>
            <p>Prohlédni si nabídku elektrických, akustických i elektroakustických kytar.</p>
            <a href="kytary.php" class="btn btn-outline-dark">Prozkoumat</a>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="p-4 bg-light rounded-3 shadow">
            <h3>Aparatura</h3>
            <p>Najdi ideální kombo nebo zesilovač podle výkonu a použití.</p>                          
            <a href="aparatura.php" class="btn btn-outline-dark">Zobrazit</a>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="p-4 bg-light rounded-3 shadow">
            <h3>Průvodce výběrem</h3>
            <p>Nejseš si jistý? Pomocí otázek zjistíme, co se k tobě hodí nejvíc.</p>
            <a href="pruvodce.php" class="btn btn-outline-dark">Spustit</a>
        </div>
    </div>

</div>


<?php include 'templates/footer.php'; ?>

