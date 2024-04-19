<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GadgetExpress - Entrega a Domicilio de Dispositivos Tecnológicos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>GadgetExpress</h1>
            <nav>
                <ul>
                    <li><button class="nav-btn" onclick="window.location.href='#'">Inicio</button></li>
                    <li><button class="nav-btn" onclick="window.location.href='#productos'">Productos</button></li>
                    <li><button class="nav-btn" onclick="window.location.href='#contacto'">Contacto</button></li>
                    <li><button class="nav-btn" onclick="window.location.href='mision-vision-valores.html'">Misión, Visión y Valores</button></li>
                    <li><button class="cart-btn" id="cart-nav-btn">Carrito</button></li> <!-- Botón de carrito -->
                    <li><button class="logout-btn" id="logout">Cerrar sesión</button></li> <!-- Botón de cerrar sesión -->
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Carrito de compra -->
    <div id="cart" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Carrito de Compra</h2>
            <ul id="cart-items">
                <!-- Los elementos del carrito se agregarán aquí dinámicamente con JavaScript -->
            </ul>
            <p>Total: <span id="cart-total">$0.00</span></p>
            <button id="checkout-btn">Realizar Compra</button>
        </div>
    </div>

    <main>
        <section id="productos">
            <div class="container">
                <h2>Nuestros Productos</h2>
                <div class="producto">
                    <img src="14-pro-2-1024x572-1-484314823.jpeg" alt="Teléfono inteligente">
                    <h3>Teléfono Inteligente</h3>
                    <h4>Precio:</h4> <p1>US$1200</p1>
                    <button class="add-to-cart-btn" data-product-name="Teléfono Inteligente" data-price="1200" data-image="14-pro-2-1024x572-1-484314823.jpeg">Agregar al carrito</button>
                </div>
                <div class="producto">
                    <img src="Apple-iPad-Pro-3253830424.jpg" alt="Tableta">
                    <h3>Tableta</h3>
                    <h4>Precio:</h4> <p1>US$364</p1>
                    <button class="add-to-cart-btn" data-product-name="Tableta" data-price="364" data-image="Apple-iPad-Pro-3253830424.jpg">Agregar al carrito</button>
                </div>
                <div class="producto">
                    <img src="auriculares_airpods_max_iphone-2040311130.jpg" alt="Auriculares">
                    <h3>Auriculares</h3>
                    <h4>Precio:</h4> <p1>US$433</p1>
                    <button class="add-to-cart-btn" data-product-name="Auriculares" data-price="433" data-image="auriculares_airpods_max_iphone-2040311130.jpg">Agregar al carrito</button>
                </div>
                <div class="producto">
                    <img src="topic-apple-watch-all-2656345538.png" alt="Reloj inteligente">
                    <h3>Reloj Inteligente</h3>
                    <h4>Precio:</h4> <p1>US$149</p1>
                    <button class="add-to-cart-btn" data-product-name="Reloj Inteligente" data-price="149" data-image="topic-apple-watch-all-2656345538.png">Agregar al carrito</button>
                </div>
                <!-- Agrega más productos aquí -->
            </div>
        </section>
        
        <section id="contacto">
            <div class="container">
                <h2>Contacto</h2>
                <form action="#">
                    <strong>Support:</strong><p1>support@gadgetexpress.com</p1>
                </form>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 GadgetExpress - Todos los derechos reservados</p>
        </div>
    </footer>

    <!-- Modal de cierre de sesión -->
    <div id="logoutModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>¿Estás seguro de que quieres cerrar sesión?</p>
            <button id="confirmLogout">Cerrar sesión</button>
        </div>
    </div>

    <script src="carrito-y-manejo-de-sesiones.js"></script> <!-- Agrega tu archivo JavaScript -->
</body>
</html>
