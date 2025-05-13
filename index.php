<?php
session_start();
$usuario = $_SESSION['usuario'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tienda de Ropa</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
    .productos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }
    .producto-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px #0001;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: box-shadow 0.2s;
    }
    .producto-card img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 1rem;
    }
    .producto-card h3 {
        margin: 0.5rem 0 0.2rem 0;
        font-size: 1.1rem;
    }
    .producto-card p {
        margin: 0.2rem 0 0.5rem 0;
        color: #444;
        font-size: 0.95rem;
    }
    .producto-card .precio {
        font-weight: bold;
        color: #1a7f37;
        margin-bottom: 0.7rem;
    }
    .producto-card .acciones {
        display: flex;
        gap: 0.5rem;
        width: 100%;
        justify-content: center;
    }
    .producto-card button {
        border: none;
        border-radius: 6px;
        padding: 0.5rem 0.9rem;
        font-size: 1rem;
        cursor: pointer;
        background: #1a7f37;
        color: #fff;
        display: flex;
        align-items: center;
        gap: 0.4rem;
        transition: background 0.2s;
    }
    .producto-card button.favorito {
        background: #eab308;
        color: #333;
    }
    .producto-card button:hover {
        background: #14532d;
    }
    .producto-card button.favorito:hover {
        background: #facc15;
    }
    </style>
    <script>
    window.usuarioActual = <?php echo $usuario ? json_encode($usuario) : 'null'; ?>;
    </script>
</head>
<body>
    <header>
        <h1 class="logo" onclick="location.href='index.php'">Textisur</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="favorites.php">Favoritos</a></li>
                <li><a href="cart.php">Carrito</a></li>
                <li><a href="about.html">Vende con Nosotros</a></li>
                <?php if ($usuario): ?>
                    <li><span>Bienvenido, <?php echo htmlspecialchars($usuario); ?>!</span></li>
                    <li><a href="logout.php">Cerrar sesión</a></li>
                <?php else: ?>
                    <li><a href="login.html">Iniciar Sesión</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h2>Descubre tu estilo único</h2>
            <p>Explora las últimas tendencias en moda y encuentra tu look perfecto.</p>
            <a href="#populares" class="btn-primary">Ver Populares</a>
        </section>

        <section class="categorias">
            <h2>Categorías</h2>
            <div class="grid">
                <div class="card">Hombre</div>
                <div class="card">Mujer</div>
                <div class="card">Niños</div>
                <div class="card">Accesorios</div>
            </div>
        </section>

        <section class="populares" id="populares">
            <h2>Más Populares</h2>
            <div class="productos-grid" id="productos-lista"></div>
        </section>

        <section class="temporada">
            <h2>Ropa de Temporada</h2>
            <p>Prepárate para esta temporada con nuestra colección exclusiva.</p>
            <a href="#populares" class="btn-primary">Ver Colección</a>
        </section>

        <section class="vender">
            <h2>¿Eres vendedor?</h2>
            <p>Empieza a vender tus productos en minutos. Es rápido y fácil.</p>
            <a href="about.html" class="btn-primary">Comienza Ahora</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 TEXTISUR. Todos los derechos reservados.</p>
    </footer>
    <script src="js/index.js"></script>
</body>
</html>
