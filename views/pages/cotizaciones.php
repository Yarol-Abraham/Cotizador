<!---------- navbar ---------->
<?php require __DIR__ . "/../layout/navbar.php";  ?>

<main class="bg-light py-5 vh-100">
    <!---------- title ---------->
    <?php require __DIR__ . "/../layout/title.php";  ?>
    <!---------- content ---------->
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <button type="button" class="btn btn-secondary fs-4">
                    <i class="fas fa-print"></i>
                    Reporte
                </button>
                <button type="button" class="btn btn-success  fs-4">
                    <i class="fas fa-plus-square"></i>
                    Nueva Cotizacion
                </button>
            </div>
        </div>
        <div class="row bg-white rounded p-5">

            <h3>Buscar Cotizaciones</h3>
            <form class="row">
                <div class="col-sm-12 col-md-4">
                    <input type="text" name="daterange" id="daterange" value="01/10/2021 - 20/10/2021" class="form-control daterange fs-4" readonly="">
                </div>
                <div class="col-sm-12 col-md-2">
                    <select class="form-select fs-4" aria-label="Default select example">
                        <option selected>Vendedor</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-2">
                    <select class="form-select fs-4" aria-label="Default select example">
                        <option selected>Estado</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="input-group mb-3">
                        <input class="form-control fs-4" type="text" placeholder="Atención o Empresa" aria-label="buscar">
                        <button class="btn btn-outline-secondary fs-4" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>