<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAJEF - Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script>
    let cartCount = 0;
    function addToCart() {
      cartCount++;
      document.getElementById('cart-count').innerText = cartCount;
    }
  </script>
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="bg-white shadow">
    <div class="container mx-auto flex items-center justify-between p-4">
      <div class="text-2xl font-bold text-blue-600">SAJEF</div>
      <div class="w-1/2">
        <input type="text" placeholder="Rechercher des produits..." class="w-full p-2 border rounded">
      </div>
      <div class="flex items-center space-x-4">
        <a href="#" class="text-gray-700">Connexion</a>
        <a href="#" class="text-gray-700">Inscription</a>
        <a href="#" class="text-gray-700">Panier (<span id="cart-count">0</span>)</a>
      </div>
    </div>
  </header>

  <!-- Categories -->
  <nav class="bg-blue-600 p-3">
    <ul class="flex flex-wrap justify-center space-x-4 text-white text-sm md:text-base">
      <li><a href="#">Électronique</a></li>
      <li><a href="#">Mode</a></li>
      <li><a href="#">Maison</a></li>
      <li><a href="#">Livres</a></li>
      <li><a href="#">Beauté</a></li>
    </ul>
  </nav>

  <!-- Hero Carousel -->
  <div class="container mx-auto my-6">
    <div class="relative overflow-hidden rounded-lg shadow">
      <div class="flex animate-slide">
        <img src="https://via.placeholder.com/1200x300?text=Promo+1" alt="Promo 1" class="w-full">
        <img src="https://via.placeholder.com/1200x300?text=Promo+2" alt="Promo 2" class="w-full">
        <img src="https://via.placeholder.com/1200x300?text=Promo+3" alt="Promo 3" class="w-full">
      </div>
    </div>
  </div>

  <style>
    @keyframes slide {
      0% { transform: translateX(0%); }
      33% { transform: translateX(-100%); }
      66% { transform: translateX(-200%); }
      100% { transform: translateX(0%); }
    }
    .animate-slide {
      width: 300%;
      animation: slide 12s infinite;
    }
  </style>

  <!-- Product Sections -->
  <section class="container mx-auto mb-10">
    <h2 class="text-xl font-semibold mb-4 px-2">Meilleures ventes</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 px-2">
      <div class="bg-white p-4 rounded shadow">
        <img src="https://via.placeholder.com/150" alt="Produit" class="mb-2 mx-auto">
        <h3 class="text-lg font-semibold">Produit 1</h3>
        <p class="text-blue-600 font-bold">15.000 FCFA</p>
        <button onclick="addToCart()" class="mt-2 bg-blue-600 text-white px-4 py-1 rounded w-full">Ajouter</button>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <img src="https://via.placeholder.com/150" alt="Produit" class="mb-2 mx-auto">
        <h3 class="text-lg font-semibold">Produit 2</h3>
        <p class="text-blue-600 font-bold">25.000 FCFA</p>
        <button onclick="addToCart()" class="mt-2 bg-blue-600 text-white px-4 py-1 rounded w-full">Ajouter</button>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <img src="https://via.placeholder.com/150" alt="Produit" class="mb-2 mx-auto">
        <h3 class="text-lg font-semibold">Produit 3</h3>
        <p class="text-blue-600 font-bold">10.000 FCFA</p>
        <button onclick="addToCart()" class="mt-2 bg-blue-600 text-white px-4 py-1 rounded w-full">Ajouter</button>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <img src="https://via.placeholder.com/150" alt="Produit" class="mb-2 mx-auto">
        <h3 class="text-lg font-semibold">Produit 4</h3>
        <p class="text-blue-600 font-bold">30.000 FCFA</p>
        <button onclick="addToCart()" class="mt-2 bg-blue-600 text-white px-4 py-1 rounded w-full">Ajouter</button>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white text-center p-4 text-gray-600 text-sm">
    © 2025 SAJEF. Tous droits réservés.
  </footer>

</body>
</html>
