<!---------- navbar ---------->
<?php require __DIR__ . "/../layout/navbar.php";  ?>

<main class="bg-light py-5">
    <!---------- title ---------->
    <?php require __DIR__ . "/../layout/title.php";  ?>
    <!---------- content ---------->

    <div class="container">
        <div class="row">
            <?php
            foreach ($resumen as $res => $value) :
            ?>

                <div class="col-ms-12 col-md-6 mb-md-4 col-lg-3 d-flex flex-column justify-content-between">
                    <div class="rounded py-4 mb-5 bg-<?php echo $value["bg"]; ?> bg-gradient d-flex flex-column justify-content-center align-items-center">
                        <h3 class="fw-normal text-white fs-1"><?php echo $value["total"]; ?></h3>
                        <p class="fw-light text-white text-uppercase fs-3"><?php echo $value["nombre"]; ?></p>
                    </div>
                    <div class="py-5 px-4 bg-white rounded d-flex flex-row justify-content-between align-items-center">
                        <div class="d-flex flex-column">
                            <p class="fs-1"><?php echo $value["nuevas"]; ?></p>
                            <p class="text-secondary fs-4">cotizaciones nuevas</p>
                        </div>
                        <div>
                            <i class="fas fa-shopping-bag fs-1"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>