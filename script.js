const productBoxes = document.querySelectorAll('.product-box');
const detailsBoxes = document.querySelectorAll('.details-box');
const productDetailsContainer = document.querySelector('.product-details');
const productSection = document.querySelector('.product-grid');

// Hide all details and expand product grid
function hideAllDetails() {
  detailsBoxes.forEach(box => box.style.display = 'none');
  productDetailsContainer.style.display = 'none';
}

// Initially hide details
hideAllDetails();

// When a product is clicked
productBoxes.forEach(box => {
  box.addEventListener('click', e => {
    e.preventDefault();
    const targetId = box.getAttribute('href').substring(1);

    hideAllDetails();

    const targetBox = document.getElementById(targetId);
    if (targetBox) {
      targetBox.style.display = 'flex';
      targetBox.style.flexDirection = 'column';
      productDetailsContainer.style.display = 'flex';
      productSection.style.width = '40%'; // shrink grid to make space for details
    }
  });
});

// Click outside details to hide
productDetailsContainer.addEventListener('click', e => {
  if (e.target === productDetailsContainer) {
    hideAllDetails();
  }
});

// Cart array
const cart = [];
const cartEl = document.querySelector('.cart');
const cartItemsEl = document.querySelector('.cart-items');
const cartTotalEl = document.querySelector('.total-price');

// Add to cart
document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', () => {
    const name = button.dataset.name;
    const price = parseFloat(button.dataset.price);

    // Add item to cart array
    cart.push({ name, price });
    updateCart();

    // Show cart
    cartEl.style.display = 'block';
    setTimeout(() => cartEl.classList.add('open'), 50);
  });
});

// Close cart
document.querySelector('.close-cart').addEventListener('click', () => {
  cartEl.classList.remove('open');
  setTimeout(() => cartEl.style.display = 'none', 400);
});

// Update cart function
function updateCart() {
  cartItemsEl.innerHTML = '';
  let total = 0;

  cart.forEach((item, index) => {
    const li = document.createElement('li');
    li.innerHTML = `
      ${item.name} - ₱${item.price.toFixed(2)}
      <button class="remove-btn" data-index="${index}">Remove</button>
    `;
    cartItemsEl.appendChild(li);
    total += item.price;
  });

  cartTotalEl.textContent = `₱${total.toFixed(2)}`;

  // Add remove functionality
  document.querySelectorAll('.remove-btn').forEach(btn => {
    btn.addEventListener('click', e => {
      const idx = parseInt(btn.dataset.index);
      cart.splice(idx, 1); // remove item from array
      updateCart(); // refresh cart
    });
  });
}
// Open cart manually with button
const openCartBtn = document.querySelector('.open-cart');

openCartBtn.addEventListener('click', () => {
  cartEl.style.display = 'block';
  setTimeout(() => {
    cartEl.classList.add('open'); // slide-in effect
  }, 50);
});










