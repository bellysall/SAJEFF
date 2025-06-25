<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDAR NIMBAL CONNECT - Contact</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #e91e63;
            --secondary-color: #ff9800;
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

        /* Contact Header */
        .contact-header {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://via.placeholder.com/1920x600') center/cover no-repeat;
            color: white;
            padding: 5rem 0;
            text-align: center;
            margin-bottom: 3rem;
        }

        /* Contact Cards */
        .contact-card {
            border: none;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            height: 100%;
            background: white;
        }

        .contact-card:hover {
            transform: translateY(-5px);
        }

        .contact-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        /* Contact Form */
        .contact-form {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .form-control {
            border-radius: 5px;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
        }

        .btn-primary {
            background: var(--primary-color);
            border-color: var(--primary-color);
            padding: 0.8rem 2rem;
            border-radius: 5px;
            font-weight: 500;
        }

        .btn-primary:hover {
            background: #c2185b;
            border-color: #c2185b;
        }

        /* Map */
        .map-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }

        /* FAQ */
        .accordion-button:not(.collapsed) {
            background-color: rgba(233, 30, 99, 0.1);
            color: var(--primary-color);
        }

        .accordion-button:focus {
            box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25);
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
            
            .contact-header {
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
                        <li><a href="news.php">Nouveautés</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                    <div class="mobile-menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="contact-header">
        <div class="container">
            <h1><i class="fas fa-envelope me-3"></i>Contactez-nous</h1>
            <p class="lead">Nous sommes à votre écoute pour toute question ou collaboration</p>
        </div>
    </section>

    <div class="container">
        <div class="row mb-5">
            <!-- Contact Card 1 -->
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Adresse</h4>
                    <p>123 Avenue des GIE<br>Saint-Louis, Sénégal</p>
                </div>
            </div>

            <!-- Contact Card 2 -->
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4>Téléphone</h4>
                    <p>+221 33 123 45 67<br>Lun-Ven: 8h-18h</p>
                    <a href="tel:+221331234567" class="btn btn-outline-primary">Appeler</a>
                </div>
            </div>

            <!-- Contact Card 3 -->
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Email</h4>
                    <p>contact@ndarnimbal.sn<br>support@ndarnimbal.sn</p>
                    <a href="mailto:contact@ndarnimbal.sn" class="btn btn-outline-primary">Envoyer un email</a>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <!-- Contact Form -->
            <div class="col-lg-7 mb-4">
                <div class="contact-form">
                    <h3 class="mb-4"><i class="fas fa-paper-plane me-2 text-primary"></i>Envoyez-nous un message</h3>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nom complet *</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Sujet *</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane me-2"></i>Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Map -->
            <div class="col-lg-5 mb-4">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.227227944492!2d-16.48968292468611!3d16.02458728558539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1137fef9e1545%3A0x4a1a8a0f8a3e3b1!2sSaint-Louis%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2sfr!4v1686754323456!5m2!1sfr!2sfr" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-4"><i class="fas fa-question-circle me-2 text-primary"></i>Questions fréquentes</h3>
                <div class="accordion" id="faqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Comment rejoindre un GIE sur la plateforme ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Pour rejoindre un GIE, vous pouvez nous contacter via le formulaire ci-dessus ou vous rendre directement à notre bureau pendant les heures d'ouverture. Notre équipe vous guidera à travers le processus d'inscription.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Quels sont les horaires d'ouverture ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Notre bureau est ouvert du lundi au vendredi de 8h à 18h et le samedi de 9h à 13h. Vous pouvez également nous contacter par email à tout moment.
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Comment commander des produits ?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Vous pouvez commander directement via notre catalogue en ligne ou nous contacter par téléphone/whatsapp au +221 77 123 45 67. Nous organisons également des marchés hebdomadaires où vous pouvez acheter directement.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="mb-4"><i class="fas fa-hashtag me-2 text-primary"></i>Suivez-nous sur les réseaux sociaux</h3>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="btn btn-outline-primary btn-lg rounded-circle"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-lg rounded-circle"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-lg rounded-circle"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-lg rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-lg rounded-circle"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

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
                    <h5>Newsletter</h5>
                    <p>Abonnez-vous pour recevoir nos actualités</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Votre email">
                        <button class="btn btn-primary" type="button">S'abonner</button>
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

            // Gestion du formulaire de contact
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Ici vous pouvez ajouter le code pour envoyer le formulaire
                    alert('Merci pour votre message! Nous vous contacterons bientôt.');
                    contactForm.reset();
                });
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
