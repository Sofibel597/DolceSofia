<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolce Sofia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="imagenes/dolcesofia.png.jpg" alt="Dolce Sofía" style="height: 50px;">
        </a>

        <!-- Botón de menú para dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Enlaces del menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="desayunosymeriendas.php">Desayunos y Meriendas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>

            <!-- Barra de búsqueda -->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>

            <!-- Enlaces de usuario -->
            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Iniciar Sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Regístrate</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="carritoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Carrito (0)
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="carritoDropdown">
                        <li><a class="dropdown-item" href="carrito.php">Ver carrito</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="micuenta.php">Mi Cuenta</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Banner -->
    <section class="banner text-center py-5">
        <div class="container">
        <img src="imagenes/IMG-20200827-WA0044.jpg" alt="Dolce Sofía" style="height: 350px;">  
            <p class="text-secondary">Endulzamos tus momentos, ¡un bocado a la vez!</p>
        </div>
    </section>

    <!-- Product Section -->
    <div class="container mt-4">
    <h2 class="text-center">Los productos más pedidos</h2><br>
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img src="imagenes/download-removebg-preview (2).png" class="card-img-top" alt="Tiramisú">
                <div class="card-body">
                    <h5 class="card-title">Tiramisú 27cm.</h5>
                    <p class="card-text">$16450</p>
                    <a href="#" class="btn btn-danger">Comprar</a>
                </div>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img src="imagenes/IMG-20240313-WA0023[1].jpg" class="card-img-top" alt="Lemon Pie">
                <div class="card-body">
                    <h5 class="card-title">Lemon Pie 28cm</h5>
                    <p class="card-text">$12000</p>
                    <a href="#" class="btn btn-danger">Comprar</a>
                </div>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img src=
                "imagenes/images-removebg-preview (2).png" class="card-img-top" alt="Alfajores Marplatenses">
                <div class="card-body">
                    <h5 class="card-title">Alfajores Marplatenses x 12.</h5>
                    <p> Bañados en glasé </p>
                    <p class="card-text">$8600</p>
                    <a href="#" class="btn btn-danger">Comprar</a>
                </div>
            </div>
        </div>
        <!-- Producto 4 -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img src="imagenes/IMG-20240330-WA0006[1].jpg" class="card-img-top" alt="Torta de Manzana">
                <div class="card-body">
                    <h5 class="card-title">Torta de Manzana 27cm</h5>
                    <p class="card-text">$8300</p>
                    <a href="#" class="btn btn-danger">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2019 Dolce Sofia. Todos los derechos reservados.</p>
            <p>
        <a href="https://www.facebook.com/people/Dolce-Sofia/100038006177024/?_rdr">Facebook</a> || 
        <a href="https://www.instagram.com/_dolcesofia_/">Instagram</a>
      </p>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


