let cart = [];
let cartCount = 0;

// Función para agregar productos al carrito
function addToCart(productName, productPrice) {
    const product = {
        name: productName,
        price: productPrice
    };

    // Agregar producto al carrito
    cart.push(product);
    cartCount++;
    updateCartDisplay();
}

// Función para actualizar la visualización del carrito
function updateCartDisplay() {
    const cartDropdown = document.getElementById('cart-dropdown');
    const cartCountElement = document.getElementById('cart-count');
    const cartTotal = document.getElementById('cart-total');
    const cartItems = document.getElementById('cart-items');
    
    // Actualizar el número de productos en el carrito
    cartCountElement.innerText = cartCount;

    // Limpiar la visualización anterior
    cartDropdown.innerHTML = '';
    cartItems.innerHTML = '';

    let total = 0;

    // Agregar productos al carrito en la barra de navegación
    cart.forEach(product => {
        cartDropdown.innerHTML += `
            <li><a class="dropdown-item" href="#">${product.name} - $${product.price}</a></li>
        `;
        total += product.price;

        // Agregar productos a la sección del carrito
        cartItems.innerHTML += `
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="card-text">$${product.price}</p>
                    </div>
                </div>
            </div>
        `;
    });

    // Actualizar el total
    cartTotal.innerText = total.toFixed(2);
}

// Función de checkout (vaciar carrito)
function checkout() {
    alert("Proceeding to checkout...");
    cart = [];
    cartCount = 0;
    updateCartDisplay();
}
