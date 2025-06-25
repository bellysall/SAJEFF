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
            background-color: #f8f9fa;
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
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <h1>NDAR NIMBAL CONNECT</h1>
                    <p>Plateforme des GIE de Saint-Louis</p>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about.php">Les GIE</a></li>
                        <li class="active"><a href="catalogue.php">Catalogue</a></li>
                        <li><a href="news.php">Nouveautés</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="mobile-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </nav>
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
     <!-- Panier Form -->
    <form method="post" action="ajouter_panier.php">
        <input type="hidden" name="gie" value="<?= $gie['nom'] ?>">
        <button type="submit" class="btn btn-success mt-2 w-100"><i class="fas fa-cart-plus me-2"></i>Ajouter au panier</button>
    </form>

     <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>NDAR NIMBAL CONNECT</h5>
                    <p>Plateforme de mise en relation des GIE de Saint-Louis</p>
                </div>
                <div class="col-md-4">
                    <h5>Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="text-white">Les GIE</a></li>
                        <li><a href="catalogue.php" class="text-white">Catalogue</a></li>
                        <li><a href="news.php" class="text-white">Actualités</a></li>
                        <li><a href="contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Réseaux sociaux</h5>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="text-center mb-0">&copy; 2025 NDAR NIMBAL CONNECT. Tous droits réservés.</p>
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
                image: "fas fa-soap"
            },
            {
                id: 2,
                name: "Bissap en poudre",
                category: "Alimentation",
                price: 2000,
                gie: "GIE Yaay Borom",
                description: "Bissap naturel séché et réduit en poudre",
                contact: "70 987 65 43",
                image: "fas fa-leaf"
            },
            {
                id: 3,
                name: "Boubou traditionnel",
                category: "Textile",
                price: 25000,
                gie: "GIE Femmes Solidaires",
                description: "Boubou cousu main avec tissus wax authentique",
                contact: "76 555 44 33",
                image: "fas fa-tshirt"
            },
            {
                id: 4,
                name: "Panier en raphia",
                category: "Artisanat",
                price: 8000,
                gie: "GIE Ndèye Fatou",
                description: "Panier tressé à la main en raphia naturel",
                contact: "77 123 45 67",
                image: "fas fa-shopping-basket"
            },
            {
                id: 5,
                name: "Service de couture",
                category: "Services",
                price: 15000,
                gie: "GIE Femmes Solidaires",
                description: "Couture sur mesure pour vêtements traditionnels et modernes",
                contact: "76 555 44 33",
                image: "fas fa-cut"
            },
            {
                id: 6,
                name: "Huile de coco",
                category: "Cosmétique",
                price: 3500,
                gie: "GIE Yaay Borom",
                description: "Huile de coco pure pressée à froid",
                contact: "70 987 65 43",
                image: "fas fa-oil-can"
            }
        ];

        let filteredProducts = [...products];

        // Afficher les produits
        function displayProducts(productsToShow) {
            const grid = document.getElementById('productsGrid');
            grid.innerHTML = '';

            productsToShow.forEach(product => {
                const productCard = `
                    <div class="col-lg-4 col-md-6">
                        <div class="card product-card h-100">
                            <div class="product-image">
                                <i class="${product.image}" aria-hidden="true"></i>
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
                                    <button class="btn btn-sm contact-btn text-white" onclick="contactGie('${product.contact}', '${product.name}')">
                                        <i class="fas fa-phone me-1" aria-hidden="true"></i>Contacter
                                    </button>
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
