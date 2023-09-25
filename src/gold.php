<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bronze Pack</title>

    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/ce6abbadbc.js" crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- animate CSS -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <script
        src="https://www.paypal.com/sdk/js?client-id=AZCYK5R6Dj7v4YKke3_vm9gTMk5nnRZNCOTNmw35RfqxRzaaTlECWw5qdeY-0UhuEhrV6Af4HkkB-w4h&currency=EUR&components=messages"
        data-namespace="PayPalSDK">
    </script>

</head>

<body>

    <header>
        <a href="../index.php"><img src="../img/SKF_Logo.png" alt="logo SKF"></a>

        <nav class="navbar">
            <ul>
                <li><a id="section1" href="../index.php">Qui sommes nous ?</a></li> 
                <li><a id="section2" href="../index.php">Nos Engagements</a></li> 
                <li><a id="section3" href="../index.php">Formations</a></li>
            </ul>
        </nav>

        <i id="menu-btn" class="fa-solid fa-bars fa-xl"></i>
    </header>

    <main class="main-gold">

        <div class="icon-gold">
            <h1>Pack Gold</h1>
            <i class="fa-solid fa-star fa-2xl"></i>
        </div>

            <div class="container-price">
                <div class="gold">
                    <i class="fa-solid fa-star fa-2xl"></i>
                    <p class="avant">Formation Trading <br> + Copy Trading <br> + Passage Prop Firm et suivi</p>
                    <p>Notre société vous accompagnera et vous aidera à réaliser un challenge de Prop Firm à 10.000$ et vous donne un suivi régulier pour pouvoir dégager des revenus sur le long terme.</p>
                    
                    <strong>1799€</strong>

                    <div id="smart-button-container">
                            <div style="text-align: center;">
                                <div id="paypal-button-container"></div>
                            </div>
                            </div>
                        <script src="https://www.paypal.com/sdk/js?client-id=AZCYK5R6Dj7v4YKke3_vm9gTMk5nnRZNCOTNmw35RfqxRzaaTlECWw5qdeY-0UhuEhrV6Af4HkkB-w4h&enable-funding=venmo&currency=EUR&disable-funding=credit,card" data-sdk-integration-source="button-factory"></script>
                        <script>
                            function initPayPalButton() {
                            paypal.Buttons({
                                style: {
                                shape: 'pill',
                                color: 'gold',
                                layout: 'vertical',
                                label: 'paypal',
                                
                                },

                                createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{"description":"Formation Trading + Copy Trading + Passage Prop Firm et suivi.","amount":{"currency_code":"EUR","value":1799}}]
                                });
                                },

                                onApprove: function(data, actions) {
                                return actions.order.capture().then(function(orderData) {
                                    
                                    // Full available details
                                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                    // Show a success message within this page, e.g.
                                    const element = document.getElementById('paypal-button-container');
                                    element.innerHTML = '';
                                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                                    // Or go to another URL:  actions.redirect('thank_you.html');
                                    
                                });
                                },

                                onError: function(err) {
                                console.log(err);
                                }
                            }).render('#paypal-button-container');
                            }
                            initPayPalButton();
                        </script>

                        <div
                            data-pp-message
                            data-pp-style-layout="text"
                            data-pp-style-logo-type="inline"
                            data-pp-style-text-color="white"
                            data-pp-amount="1799">
                        </div>

                </div>
            </div>
    </main>

    <footer>

        <div class="footer-container">

            <div class="footer-section slogan">
                <img src="../img/SKF_Logo.png" alt="">
                <p>Spécialisez-vous sur le marché des changes et <span>atteignez vos ovjectifs à votre rythme</span>.</p>
            </div>

            <div class="footer-section entreprise">
                <h4>Entreprise</h4>
                <a href="#about">Qui Sommes Nous ?</a>
                <a href="#about">Nos Engagements</a>
            </div>

            <div class="footer-section formation">
                <h4>Formations</h4>
                <a href="https://raisefx.com/">Pack Bronze</a>
                <a href="silver.php">Pack Silver</a>
                <a href="gold.php">Pack Gold</a>
                <a href="elite.php">Pack Bot</a>
            </div>

            <div class="footer-section partenaire">
                <h4>Partenaires</h4>
                <a href="https://raisefx.com/"><img src="../img/raise.webp" alt=""></a>
            </div>

            <div class="footer-section contact">
                <h4>Nous Contacter</h4>
                <a href="tel:+"><i class="fa-solid fa-phone"></i> 07.67.62.15.24</a>
                <a href="mailto:kachard15@gmail.com"></a>
            </div>

            <div class="footer-section reseau">
                <h4>Réseaux Sociaux</h4>
                <a href="https://instagram.com/achardk?r=nametag"><i class="fa-brands fa-instagram"></i> Kevin.instagram</a>
            </div>
            
        </div>

    </footer>

    <div class="sous-footer">
        <p>Développer par Ibrahim Zaougui. <br> Tous droits réservés.
        </p>
    </div>

    <!-- javascript -->
    <script src="../js/script.js"></script>
</body>
</html>