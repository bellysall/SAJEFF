// Menu mobile
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu');
    const navMenu = document.querySelector('nav ul');
    
    mobileMenuBtn.addEventListener('click', function() {
        navMenu.classList.toggle('show');
    });
    
    // Fermer le menu quand on clique sur un lien
    const navLinks = document.querySelectorAll('nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navMenu.classList.remove('show');
        });
    });
    
    // Animation au scroll
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(44, 62, 80, 0.95)';
            header.style.padding = '0.5rem 0';
        } else {
            header.style.background = 'var(--primary-color)';
            header.style.padding = '1rem 0';
        }
    });
    
    // Initialiser la galerie
    initGallery();
    
    // WhatsApp contact
    setupWhatsApp();
});

// Fonction pour initialiser la galerie
function initGallery() {
    // Implémentation de la galerie sera ajoutée dans gallery.js
}

// Fonction pour configurer le contact WhatsApp
function setupWhatsApp() {
    const whatsappBtn = document.querySelector('.whatsapp-btn');
    whatsappBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const phoneNumber = '221XXXXXXXXX'; // Remplacez par le numéro réel
        const message = 'Bonjour, je suis intéressé par vos produits/services sur NDAR NIMBAL CONNECT.';
        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    });
}

// Fonction pour charger les posts Facebook
function loadFacebookPosts() {
    // Le SDK Facebook s'occupe de cela via le widget intégré
}

// Fonction pour charger les posts Instagram
function loadInstagramPosts() {
    // L'iframe intégré s'occupe de cela
}