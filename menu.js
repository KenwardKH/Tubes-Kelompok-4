let cart = [];
let total = 0;
function addToCart(id,name,image,price){
    var existingItem = cart.find(item => item.id === id);

    if (existingItem) {
        existingItem.quantity++;
    } else {
        var newItem = { id: id, name: name,image: image, price: price, quantity: 1 };
        cart.push(newItem);
    }
    total += price;
    updateCart();
}

function removeFromCart(index) {
    var removedItem = cart.splice(index, 1)[0];
    total -= removedItem.price * removedItem.quantity;
    updateCart();
}

function incrementQuantity(index) {
    cart[index].quantity++;
    total += cart[index].price;
    updateCart();
}

function decrementQuantity(index) {
    if (cart[index].quantity > 1) {
      cart[index].quantity--;
      total -= cart[index].price;
      updateCart();
    }
}

function updateCart() {
    var cartList = document.getElementById("cart");
    var totalPrice = document.getElementById("totalPrice");
    var cart_menu = document.getElementById("cart_menu")

    cartList.innerHTML = "";
    total = 0;

    cart.forEach(function(item, index) {
        let img = document.createElement("img");
        img.src = item.image;
        var li = document.createElement("li");
        li.textContent = `${item.name} - Rp${item.price} x ${item.quantity} `;
        var incrementButton = document.createElement("button");
        incrementButton.textContent = "+";
        incrementButton.onclick = function() {
          incrementQuantity(index);
        };
  
        var decrementButton = document.createElement("button");
        decrementButton.textContent = "-";
        decrementButton.onclick = function() {
          decrementQuantity(index);
        };
  
        var removeButton = document.createElement("button");
        removeButton.textContent = "x";
        
        removeButton.onclick = function() {
          removeFromCart(index);
        };
        let operator = document.createElement("div");
        operator.classList.add("operator")
        operator.appendChild(incrementButton);
        operator.appendChild(decrementButton);
        removeButton.classList.add("remove");
      
        operator.appendChild(removeButton);
        cartList.appendChild(img);
        cartList.appendChild(li);
        cartList.appendChild(operator);
        
        total += item.price * item.quantity;
      });
      totalPrice.value = total;
      cart_menu.value = "";
      for (let i = 0; i < cart.length; i++) {
        if ('name' in cart[i]){
          cart_menu.value = cart_menu.value + cart[i].name + "(" + cart[i].quantity + ")" + " ";
        }
    }
}

function checkout() {
    alert("Total Harga: Rp" + total + "\nTerima Kasih");
}