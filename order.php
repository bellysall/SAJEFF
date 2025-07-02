<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Même head que index.php -->
</head>
<body>
    <header>
        <!-- Même header que index.php -->
    </header>

    <main>
        <section class="order-form">
            <div class="container">
                <h1>Demande d'information ou de commande</h1>
                <p>Remplissez ce formulaire pour demander des informations ou passer une commande</p>
                
                <form id="orderForm">
                    <div class="form-group">
                        <label for="name">Nom complet*</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Téléphone*</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="gie">GIE concerné*</label>
                        <select id="gie" name="gie" required>
                            <option value="">Sélectionnez un GIE</option>
                            <option value="gie1">GIE 1</option>
                            <option value="gie2">GIE 2</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="product">Produit concerné (si commande)</label>
                        <select id="product" name="product">
                            <option value="">Sélectionnez un produit</option>
                            <option value="product1">Produit 1</option>
                            <option value="product2">Produit 2</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="quantity">Quantité</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message*</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn primary">Envoyer la demande</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <!-- Même footer que index.php -->
    </footer>

    <script src="js/form-validation.js"></script>
    <script src="js/main.js"></script>
</body>
</html>