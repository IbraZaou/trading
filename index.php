<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading</title>
    
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/ce6abbadbc.js" crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- swiper css -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />

    <!-- animate CSS -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

</head>
<body>

    <header>
        <a href="#"><img src="img/SKF_Logo.png" alt="logo SKF"></a>

        <nav class="navbar">
            <ul>
                <li><a id="section1" href="#about">Qui sommes nous ?</a></li> 
                <li><a id="section2" href="#about">Nos Engagements</a></li> 
                <li><a id="section3" href="#price">Formations</a></li>
            </ul>
        </nav>

        <i id="menu-btn" class="fa-solid fa-bars fa-xl"></i>
    </header>

    <main>

        <!-- Banniere start -->

            <section class="banniere">
                    <div class="banniere-container-text">
                        <p>"L'important n'est pas d'avoir raison ou tort, mais de savoir combien d'argent on gagne quand on a raison et combien on perd quand on a tort." <br> <span>George Soros</span></p>
                        <a href="#about"><i class="fa-solid fa-arrow-down fa-xl"></i></a>
                    </div>
            </section>
        
        <!-- Banniere end -->

        <!-- About start -->

            <section id="about">

                <div class="about-text">
                    <h2>SK Forex c'est quoi ?</h2>

                    <p>Nous avons crée cette société dans le but <span>d'accompagner n'importe quel type de personne à se former en trading</span>, mais pas que surtout de pouvoir le rendre accessible à n'importe quelle personne.</p>

                    <p>Aujourd'hui une école de trading coûte cher, la plupart des écoles pour pouvoir se former coûtent <span>10.000€ à 100.000€ l'année</span>. Les formations qu'on trouve <span>en ligne sur internet coûtent souvent 4.000€ - 5.000€</span> pour ne pas avoir spécialement plus de connaissances que l'on pensait.
                    </p>

                    <p>Aujourd'hui nos services ont pour le but de pouvoir toucher n'importe quel individu en fonction de ce qu'il recherche les différents services que l'on a crées seront proposées mais <span>chaque service sera là réellement pour accompagner et apporter une plus-value</span>.</p>
                </div>

                <img src="img/trading-img.jpg" alt="">
            </section>

        <!-- About end-->

        <!-- Engagement start -->
        
            <section class="engagement">

                <div class="engagement-text">
                    <h2>Des engagements à double sens</h2>

                    <p>Nous avons formé des <span>milliers d'apprentis</span> traders aux besoins et personnalités différentes. Cela nous a permis d'élaborer une méthode pédagogique basée sur <span>l'accompagnement, l'expérience pratique et la bienveillance</span>. Nos méthodes on servit à accompagner tous type de personne.</p>

                    <p>Nous ne sommes pas les traders les plus riches, nous ne sommes pas des traders de renom, nous ne voulons pas tout le monde chez nous et nous ne sommes pas des vendeurs de rêves. Le trading n'est pas facile alors si vous voulez réussir il va falloir se former sérieusement.
                    </p>

                </div>

                <img src="img/trading-img.jpg" alt="">
            </section>

        <!-- Engagement end -->

        <!-- Price start -->

            <section id="price">
                
                <h2>Nos Formations</h2>

                <div class="container-price">
                    <div class="bronze">
                        <i class="fa-solid fa-star fa-2xl"></i>
                        <p class="avant">Affilié à Raise FX</p>
                        <p>Afin d'avoir accès aux signaux de trading gratuitement je vous invite à vous rendre chez notre partenaire Raise FX pour devenir affilié.</p>

                        <strong>Gratuit</strong>

                        <a href="https://live.raisefx.com/signup/1vHc0vy0">Raise FX</a>
                    </div>

                    <div class="silver">
                        <i class="fa-solid fa-star fa-2xl"></i>
                        <p class="avant">Formation Trading Classique</p>
                        <p>Je vous apprends à devenir indépendant pour vous les débutants.</p>

                        <strong>49.99€<span> / mois</span></strong>

                        <a href="src/silver.php">Commander</a>
                    
                    </div>

                    <div class="gold">
                        <i class="fa-solid fa-star fa-2xl"></i>
                        <p class="avant" >Formation Trading + Copy Trading + Passage Prop Firm et suivi</p>
                        <p>Notre société vous accompagnera et vous aidera à réaliser un challenge de Prop Firm à 10.000$ et vous donne un suivi régulier pour pouvoir dégager des revenus sur le long terme.</p>
                        
                        <strong>1799€</strong>
                        <a href="src/gold.php">Commander</a>
                    </div>
                </div>

                <div class="elite">
                    <i class="fa-solid fa-robot fa-2xl"></i>
                    <strong>Pack Bot</strong>
                    <p>Sur demande</p>
                    <strong>1799€</strong>
                    <a href="src/elite.php">Commander</a>
                </div>
            </section>
        <!-- Price end -->

        <!-- price mobile starts -->

            <div class="swiper mySwiper">
                <h2>Nos formations</h2>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bronze">
                            <i class="fa-solid fa-star fa-2xl"></i>
                            <br>
                            <br>
                            <strong>Pack Bronze <br> Gratuit</strong>
                            <p>Affilié à Raise FX</p>
                            <p>Afin d'avoir accès aux signaux de trading gratuitement je vous invite à vous rendre chez notre partenaire Raise FX pour devenir affilié.</p>
                            <a href="https://live.raisefx.com/signup/1vHc0vy0">Raise FX</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="silver">
                            <i class="fa-solid fa-star fa-2xl"></i>
                            <strong>Pack Silver <br> 49.99€<span> / mois</span></strong>
                            <p>Formation Trading Classique</p>
                            <p>Je vous apprends à devenir indépendant pour vous les débutants.</p>
                            <a href="src/silver.php">Commander</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="gold">
                            <i class="fa-solid fa-star fa-2xl"></i>
                            <strong>Pack Gold <br> 1799€</strong>
                            <p>Formation Trading + Copy Trading + Passage Prop Firm et suivi</p>
                            <p>Notre société vous accompagnera et vous aidera à réaliser un challenge de Prop Firm à 10.000$ et vous donne un suivi régulier pour pouvoir dégager des revenus sur le long terme.</p>
                            <a href="src/gold.php">Commander</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="elite">
                            <i class="fa-solid fa-robot fa-2xl"></i>
                            <br>
                            <strong>Pack Bot</strong>
                            <br>
                            <strong>1200€</strong>
                            <p>Le Bot Trading ou le Robot Trading est un programme algorithmique permettant d'évaluer automatiquement à votre place les marchés financiers des cryptomonnaies. Ainsi, lorsque les conditions sont réunis, il passera des ordres d'achat ou de vente.</p>
                            <a href="src/elite.php">Commander</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- price mobile ends -->

    </main>

    <footer>

        <div class="footer-container">

            <div class="footer-section slogan">
                <img src="img/SKF_Logo.png" alt="">
                <p>Spécialisez-vous sur le marché des changes et <span>atteignez vos objectifs à votre rythme</span>.</p>
            </div>

            <div class="footer-section entreprise">
                <h4>Entreprise</h4>
                <a href="#about">Qui Sommes Nous ?</a>
                <a href="#about">Nos Engagements</a>
                <a href="src/mention.php">Mentions légales</a>
            </div>

            <div class="footer-section formation">
                <h4>Formations</h4>
                <a href="https://raisefx.com/">Pack Bronze</a>
                <a href="src/silver.php">Pack Silver</a>
                <a href="src/gold.php">Pack Gold</a>
                <a href="src/elite.php">Pack Bot</a>
            </div>

            <div class="footer-section partenaire">
                <h4>Partenaires</h4>
                <a href="https://raisefx.com/"><img src="img/raise.webp" alt=""></a>
            </div>

            <div class="footer-section contact">
                <h4>Nous Contacter</h4>
                <a href="tel:+"><i class="fa-solid fa-phone"></i> 07.07.07.07.07</a>
                <a href="mailto:kachard15@gmail.com"></
            </div>

            <div class="footer-section reseau">
                <h4>Réseaux Sociaux</h4>
                <a href="https://instagram.com/achardk?r=nametag"><i class="fa-brands fa-instagram"></i> Instagram </a>
            </div>
            
        </div>

    </footer>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- javascript -->
    <script src="js/script.js"></script>
</body>
</html>









