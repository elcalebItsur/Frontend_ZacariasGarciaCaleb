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
</head>
<body>
    <header>
        <h1 class="logo">Textisur</h1>
        <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="favorites.html">Favoritos</a></li>
            <li><a href="cart.html">Carrito</a></li>
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
        <?php if ($usuario): ?>
            <section class="bienvenida">
                <h2>¡Bienvenido, <?php echo htmlspecialchars($usuario); ?>!</h2>
                <p>Gracias por iniciar sesión en Textisur.</p>
            </section>
        <?php endif; ?>
        <!-- Hero Principal -->
        <section class="hero">
        <h2>Descubre tu estilo.</h2>
        <p>Las últimas tendencias en un solo lugar.</p>
        <a href="#populares" class="btn-primary">Ver Populares</a>
        </section>
        
        <!-- Categorías -->
        <section class="categorias">
        <h2>Categorías</h2>
        <div class="grid">
            <div class="card">Hombre</div>
            <div class="card">Mujer</div>
            <div class="card">Niños</div>
            <div class="card">Accesorios</div>
        </div>
        </section>

        <!-- Populares -->
        <section class="populares" id="populares">
        <h2>Más Populares</h2>
        <div class="productos">
            <div class="producto">
                <img src="assets/images/camisa1.webp" alt="Camisa Polo" />
                <h3>Camisa Polo</h3>
                <p>$129.99</p>
                <button class="btn-accent">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="assets/images/jeans1.webp" alt="Jeans Levis strigth" />
                <h3>Jeans Corte Recto</h3>
                <p>$149.99</p>
                <button class="btn-accent">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="assets/images/chaqueta1.jpg" alt="Chaqueta de Cuero" />
                <h3>Chaqueta de Cuero</h3>
                <p>$199.99</p>
                <button class="btn-accent">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="assets/images/zapatos1.webp" alt="Zapatos de Cuero" />
                <h3>Zapatos de Cuero</h3>
                <p>$249.99</p>
                <button class="btn-accent">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="assets/images/pants1.jpg" alt="Pants Deportivo" />
                <h3>Pants Deportivo</h3>
                <p>$99.99</p>
                <button class="btn-accent">Agregar al carrito</button>
            </div>
            <div class="producto">
                <img src="assets/images/camisa2.jpg" alt="Camisa Casual" />
                <h3>Camisa Casual</h3>
                <p>$89.99</p>
                <button class="btn-accent">Agregar al carrito</button>
            </div>
        </div>
        </section>

        <!-- Temporada -->
        <section class="temporada">
        <h2>Ropa de Temporada</h2>
        <p>Prepárate para esta temporada con nuestra colección exclusiva.</p>
        <a href="#populares" class="btn-secondary">Ver Colección</a>
        </section>

        <!-- Cómo Vender -->
        <section class="vender">
        <h2>¿Eres vendedor?</h2>
        <p>Empieza a vender tus productos en minutos. Es rápido y fácil.</p>
        <a href="about.html" class="btn-primary">Comienza Ahora</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 TEXTISUR. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
