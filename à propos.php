<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDAR NDIMBAL CONNECT - Les GIE</title>
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

        /* GIE Header */
        .gie-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://via.placeholder.com/1920x600') center/cover no-repeat;
            color: white;
            padding: 5rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        /* GIE Cards */
        .gie-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .gie-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .gie-img {
            height: 200px;
            object-fit: cover;
        }

        .gie-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .gie-stats {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #eee;
            padding-top: 1rem;
            margin-top: 1rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-weight: bold;
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .stat-label {
            font-size: 0.8rem;
            color: #666;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        /* Testimonials */
        .testimonial-card {
            border-left: 4px solid var(--primary-color);
            background: white;
            padding: 1.5rem;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
        }

        /* How It Works */
        .step-card {
            text-align: center;
            padding: 2rem 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: 0 auto 1rem;
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
            
            .gie-header {
                padding: 3rem 0;
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
                        <h1 style="margin-bottom: 0.3rem;">NDAR NDIMBAL CONNECT</h1>
                        <p style="margin-bottom: 0;">Plateforme des GIE de Saint-Louis</p>
                  </div>
                </div>
                <nav>
                     <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about.php">Les GIE</a></li>
                        <li class="active"><a href="catalog.php">Catalogue</a></li>
                        <li><a href="news.php">Nouveautés</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="panier.php">Mon Panier</a></li>

                    </ul>
                    <div class="mobile-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gie-header">
        <div class="container">
            <h1><i class="fas fa-users me-3"></i>Les Groupements d'Intérêt Économique</h1>
            <p class="lead">Découvrez les GIE membres de notre plateforme et leurs activités</p>
        </div>
    </section>

    <div class="container">
        <!-- About GIE Section -->
        <section class="mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Qu'est-ce qu'un GIE ?</h2>
                    <p>Un Groupement d'Intérêt Économique (GIE) est une structure qui permet à des professionnels indépendants ou à des petites entreprises de mutualiser leurs moyens pour développer leurs activités tout en conservant leur autonomie.</p>
                    <p>À Saint-Louis, les GIE jouent un rôle crucial dans l'autonomisation des femmes et le développement économique local. Notre plateforme réunit les principaux GIE féminins de la région.</p>
                    <a href="#" class="btn btn-primary">Comment adhérer ?</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Femmes GIE" class="img-fluid rounded">
                </div>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="filter-section mb-5">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" id="searchGie" class="form-control" placeholder="Rechercher un GIE...">
                </div>
                <div class="col-md-4">
                    <select id="activityFilter" class="form-select">
                        <option value="">Tous les secteurs</option>
                        <option value="Artisanat">Artisanat</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Textile">Textile</option>
                        <option value="Cosmétique">Cosmétique</option>
                        <option value="Services">Services</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select id="locationFilter" class="form-select">
                        <option value="">Tous les quartiers</option>
                        <option value="Nord">Nord</option>
                        <option value="Sud">Sud</option>
                        <option value="Centre">Centre</option>
                        <option value="Gandiol">Gandiol</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- GIE List -->
        <section class="mb-5">
            <h2 class="mb-4"><i class="fas fa-list me-3 text-primary"></i>Nos GIE Membres</h2>
            <div class="row" id="gieContainer">
                <!-- GIE 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card gie-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top gie-img" alt="GIE Ndèye Fatou">
                            <span class="gie-badge">25 membres</span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">GIE Ndèye Fatou</h4>
                            <p class="text-muted"><i class="fas fa-map-marker-alt me-2 text-primary"></i>Quartier Nord, Saint-Louis</p>
                            <p class="card-text">Spécialisé dans la transformation des produits agricoles et la fabrication de cosmétiques naturels.</p>
                            <div class="gie-stats">
                                <div class="stat-item">
                                    <div class="stat-number">12</div>
                                    <div class="stat-label">Produits</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">5</div>
                                    <div class="stat-label">Années</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">3</div>
                                    <div class="stat-label">Prix</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="gie-detail.php" class="btn btn-outline-primary w-100">Voir le profil</a>
                        </div>
                    </div>
                </div>

                <!-- GIE 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card gie-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top gie-img" alt="GIE Yaay Borom">
                            <span class="gie-badge">18 membres</span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">GIE Yaay Borom</h4>
                            <p class="text-muted"><i class="fas fa-map-marker-alt me-2 text-primary"></i>Quartier Sud, Saint-Louis</p>
                            <p class="card-text">Expert en couture traditionnelle et fabrication de vêtements sur mesure avec des tissus locaux.</p>
                            <div class="gie-stats">
                                <div class="stat-item">
                                    <div class="stat-number">8</div>
                                    <div class="stat-label">Produits</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">3</div>
                                    <div class="stat-label">Années</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">2</div>
                                    <div class="stat-label">Prix</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="gie-detail.php" class="btn btn-outline-primary w-100">Voir le profil</a>
                        </div>
                    </div>
                </div>

                <!-- GIE 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card gie-card h-100">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top gie-img" alt="GIE Femmes Solidaires">
                            <span class="gie-badge">30 membres</span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">GIE Femmes Solidaires</h4>
                            <p class="text-muted"><i class="fas fa-map-marker-alt me-2 text-primary"></i>Quartier Centre, Saint-Louis</p>
                            <p class="card-text">Artisanat local et fabrication d'objets décoratifs à partir de matériaux recyclés.</p>
                            <div class="gie-stats">
                                <div class="stat-item">
                                    <div class="stat-number">15</div>
                                    <div class="stat-label">Produits</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">7</div>
                                    <div class="stat-label">Années</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number">5</div>
                                    <div class="stat-label">Prix</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <a href="gie-detail.php" class="btn btn-outline-primary w-100">Voir le profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works -->
        <section class="mb-5">
            <h2 class="text-center mb-5"><i class="fas fa-question-circle me-3 text-primary"></i>Comment rejoindre un GIE ?</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <h4>Contactez-nous</h4>
                        <p>Prenez contact avec notre équipe pour exprimer votre intérêt et discuter des possibilités.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <h4>Rencontre</h4>
                        <p>Nous organisons une rencontre avec les responsables des GIE correspondant à votre profil.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <h4>Adhésion</h4>
                        <p>Après validation, vous signez la charte du GIE et commencez votre activité.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="mb-5">
            <h2 class="text-center mb-5"><i class="fas fa-quote-left me-3 text-primary"></i>Témoignages</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/60" class="rounded-circle me-3" alt="Témoignage">
                            <div>
                                <h5 class="mb-0">Aminata Diop</h5>
                                <small class="text-muted">Membre du GIE Yaay Borom</small>
                            </div>
                        </div>
                        <p>"Rejoindre un GIE a transformé ma petite activité de couture en une véritable entreprise. Aujourd'hui, je participe à des expositions nationales et j'ai multiplié mes revenus par 5."</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="d-flex mb-3">
                            <img src="https://via.placeholder.com/60" class="rounded-circle me-3" alt="Témoignage">
                            <div>
                                <h5 class="mb-0">Marième Ndiaye</h5>
                                <small class="text-muted">Présidente du GIE Ndèye Fatou</small>
                            </div>
                        </div>
                        <p>"La plateforme NDAR NDIMBAL CONNECT nous a permis de trouver de nouveaux marchés pour nos produits. La mise en réseau est essentielle pour développer nos activités."</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

   

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>NDAR NDIMBAL CONNECT</h5>
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
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Saint-Louis, Sénégal</li>
                        <li><i class="fas fa-phone-alt me-2"></i> +221 33 123 45 67</li>
                        <li><i class="fas fa-envelope me-2"></i> contact@ndarnimbal.sn</li>
                    </ul>
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

            // Gestion des filtres (exemple basique)
            const searchInput = document.getElementById('searchGie');
            const activityFilter = document.getElementById('activityFilter');
            const locationFilter = document.getElementById('locationFilter');

            [searchInput, activityFilter, locationFilter].forEach(element => {
                element.addEventListener('change', filterGies);
            });

            function filterGies() {
                const searchTerm = searchInput.value.toLowerCase();
                const activity = activityFilter.value;
                const location = locationFilter.value;

                // Ici vous implémenteriez la logique de filtrage réelle
                console.log('Filtrage avec:', {searchTerm, activity, location});
                // Dans une vraie implémentation, vous filtreriez les GIE affichés
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
