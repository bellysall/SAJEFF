<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NDAR NIMBAL CONNECT - Catalogue des produits des GIE de Saint-Louis">
    <title>NDAR NIMBAL CONNECT - Catalogue</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #e91e63;
            --secondary-color: #ff9800;
            --success-color: #4caf50;
            --info-color: #2196f3;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            background: linear-gradient(to right, #fdfcfb, #e2d1c3); 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            

        
        }


        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
            margin-bottom: 2rem;
        }

        .logo h1 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 0.2rem;
        }

        .logo p {
            color: #666;
            font-size: 0.9rem;
        }
        .gradient-blue-btn {
          background: linear-gradient(45deg, #007bff, #00c6ff);
          border: none;
        }

        
        .gradient-blue-btn:hover {
            background: linear-gradient(135deg, #0066cc, #004080); /* Plus foncé au survol */
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            margin: 0;
            padding: 0;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover, nav .active a {
            color: var(--primary-color);
        }
        

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .catalog-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
        }

        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 1.5rem;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .product-image {
            height: 200px;
            background: linear-gradient(45deg, #f0f0f0, #e0e0e0);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #999;
        }

        .price-tag {
            background: var(--success-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: bold;
        }

        .category-badge {
            background: var(--info-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
        }

        .gie-info {
            background: rgba(233, 30, 99, 0.1);
            border-left: 4px solid var(--primary-color);
            padding: 0.8rem;
            border-radius: 5px;
            margin: 1rem 0;
        }

        .filter-section {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .btn-primary {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background: #c2185b;
            border-color: #c2185b;
        }

        .search-box {
            border-radius: 25px;
            border: 2px solid #e0e0e0;
            padding: 0.8rem 1.5rem;
        }

        .search-box:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
        }

        .contact-btn {
            background: var(--secondary-color);
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.2rem;
        }

        .contact-btn:hover {
            background: #f57c00;
        }
         /* Newsletter */
        .newsletter-section {
            background: var(--dark-color);
            color: white;
            padding: 4rem 0;
            margin-top: 3rem;
        }

        .newsletter-input {
            border-radius: 30px;
            padding: 0.8rem 1.5rem;
            border: none;
            font-size: 18px;
           padding: 10px 12px; 

        }

        .newsletter-btn {
            border-radius: 30px;
            padding: 0.8rem 2rem;
        }


        /* Responsive */
        @media (max-width: 768px) {
            nav ul {
                display: none;
                flex-direction: column;
                background: white;
                position: absolute;
                width: 100%;
                left: 0;
                padding: 1rem;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                z-index: 100;
            }
            
            .mobile-menu {
                display: block;
            }
            
            .news-header {
                padding: 3rem 0;
            }
        }

        @media (max-width: 768px) {
            nav ul {
                display: none;
            }
            
            .mobile-menu {
                display: block;
            }
            
            .filter-section .row > div {
                margin-bottom: 1rem;
            }
        }
        
    </style>
</head>
<body>
    <header>
        <header>
  <div class="container py-2">
    <div class="row align-items-center gx-3">

      <!-- 🟣 Logo -->
      <div class="col-md-2 d-flex align-items-center">
        <img src="images/logo.png" alt="Logo NDAR NDIMBAL CONNECT" style="height: 70px;">
      </div>

      <!-- 🔵 Barre de recherche avec icône dans l'input -->
      <div class="col-md-6">
        <form class="d-flex align-items-center" role="search">
          <div class="input-group" style="max-width: 300px;">
            <span class="input-group-text bg-white border-end-0">
              <i class="fas fa-search text-secondary"></i>
            </span>
            <input class="form-control form-control-sm border-start-0" 
                  type="search" 
                  placeholder="Chercher un produit, un GIE ou une Catégorie" 
                  aria-label="Search" 
                  style="font-size: 11px;">
          </div>
          <button class="btn btn-sm gradient-blue-btn text-white ms-2" type="submit" style="font-size: 16px;">
            Rechercher
          </button>
        </form>
      </div>
      <!-- 🟡 Navigation + Panier -->
      <div class="col-md-4">
        <nav class="d-flex justify-content-end align-items-center">
          <ul class="list-unstyled d-flex mb-0 gap-3 align-items-center">
            <li><a href="catalog.php" class="text-dark fw-semibold">Catalogue</a></li>
            <li><a href="about.php" class="text-dark fw-semibold">Partenaires</a></li>
            <li><a href="news.php" class="text-dark fw-semibold">Nouveautés</a></li>
            <li><a href="contact.php" class="text-dark fw-semibold">Contact</a></li>
            <li><a href="inscription.php" class="text-dark fw-semibold">S'identifier</a></li>
            <!-- 🛒 Panier -->
            <li class="position-relative">
              <a href="panier.php" class="text-dark">
                <i class="fas fa-shopping-cart fa-lg"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

    </div>
  </div>
    </header>

    <div class="catalog-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><i class="fas fa-store me-3"></i>Catalogue des Produits & Services</h1>
                    <p class="mb-0">Découvrez les produits et services proposés par nos GIE de femmes</p>
                </div>
                <div class="col-md-4 text-end">
                    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addProductModal">
                        <i class="fas fa-plus me-2"></i>Ajouter un Produit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Section de filtres -->
        <div class="filter-section">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" id="searchInput" class="form-control search-box" placeholder="Rechercher un produit...">
                </div>
                <div class="col-md-3">
                    <select id="categoryFilter" class="form-select">
                        <option value="">Toutes les catégories</option>
                        <option value="Artisanat">Artisanat</option>
                        <option value="Alimentation">Alimentation</option>
                        <option value="Textile">Textile</option>
                        <option value="Cosmétique">Cosmétique</option>
                        <option value="Services">Services</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select id="gieFilter" class="form-select">
                        <option value="">Tous les GIE</option>
                        <option value="GIE Ndèye Fatou">GIE Ndèye Fatou</option>
                        <option value="GIE Yaay Borom">GIE Yaay Borom</option>
                        <option value="GIE Femmes Solidaires">GIE Femmes Solidaires</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100" onclick="applyFilters()">
                        <i class="fas fa-filter me-2"></i>Filtrer
                    </button>
                </div>
            </div>
        </div>

        <!-- Grille des produits -->
        <div id="productsGrid" class="row">
            <!-- Les produits seront ajoutés ici par JavaScript -->
        </div>
    </div>

    <!-- Modal d'ajout de produit -->
    <div class="modal fade" id="addProductModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un Produit/Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="productForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nom du produit *</label>
                                    <input type="text" class="form-control" id="productName" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Catégorie *</label>
                                    <select class="form-select" id="productCategory" required>
                                        <option value="">Sélectionner...</option>
                                        <option value="Artisanat">Artisanat</option>
                                        <option value="Alimentation">Alimentation</option>
                                        <option value="Textile">Textile</option>
                                        <option value="Cosmétique">Cosmétique</option>
                                        <option value="Services">Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Prix (FCFA) *</label>
                                    <input type="number" class="form-control" id="productPrice" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">GIE *</label>
                                    <select class="form-select" id="productGie" required>
                                        <option value="">Sélectionner...</option>
                                        <option value="GIE Ndèye Fatou">GIE Ndèye Fatou</option>
                                        <option value="GIE Yaay Borom">GIE Yaay Borom</option>
                                        <option value="GIE Femmes Solidaires">GIE Femmes Solidaires</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" id="productDescription" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="tel" class="form-control" id="productContact" placeholder="Numéro de téléphone">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" onclick="addProduct()">Ajouter</button>
                </div>
            </div>
        </div>
    </div>
     <!-- Newsletter Section -->
   <section class="newsletter-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3>Nouveau sur Ndar Ndimbal Connect ? </h3>
                <p class="mb-4">Inscrivez-vous à nos communications pour recevoir nos meilleures offres!</p>
                
                <form class="row g-2 justify-content-center">
                    <!-- Dans la section newsletter -->
                    <div class="col-md-8">
                        <div class="input-group">
                            <span class="input-group-text bg-white">
                                <i class="fas fa-envelope text-primary"></i> <!-- Icône Gmail (enveloppe) -->
                            </span>
                            <input type="email" class="form-control newsletter-input" placeholder="Votre adresse email" required>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary newsletter-btn w-100" style="font-size: 18px; padding: 10px 0;">
                            S'abonner
                        </button>
                    </div>
                    <!-- Case à cocher -->
                    <div class="col-12 mt-3 text-start">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="acceptPolicy" required>
                            <label class="form-check-label" for="acceptPolicy" style="font-size: 15px; color: #555;">
                                J'accepte la Politique de confidentialité</a> et des cookies de NDAR NDIMBAL CONNECT, 
                                et je comprends que je peux me désabonner des newsletters à tout moment.<br>
                                 <a href="Politique de confidentialité " class="text-decoration-underline">J'accepte les conditions légales</a>.
                            </label>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

     <footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <!-- Colonne 1 : Présentation -->
      <div class="col-md-4 mb-4">
        <h5>NDAR NDIMBAL CONNECT</h5>
        <p>Plateforme de mise en relation des GIE de Saint-Louis</p>
      </div>
      <!-- Colonne 2 : Liens rapides centrés avec icônes -->
        <div class="col-md-4 mb-4 text-center">
        <h5>Liens rapides</h5>
        <ul class="list-unstyled d-inline-block text-start">
            <li><a href="about.php" class="text-white d-block"><i class="fas fa-users me-4"></i>Les GIE</a></li>
            <li><a href="catalog.php" class="text-white d-block"><i class="fas fa-th-list me-4"></i>Catalogue</a></li>
            <li><a href="news.php" class="text-white d-block"><i class="fas fa-newspaper me-4"></i>Actualités</a></li>
            <li><a href="contact.php" class="text-white d-block"><i class="fas fa-phone-alt me-4"></i>Contact</a></li>
        </ul>
        </div>
      <!-- Colonne 3 : Réseaux sociaux (accordion) -->
      <div class="col-md-4 mb-4">
        <div class="accordion" id="accordionSocial">
          <div class="accordion-item bg-dark border-0">
            <h2 class="accordion-header" id="headingSocial">
              <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSocial" aria-expanded="false" aria-controls="collapseSocial">
                RETROUVEZ-NOUS SUR
              </button>
            </h2>
            <div id="collapseSocial" class="accordion-collapse collapse" aria-labelledby="headingSocial" data-bs-parent="#accordionSocial">
              <div class="accordion-body">
                <div class="social-icons">
                  <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                  <a href="#" class="text-white me-3"><i class="fab fa-whatsapp"></i></a>
                  <a href="#" class="text-white"><i class="fab fa-tiktok"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr class="border-secondary">
    <p class="text-center mb-0">&copy; 2025 NDAR NDIMBAL CONNECT. Tous droits réservés.</p>
  </div>
</footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Données d'exemple des produits
       let products = [
    {
        id: 1,
        name: "Savon au Karité",
        category: "Cosmétique",
        price: 1500,
        gie: "GIE Ndèye Fatou",
        description: "Savon naturel fabriqué avec du beurre de karité bio",
        contact: "77 123 45 67",
        image: "parfum3.jpg"
    },
    {
        id: 2,
        name: "Bissap en poudre",
        category: "Alimentation",
        price: 2000,
        gie: "GIE Yaay Borom",
        description: "Bissap naturel séché et réduit en poudre",
        contact: "70 987 65 43",
        image: "araw.jpeg"
    },
    {
        id: 3,
        name: "Boubou traditionnel",
        category: "Vetement",
        price: 25000,
        gie: "GIE Femmes Solidaires",
        description: "Boubou cousu main avec tissu wax authentique",
        contact: "76 555 44 33",
        image: "vetement.jpg"
    },
    {
        id: 4,
        name: "Panier en raphia",
        category: "Artisanat",
        price: 8000,
        gie: "GIE Ndèye Fatou",
        description: "Panier tressé à la main en raphia naturel",
        contact: "77 123 45 67",
        image: "artisant2.jpg"
    },
    {
        id: 5,
        name: "Service de couture",
        category: "Services",
        price: 15000,
        gie: "GIE Femmes Solidaires",
        description: "Couture sur mesure pour tenues traditionnelles et modernes",
        contact: "76 555 44 33",
        image: "service.jpg"
    },
    {
        id: 6,
        name: "Parfum De Marque",
        category: "Cosmétique",
        price: 3500,
        gie: "GIE Yaay Borom",
        description: "Huile de coco pure pressée à froid",
        contact: "70 987 65 43",
        image: "parfume1.jpg"
    },
        {
        id: 7,
        name: "Parfum De Marque",
        category: "Cosmétique",
        price: 3500,
        gie: "GIE Yaay Borom",
        description: "Huile de coco pure pressée à froid",
        contact: "70 987 65 43",
        image: "parfume1.jpg"
    },
        {
        id: 8,
        name: "Parfum De Marque",
        category: "Cosmétique",
        price: 3500,
        gie: "GIE Yaay Borom",
        description: "Huile de coco pure pressée à froid",
        contact: "70 987 65 43",
        image: "parfume1.jpg"
    },
        {
        id: 9,
        name: "Parfum De Marque",
        category: "Cosmétique",
        price: 3500,
        gie: "GIE Yaay Borom",
        description: "Huile de coco pure pressée à froid",
        contact: "70 987 65 43",
        image: "parfume1.jpg"
    }
];


        let filteredProducts = [...products];
 // Mise à jour de la fonction displayProducts avec bouton "Ajouter au panier"
    function displayProducts(productsToShow) {
    const grid = document.getElementById('productsGrid');
    grid.innerHTML = '';

    productsToShow.forEach(product => {
        const productCard = `
            <div class="col-lg-4 col-md-6">
                <div class="card product-card h-100">
                    <div class="product-image p-2">
                        <img src="images/${product.image}" alt="${product.name}" class="img-fluid rounded" style="height: 180px; object-fit: cover; width: 100%;">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="card-title mb-0">${product.name}</h5>
                            <span class="category-badge">${product.category}</span>
                        </div>
                        <div class="gie-info">
                            <small><i class="fas fa-users me-2" aria-hidden="true"></i>${product.gie}</small>
                        </div>
                        <p class="card-text text-muted">${product.description}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price-tag">${product.price.toLocaleString()} FCFA</span>
                            <form method="post" action="ajouter_panier.php" class="m-0">
                                <input type="hidden" name="product_id" value="${product.id}">
                                <input type="hidden" name="product_name" value="${product.name}">
                                <input type="hidden" name="product_price" value="${product.price}">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i>Ajouter au panier
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        `;
        grid.innerHTML += productCard;
    });

    if (productsToShow.length === 0) {
        grid.innerHTML = `
            <div class="col-12 text-center py-5">
                <i class="fas fa-search fa-3x text-muted mb-3" aria-hidden="true"></i>
                <h4 class="text-muted">Aucun produit trouvé</h4>
                <p class="text-muted">Essayez de modifier vos critères de recherche</p>
            </div>
        `;
    }
}

        // Filtrer les produits
        function applyFilters() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const categoryFilter = document.getElementById('categoryFilter').value;
            const gieFilter = document.getElementById('gieFilter').value;

            filteredProducts = products.filter(product => {
                const matchesSearch = product.name.toLowerCase().includes(searchTerm) || 
                                    product.description.toLowerCase().includes(searchTerm);
                const matchesCategory = !categoryFilter || product.category === categoryFilter;
                const matchesGie = !gieFilter || product.gie === gieFilter;

                return matchesSearch && matchesCategory && matchesGie;
            });

            displayProducts(filteredProducts);
        }

        // Recherche en temps réel
        document.getElementById('searchInput').addEventListener('input', applyFilters);

        // Ajouter un nouveau produit
        function addProduct() {
            const form = document.getElementById('productForm');
            const formData = new FormData(form);

            const newProduct = {
                id: products.length + 1,
                name: document.getElementById('productName').value,
                category: document.getElementById('productCategory').value,
                price: parseInt(document.getElementById('productPrice').value),
                gie: document.getElementById('productGie').value,
                description: document.getElementById('productDescription').value,
                contact: document.getElementById('productContact').value,
                image: getCategoryIcon(document.getElementById('productCategory').value)
            };

            // Validation
            if (!newProduct.name || !newProduct.category || !newProduct.price || !newProduct.gie) {
                alert('Veuillez remplir tous les champs obligatoires (*)');
                return;
            }

            if (isNaN(newProduct.price) || newProduct.price <= 0) {
                alert('Veuillez entrer un prix valide');
                return;
            }

            products.push(newProduct);
            applyFilters();
            
            // Fermer le modal et réinitialiser le formulaire
            const modal = bootstrap.Modal.getInstance(document.getElementById('addProductModal'));
            modal.hide();
            form.reset();

            alert('Produit ajouté avec succès !');
        }

        // Obtenir l'icône selon la catégorie
        function getCategoryIcon(category) {
            const icons = {
                'Artisanat': 'fas fa-hammer',
                'Alimentation': 'fas fa-apple-alt',
                'Textile': 'fas fa-tshirt',
                'Cosmétique': 'fas fa-spa',
                'Services': 'fas fa-handshake'
            };
            return icons[category] || 'fas fa-box';
        }

        // Contacter le GIE
        function contactGie(phone, productName) {
            const message = `Bonjour, je suis intéressé(e) par le produit: ${productName}`;
            const whatsappUrl = `https://wa.me/221${phone.replace(/\s/g, '')}?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        }

        // Initialiser l'affichage
        document.addEventListener('DOMContentLoaded', function() {
            displayProducts(products);
            
            // Gestion du menu mobile
            document.querySelector('.mobile-menu').addEventListener('click', function() {
                document.querySelector('nav ul').style.display = 
                    document.querySelector('nav ul').style.display === 'flex' ? 'none' : 'flex';
            });
        });
    </script>
</body>
</html>
