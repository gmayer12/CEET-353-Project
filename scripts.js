const price = 4.99;

function getPrice() {
    return price;
}

function getCookie(name) {
    const cookies = document.cookie.split('; ');
    for (const cookie of cookies) {
        const [cookieName, cookieValue] = cookie.split('=');
        if (cookieName === name) {
            return cookieValue;
        }
    }
    return null;
}

// Function to set a cookie
function setCookie(name, value, daysToExpire) {
        const expirationDate = new Date();
        expirationDate.setDate(expirationDate.getDate() + daysToExpire);

        const cookieString = `${name}=${value}; expires=${expirationDate.toUTCString()}; path=/`;
        document.cookie = cookieString;
    }

function removeFromCart(image) {
    const cartItemsString = getCookie('cartItems');
        
    // Parse the JSON string or initialize an empty array if the cookie is empty
    const cartItems = cartItemsString ? JSON.parse(cartItemsString) : [];

    for(var i = 0; i < cartItems.length; i++) {
        if(cartItems[i] === image) {
            cartItems.splice(i, 1);
            // Stringify the array and save it back to the "cartItems" cookie
            setCookie('cartItems', JSON.stringify(cartItems), 7); // Set to expire in 7 days
            window.alert("Item removed from cart");
            location.reload();
            break;
        }
    }
}

// Function to add an item to the cart
function addToCart(item) {
    // Retrieve the current cart items from the cookie
    const cartItemsString = getCookie('cartItems');
    
    // Parse the JSON string or initialize an empty array if the cookie is empty
    const cartItems = cartItemsString ? JSON.parse(cartItemsString) : [];

    // Add the new item to the array
    cartItems.push(item);

    // Stringify the array and save it back to the "cartItems" cookie
    setCookie('cartItems', JSON.stringify(cartItems), 7); // Set to expire in 7 days

    window.alert("Item added to cart");
}

function clearCart() {
        document.cookie = `${"cartItems"}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
        window.alert("Cart has been cleared");
        location.reload();
}

function getNumberItemsInCart() {
    const cartItemsString = getCookie('cartItems');
    const cartItems = cartItemsString ? JSON.parse(cartItemsString) : [];
    return cartItems.length;
}