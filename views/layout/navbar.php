<nav class="navbar navbar-expand-lg navbar-light bg-white shadow p-3">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link <?php echo $active ? "active text-primary" : "" ?> mx-4 fs-4 d-flex flex-row md:justify-content-center align-items-center" aria-current="page" href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <span> Dashboard</span>
                </a>
                <a class="nav-link  mx-4 fs-4 d-flex flex-row md:justify-content-center  align-items-center" href="#">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Cotizaciones</span>
                </a>
                <a class="nav-link mx-4 fs-4 d-flex flex-row md:justify-content-center  align-items-center" href="#">
                    <i class="fas fa-id-card"></i>
                    Clientes
                </a>
                <a class="nav-link mx-4 fs-4 d-flex flex-row md:justify-content-center  align-items-center" href="#">
                    <i class="fas fa-barcode"></i>
                    Catálogo
                </a>
                <a class="nav-link mx-4 fs-4 d-flex flex-row md:justify-content-center  align-items-center" href="#">
                    <i class="fas fa-user-cog"></i>
                    Administrar Acceso
                </a>
                <a class="nav-link mx-4 fs-4 d-flex flex-row md:justify-content-center  align-items-center" href="#">
                    <i class="fas fa-cog"></i>
                    Configuración
                </a>
            </div>
        </div>
    </div>
</nav>