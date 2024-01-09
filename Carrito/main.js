// Datos de ejemplo de productos/servicios

const products = [

    { id: 1, name: "Producto 1", description: "Descripción del producto 1" },

    { id: 2, name: "Producto 2", description: "Descripción del producto 2" },

    { id: 1, name: "Producto 3", description: "Descripción del producto 3" },

    { id: 2, name: "Producto 4", description: "Descripción del producto 4" },

    { id: 1, name: "Producto 5", description: "Descripción del producto 5" },

    { id: 2, name: "Producto 6", description: "Descripción del producto 6" },

    { id: 1, name: "Producto 7", description: "Descripción del producto 7" },

    { id: 2, name: "Producto 8", description: "Descripción del producto 8" },

    { id: 1, name: "Producto 9", description: "Descripción del producto 9" },

    { id: 2, name: "Producto 10", description: "Descripción del producto 10" },

    { id: 1, name: "Producto 11", description: "Descripción del producto 11" },

    { id: 2, name: "Producto 12", description: "Descripción del producto 12" },

    // Agrega más productos aquí...

  ];

  

  // Función para mostrar los productos en la galería

  function showProducts(productsToShow) {

    const gallery = document.getElementById('gallery');

    gallery.innerHTML = '';

  

    productsToShow.forEach(product => {

      const productCard = document.createElement('div');

      productCard.classList.add('product-card');

      productCard.innerHTML = `

        <h3>${product.name}</h3>

        <p>${product.description}</p>

      `;

      gallery.appendChild(productCard);

    });

  }

  

  // Función para buscar productos

  function search() {

    const searchInput = document.getElementById('searchInput');

    const searchTerm = searchInput.value.toLowerCase();

    const searchResults = products.filter(product =>

      product.name.toLowerCase().includes(searchTerm) || product.description.toLowerCase().includes(searchTerm)

    );

    showProducts(searchResults);

  }

  

  // Mostrar productos destacados al cargar la página

  document.addEventListener('DOMContentLoaded', () => {

    // Aquí puedes llamar a tu backend para obtener productos destacados

    // Por ahora, mostraré los primeros diez productos como destacados

    const featuredProducts = products.slice(0, 12);

    showProducts(featuredProducts);

  });
