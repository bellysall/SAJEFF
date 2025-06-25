document.addEventListener('DOMContentLoaded', function() {
    const orderForm = document.getElementById('orderForm');
    
    if (orderForm) {
        orderForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation simple
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const gie = document.getElementById('gie').value;
            const message = document.getElementById('message').value;
            
            if (!name || !email || !phone || !gie || !message) {
                alert('Veuillez remplir tous les champs obligatoires (*)');
                return;
            }
            
            // Ici, vous pourriez ajouter un appel AJAX pour envoyer le formulaire
            alert('Votre demande a été envoyée avec succès ! Nous vous contacterons bientôt.');
            orderForm.reset();
        });
    }
});