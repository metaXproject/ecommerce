let cart = [];
let total = 0;

function addToCart(product, price) {
    cart.push({ product, price });
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById('cartItems');
    const totalElement = document.getElementById('total');
    
    cartItems.innerHTML = '';
    total = 0;
    
    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.product} - $${item.price}`;
        cartItems.appendChild(li);
        total += item.price;
    });
    
    totalElement.textContent = total.toFixed(2);
}

function checkout() {
    alert(`Total: $${total.toFixed(2)}\nThank you for your purchase!`);
    cart = [];
    updateCart();
}
