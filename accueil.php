

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
    <header>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
               <div class="logo d-flex align-items-center gap-5" style="margin-top: -30px;">
                        <img src="images/logo.png" alt="Logo NDAR NDIMBAL CONNECT" style="height: 90px;">
                  <div style="margin-bottom: -10px;">
                        <!--<h1 style="margin-bottom: 0.3rem;">NDAR NDIMBAL CONNECT</h1>
                        <p style="margin-bottom: 0;">Plateforme des GIE de Saint-Louis</p>-->
                  </div>
                </div>

                <nav>
                     <ul>
                        <li><a href="accueil.php">Accueil</a></li>
                        <li><a href="about.php">Les GIE</a></li>
                        <li class="active"><a href="catalog.php">Catalogue</a></li>
                        <li><a href="news.php">Nouveautés</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="panier.php">Mon Panier</a></li>
                       <!--  <li><a href="login.php">Compte Admin</a></li>-->

                    </ul>
                    <div class="mobile-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">Plateforme des GIE de Saint-Louis</h1>
            <p class="hero-subtitle">Connectez-vous avec les groupements féminins et découvrez leurs produits artisanaux</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="catalog.php" class="btn btn-primary btn-lg">Explorer le catalogue</a>
                <a href="about.php" class="btn btn-outline-light btn-lg">Découvrir les GIE</a>
            </div>
        </div>
    </section>

    <div class="container">
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

        <!-- Statistics Section -->
        <section class="stats-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="25">0</div>
                            <div class="stat-label">GIE membres</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="150">0</div>
                            <div class="stat-label">Femmes entrepreneures</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="300">0</div>
                            <div class="stat-label">Produits artisanaux</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <div class="stat-number" data-count="5">0</div>
                            <div class="stat-label">Secteurs d'activité</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Products -->
        <section class="mb-5">
            <h2 class="text-center mb-5"><i class="fas fa-star me-3 text-warning"></i>Produits phares</h2>
            <div class="row">
                <!-- Produit 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card product-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top product-img" alt="Savon au karité">
                            <span class="product-badge">Nouveau</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Savon au karité</h5>
                            <p class="card-text text-muted">GIE Ndèye Fatou</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">1 500 FCFA</span>
                                <button class="btn btn-sm btn-outline-primary">Voir</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card product-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top product-img" alt="Boubou traditionnel">
                            <span class="product-badge">Populaire</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Boubou traditionnel</h5>
                            <p class="card-text text-muted">GIE Yaay Borom</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">25 000 FCFA</span>
                                <button class="btn btn-sm btn-outline-primary">Voir</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card product-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top product-img" alt="Panier en raphia">
                            <span class="product-badge">Meilleure vente</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Panier en raphia</h5>
                            <p class="card-text text-muted">GIE Femmes Solidaires</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">8 000 FCFA</span>
                                <button class="btn btn-sm btn-outline-primary">Voir</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card product-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top product-img" alt="Confiture de mangue">
                            <span class="product-badge">Bio</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Confiture de mangue</h5>
                            <p class="card-text text-muted">GIE Sénégal Authentique</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">3 500 FCFA</span>
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
                    <h3><i class="fas fa-envelope me-3"></i>Abonnez-vous à notre newsletter</h3>
                    <p class="mb-4">Recevez les dernières actualités et offres directement dans votre boîte email</p>
                    <form class="row g-2 justify-content-center">
                        <div class="col-md-8">
                            <input type="email" class="form-control newsletter-input" placeholder="Votre adresse email">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary newsletter-btn w-100">S'abonner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>NDAR NDIMBAL CONNECT</h5>
                    <p>Plateforme de mise en relation des GIE de Saint-Louis</p>
                </div>
                <div class="col-md-4">
                    <h5>Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="text-white">Les GIE</a></li>
                        <li><a href="catalog.php" class="text-white">Catalogue</a></li>
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
