<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDAR NIMBAL CONNECT - Nouveautés</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #e91e63;
            --secondary-color: #ff9800;
            --success-color: #4caf50;
            --info-color: #2196f3;
            --dark-color: #343a40;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Header Styles */
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

        /* News Header */
        .news-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://via.placeholder.com/1920x600') center/cover no-repeat;
            color: white;
            padding: 5rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        /* News Cards */
        .news-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .news-card:hover {
            transform: translateY(-10px);
        }

        .news-img {
            height: 200px;
            object-fit: cover;
        }

        .news-date {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--primary-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 5px;
            font-size: 0.8rem;
        }

        .news-category {
            display: inline-block;
            background: var(--secondary-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 0.5rem;
        }

        /* Events Section */
        .events-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 3rem 0;
            margin: 3rem 0;
            color: white;
        }

        .event-card {
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            backdrop-filter: blur(5px);
        }

        .event-date {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--secondary-color);
        }

        /* Newsletter */
        .newsletter {
            background: var(--dark-color);
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }

        .newsletter .form-control {
            border-radius: 30px;
            padding: 0.8rem 1.5rem;
        }

        .newsletter .btn {
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
                        <li><a href="catalog.php">Catalogue</a></li>
                        <li class="active"><a href="news.php">Nouveautés</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="mobile-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="news-header">
        <div class="container">
            <h1><i class="fas fa-newspaper me-3"></i>Nouveautés</h1>
            <p class="lead">Découvrez les dernières actualités, produits et événements des GIE de Saint-Louis</p>
        </div>
    </section>

    <div class="container">
        <!-- Actualités -->
        <section class="mb-5">
            <h2 class="mb-4"><i class="fas fa-bullhorn me-3 text-primary"></i>Dernières Actualités</h2>
            <div class="row">
                <!-- Article 1 -->
                <div class="col-md-4">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top news-img" alt="Formation GIE">
                            <span class="news-date">15 Juin 2023</span>
                        </div>
                        <div class="card-body">
                            <span class="news-category">Formation</span>
                            <h5 class="card-title">Formation en gestion pour les GIE</h5>
                            <p class="card-text">Une session de formation en gestion financière organisée par la chambre de commerce pour les membres des GIE.</p>
                            <a href="#" class="btn btn-sm btn-primary">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="col-md-4">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top news-img" alt="Nouveau marché">
                            <span class="news-date">10 Juin 2023</span>
                        </div>
                        <div class="card-body">
                            <span class="news-category">Événement</span>
                            <h5 class="card-title">Ouverture d'un nouveau marché dédié aux GIE</h5>
                            <p class="card-text">La mairie inaugure un espace de vente réservé aux produits des groupements féminins chaque samedi.</p>
                            <a href="#" class="btn btn-sm btn-primary">Lire la suite</a>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="col-md-4">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top news-img" alt="Partenariat">
                            <span class="news-date">5 Juin 2023</span>
                        </div>
                        <div class="card-body">
                            <span class="news-category">Partenariat</span>
                            <h5 class="card-title">Partenariat avec une marque internationale</h5>
                            <p class="card-text">Le GIE Yaay Borom signe un contrat d'exportation de ses produits cosmétiques vers l'Europe.</p>
                            <a href="#" class="btn btn-sm btn-primary">Lire la suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nouveaux Produits -->
        <section class="mb-5">
            <h2 class="mb-4"><i class="fas fa-star me-3 text-warning"></i>Nouveaux Produits</h2>
            <div class="row">
                <!-- Produit 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top news-img" alt="Nouveau produit">
                            <span class="news-date">Nouveau</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Crème visage au Neem</h5>
                            <p class="card-text text-muted">GIE Femmes Solidaires</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">5 000 FCFA</span>
                                <button class="btn btn-sm btn-outline-primary">Voir</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top news-img" alt="Nouveau produit">
                            <span class="news-date">Nouveau</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sac en cuir recyclé</h5>
                            <p class="card-text text-muted">GIE Ndèye Fatou</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">12 000 FCFA</span>
                                <button class="btn btn-sm btn-outline-primary">Voir</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top news-img" alt="Nouveau produit">
                            <span class="news-date">Nouveau</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Confiture de mangue bio</h5>
                            <p class="card-text text-muted">GIE Yaay Borom</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">3 500 FCFA</span>
                                <button class="btn btn-sm btn-outline-primary">Voir</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produit 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card news-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x200" class="card-img-top news-img" alt="Nouveau produit">
                            <span class="news-date">Nouveau</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tissage traditionnel</h5>
                            <p class="card-text text-muted">GIE Sénégal Authentique</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">18 000 FCFA</span>
                                <button class="btn btn-sm btn-outline-primary">Voir</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Événements à venir -->
    <section class="events-section">
        <div class="container">
            <h2 class="text-center mb-5"><i class="fas fa-calendar-alt me-3"></i>Événements à Venir</h2>
            <div class="row">
                <!-- Événement 1 -->
                <div class="col-md-4">
                    <div class="event-card">
                        <div class="event-date mb-2">
                            <i class="fas fa-calendar-day me-2"></i>25 Juin 2023
                        </div>
                        <h4>Foire artisanale</h4>
                        <p>Grande exposition-vente des produits artisanaux des GIE au centre culturel.</p>
                        <a href="#" class="btn btn-light btn-sm">Plus d'infos</a>
                    </div>
                </div>

                <!-- Événement 2 -->
                <div class="col-md-4">
                    <div class="event-card">
                        <div class="event-date mb-2">
                            <i class="fas fa-calendar-day me-2"></i>30 Juin 2023
                        </div>
                        <h4>Atelier de formation</h4>
                        <p>Formation en marketing digital pour mieux vendre vos produits en ligne.</p>
                        <a href="#" class="btn btn-light btn-sm">S'inscrire</a>
                    </div>
                </div>

                <!-- Événement 3 -->
                <div class="col-md-4">
                    <div class="event-card">
                        <div class="event-date mb-2">
                            <i class="fas fa-calendar-day me-2"></i>5 Juillet 2023
                        </div>
                        <h4>Rencontre partenaires</h4>
                        <p>Opportunité de rencontrer des acheteurs potentiels et partenaires commerciaux.</p>
                        <a href="#" class="btn btn-light btn-sm">Participer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Témoignages -->
        <section class="my-5">
            <h2 class="mb-4 text-center"><i class="fas fa-quote-left me-3 text-primary"></i>Ils parlent de nous</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card news-card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="https://via.placeholder.com/60" class="rounded-circle me-3" alt="Témoignage">
                                <div>
                                    <h5 class="mb-0">Aminata Diop</h5>
                                    <small class="text-muted">Présidente GIE Yaay Borom</small>
                                </div>
                            </div>
                            <p class="card-text">"Grâce à la plateforme, nous avons pu trouver de nouveaux clients pour nos produits cosmétiques. La visibilité offerte est exceptionnelle."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card news-card h-100">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="https://via.placeholder.com/60" class="rounded-circle me-3" alt="Témoignage">
                                <div>
                                    <h5 class="mb-0">Marième Ndiaye</h5>
                                    <small class="text-muted">Client régulière</small>
                                </div>
                            </div>
                            <p class="card-text">"J'adore acheter directement auprès des GIE. Les produits sont de qualité et je sais que je contribue au développement local."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3><i class="fas fa-envelope me-3"></i>Restez informés</h3>
                    <p class="mb-4">Abonnez-vous à notre newsletter pour recevoir les dernières nouveautés directement dans votre boîte mail.</p>
                    <form class="row g-2 justify-content-center">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Votre adresse email">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">S'abonner</button>
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
                    <h5>NDAR NIMBAL CONNECT</h5>
                    <p>Plateforme de mise en relation des GIE de Saint-Louis</p>
                </div>
                <div class="col-md-4">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Mentions légales</a></li>
                        <li><a href="#" class="text-white">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-white">Conditions d'utilisation</a></li>
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
        // Gestion du menu mobile
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.querySelector('.mobile-menu');
            const navMenu = document.querySelector('nav ul');

            mobileMenuBtn.addEventListener('click', function() {
                const isDisplayed = navMenu.style.display === 'flex';
                navMenu.style.display = isDisplayed ? 'none' : 'flex';
            });

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
