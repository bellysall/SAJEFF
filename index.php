

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDAR NDIMBAL CONNECT - Plateforme des GIE de Saint-Louis</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    

    <style>
        :root {
            --primary-color: #e91e63;
            --secondary-color: #ff9800;
            --success-color: #4caf50;
            --info-color: #2196f3;
            --dark-color: #343a40;
            --light-color: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            background: linear-gradient(to right, #fdfcfb, #e2d1c3); 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            

        }

        /* Header Styles */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
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
        /*Barre de Recherche*/
        .gradient-blue-btn {
          background: linear-gradient(45deg, #007bff, #00c6ff);
          border: none;
        }

        
        .gradient-blue-btn:hover {
            background: linear-gradient(135deg, #0066cc, #004080); /* Plus foncé au survol */
        }
         /*Barre de Recherche*/

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

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
            color: white;
            padding: 8rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        /* Features Section */
        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        /* Statistics Section */
        .stats-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 4rem 0;
            margin: 4rem 0;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.2rem;
        }

        /* Products Section */
        .product-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-img {
            height: 200px;
            object-fit: cover;
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--primary-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        /* Testimonials */
        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--primary-color);
        }

        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
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
            
            .hero-section {
                padding: 5rem 0;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Partie du HEADER avec le champ de recherche + icône panier avec badge) -->
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

<section id="carouselExampleIndicators" class="carousel slide mb-4" data-bs-ride="carousel">
  <!-- Indicateurs -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
  </div>

  <!-- Carrousel -->
  <div id="homeCarousel" class="carousel slide carousel-fade mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="images/seche.jpg" class="d-block w-100" alt="Artisanat local NDAR" style="max-height: 350px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded py-3 px-4">
          <h4 class="text-white mb-2">Poissons Seches</h4>
          <p class="mb-2">es poissons séchés sont des poissons qui ont été soumis à un 
            processus de séchage, généralement pour une conservation prolongée. Ce processus réduit la teneur en eau, empêchant ainsi la détérioration et préservant le poisson. Ils sont souvent utilisés dans diverses cuisines du monde, 
            notamment pour des plats traditionnels ou comme collation. </p>
          <a href="catalog.php" class="btn btn-primary btn-sm">Voir le catalogue</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="images/thiere.jpeg" class="d-block w-100" alt="Femmes engagées" style="max-height: 350px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded py-3 px-4">
          <h4 class="text-white mb-2">Gie De Saint-Louis</h4>
          <p class="mb-2">La théière est un ustensile de cuisine emblématique de la culture sénégalaise. Elle est généralement en métal,
             de forme arrondie, et munie d'un bec verseur et d'une anse</p>
          <a href="about.php" class="btn btn-light btn-sm">Découvrir les GIE</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="images/alimentaires1.jpeg" class="d-block w-100" alt="Produits naturels" style="max-height: 350px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded py-3 px-4">
          <h4 class="text-white mb-2">Les Légumes Frais</h4>
          <p class="mb-2">Un légume est une partie comestible d'une plante potagère, pouvant être une feuille,
             une tige, une racine, un bulbe, ou même un fruit au sens culinaire du terme, qui est consommé pour son apport nutritionnel. Les légumes sont essentiels pour une alimentation saine,
             riches en vitamines, minéraux, et fibres. </p>
          <a href="catalog.php?cat=cosmetique" class="btn btn-success btn-sm">Explorer</a>
        </div>
      </div>

    </div>

    <!-- Contrôles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Suivant</span>
    </button>
  </div>
</section>


<!-- 🗂️ Section Catégories cliquables -->
<section class="container mb-5">
  <h2 class="text-center mb-4">Catégories</h2>
  <div class="row text-center">
    
    <!-- Cosmétiques -->
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="catalog.php?cat=cosmetique" class="text-decoration-none">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <i class="fas fa-spa fa-2x text-primary mb-3"></i>
            <h5 class="card-title">Cosmétiques</h5>
            <p class="card-text text-muted small">Savons, crèmes, huiles naturelles</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Habillement -->
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="catalog.php?cat=habillement" class="text-decoration-none">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <i class="fas fa-tshirt fa-2x text-success mb-3"></i>
            <h5 class="card-title">Habillement</h5>
            <p class="card-text text-muted small">Boubous, tenues traditionnelles</p>
          </div>
        </div>
      </a>
    </div>
    

    <!-- Produits alimentaires -->
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="catalog.php?cat=alimentaire" class="text-decoration-none">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <i class="fas fa-utensils fa-2x text-warning mb-3"></i>
            <h5 class="card-title">Alimentaire</h5>
            <p class="card-text text-muted small">Confitures, céréales locales</p>
          </div>
        </div>
      </a>
    </div>

    <!-- Artisanat -->
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="catalog.php?cat=artisanat" class="text-decoration-none">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body">
            <i class="fas fa-hand-sparkles fa-2x text-danger mb-3"></i>
            <h5 class="card-title">Artisanat</h5>
            <p class="card-text text-muted small">Paniers, accessoires faits main</p>
          </div>
        </div>
      </a>
    </div>

  </div>
</section>
    <div class="container">
       

        <!-- Statistics Section 
        <section class="stats-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="25">25</div>
                            <div class="stat-label">GIE membres</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="150">150</div>
                            <div class="stat-label">Femmes entrepreneures</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="300">300</div>
                            <div class="stat-label">Produits artisanaux</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="5">5</div>
                            <div class="stat-label">Secteurs d'activité</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- Section Produits phares -->
    <section class="mb-5">
        <h2 class="text-center mb-5"><i class="fas fa-star me-3 text-warning"></i>Produits phares</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
    <div class="card product-card h-90">
        <div class="position-relative">
            <img src="images/vetement2.jpg" class="card-img-top product-img" alt="Savon au karité">
            <span class="product-badge">Nouveau</span>
        </div>
        <div class="card-body">
            <h5 class="card-title">Robe Lafaya</h5>
            <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold text-primary">
                    6000 FCFA
                    <i class="fas fa-star text-warning ms-1"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                </span>
                <button class="btn btn-sm btn-outline-primary">Voir</button>
            </div>
        </div>
    </div>
    </div>

            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-90">
                    <div class="position-relative">
                        <img src="images/parfum3.jpg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Parfum</h5>
                        <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">
                        6000 FCFA
                        <i class="fas fa-star text-warning ms-1"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </span>
                    <button class="btn btn-sm btn-outline-primary">Voir</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-90">
                    <div class="position-relative">
                        <img src="images/sauces.jpg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sauce</h5>
                        <p class="card-text text-muted">GIE Yaay Borom</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">
                                3 000 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-90">
                    <div class="position-relative">
                        <img src="images/araw.jpeg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Araw</h5>
                        <p class="card-text text-muted">GIE Yaay Borom</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">
                                3 000 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-90">
                    <div class="position-relative">
                        <img src="images/alimentaires1.jpeg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Légumes Frais</h5>
                        <p class="card-text text-muted">GIE Yaay Borom</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">
                                5 000 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-90">
                    <div class="position-relative">
                        <img src="images/vetement4.jpg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Chemise</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">
                                5 000 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-90">
                    <div class="position-relative">
                        <img src="images/tomate.jpg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tomate</h5>
                        <p class="card-text text-muted">GIE Yaay Borom</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">
                                1 500 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-90">
                    <div class="position-relative">
                        <img src="images/sac.jpg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sac de Classe</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">
                                10 000 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="images/chocolat.jpg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Chocolat</h5>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="fw-bold text-primary">
                                4 000 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="images/sandale.jpg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sandale</h5>
                        <div class="d-flex justify-content-between align-items-center">
                           <span class="fw-bold text-primary">
                                10 000 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="images/parfum2.jpg" class="card-img-top product-img" alt="Boubou traditionnel">
                        <span class="product-badge">Populaire</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Parfum</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">20 000 FCFA</span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6">
                <div class="card product-card h-100">
                    <div class="position-relative">
                        <img src="images/artisant4.jpg" class="card-img-top product-img" alt="Confiture de mangue">
                        <span class="product-badge">Bio</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Artisanat</h5>
                        <p class="card-text text-muted">GIE Sénégal Authentique</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-primary">
                                7 000 FCFA
                                <i class="fas fa-star text-warning ms-1"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </span>
                            <button class="btn btn-sm btn-outline-primary">Voir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
                <a href="catalog.php" class="btn btn-primary">Voir tous les produits</a>
        </div>
        
    </section>

     <!-- Features Section -->
        <section class="mb-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3>Solidarité</h3>
                        <p>Une plateforme qui renforce les liens entre les GIE et les met en relation avec des clients et partenaires.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h3>Visibilité</h3>
                        <p>Offrez une meilleure exposition à vos produits artisanaux et augmentez vos ventes.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Croissance</h3>
                        <p>Accédez à des formations et des opportunités pour développer vos activités.</p>
                    </div>
                </div>
            </div>
        </section>
</div>

            

        <!-- Testimonials -->
        <section class="mb-5">
            <h2 class="text-center mb-5"><i class="fas fa-quote-left me-3 text-primary"></i>Témoignages</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/60" class="testimonial-img" alt="Aminata Diop">
                            <div>
                                <h5 class="mb-0">Aminata Diop</h5>
                                <small class="text-muted">Membre du GIE Yaay Borom</small>
                            </div>
                        </div>
                        <p>"Grâce à la plateforme, nous avons pu trouver de nouveaux clients pour nos produits. La visibilité offerte est exceptionnelle et a transformé notre petite activité en une véritable entreprise."</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/60" class="testimonial-img" alt="Marième Ndiaye">
                            <div>
                                <h5 class="mb-0">Marième Ndiaye</h5>
                                <small class="text-muted">Client fidèle</small>
                            </div>
                        </div>
                        <p>"J'adore acheter directement auprès des GIE. Les produits sont de qualité et je sais que je contribue directement au développement économique des femmes de ma région."</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Last News -->
        <section class="mb-5">
            <h2 class="mb-4"><i class="fas fa-newspaper me-3 text-primary"></i>Dernières actualités</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Nouveau marché">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Événement</span>
                            <h5 class="card-title">Ouverture d'un nouveau marché dédié</h5>
                            <p class="card-text">La mairie inaugure un espace de vente réservé aux produits des groupements féminins chaque samedi.</p>
                            <a href="news.php" class="btn btn-sm btn-outline-primary">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Formation">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Formation</span>
                            <h5 class="card-title">Formation en gestion pour les GIE</h5>
                            <p class="card-text">Session de formation en gestion financière organisée par la chambre de commerce.</p>
                            <a href="news.php" class="btn btn-sm btn-outline-primary">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card h-100">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Partenariat">
                        <div class="card-body">
                            <span class="badge bg-warning mb-2">Partenariat</span>
                            <h5 class="card-title">Nouveau partenariat international</h5>
                            <p class="card-text">Un GIE membre signe un contrat d'exportation vers l'Europe pour ses produits cosmétiques.</p>
                            <a href="news.php" class="btn btn-sm btn-outline-primary">Lire la suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                 <a href="Politique de confidentialité.php " class="text-decoration-underline">J'accepte les conditions légales</a>.
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
        // Gestion du menu mobile
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.querySelector('.mobile-menu');
            const navMenu = document.querySelector('nav ul');

            mobileMenuBtn.addEventListener('click', function() {
                const isDisplayed = navMenu.style.display === 'flex';
                navMenu.style.display = isDisplayed ? 'none' : 'flex';
            });

            // Animation des statistiques
            const statNumbers = document.querySelectorAll('.stat-number');
            
            function animateStats() {
                statNumbers.forEach(stat => {
                    const target = parseInt(stat.getAttribute('data-count'));
                    const duration = 2000; // 2 seconds
                    const step = target / (duration / 16); // 60fps
                    let current = 0;
                    
                    const timer = setInterval(() => {
                        current += step;
                        if (current >= target) {
                            clearInterval(timer);
                            current = target;
                        }
                        stat.textContent = Math.floor(current);
                    }, 16);
                });
            }

            // Détecter quand la section stats est visible
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateStats();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            const statsSection = document.querySelector('.stats-section');
            if (statsSection) {
                observer.observe(statsSection);
            }

            // Fermer le menu quand on clique sur un lien
            document.querySelectorAll('nav a').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        navMenu.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>
