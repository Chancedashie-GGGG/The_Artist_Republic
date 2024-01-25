<html>

<head>
    <title>The Artist Republic</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#ef2929">
    <meta name="apple-mobile-web-app-title" content="The Artist Republic">
    <meta name="application-name" content="The Artist Republic">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <nav class="navbar" id="navbar">
        <img src="images/Logowhite.png" class="Logo">
        <div class="navlinks" id="navlinks">
            <ion-icon name="close" onclick="hideMenu()"></ion-icon>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="">Videos</a></li>
                <li><a href="">Drawings</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Live TV</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/auth_signin">My Account</a></li>
            </ul>
        </div>
        <ion-icon name="menu" onclick="showMenu()"></ion-icon>
    </nav>
    <div id="container">
        <div class="hero">
            <div class="herowrap">
                <span>Welcome To The Artist Republic!</span>
                <p>More Then A Art Platform</p>
            </div>
        </div>
        <div class="page-wrap">
            <section class="featured-section">
                <div>
                    <h1>Featured Creator (Weekly)</h1>
                    <div class="slider-wrap">
                        <div class="slider">
                            <div class="slider-inner">
                                <div class="item">
                                    <h3>Item One</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Two</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Three</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Four</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Five</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Six</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Seven</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Eight</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Nine</h3>
                                </div>
                                <div class="item">
                                    <h3>Item Ten</h3>
                                </div>

                            </div>
                        </div>
                        <div class="progress-bar">
                            <div class="prog-bar-inner"></div>
                        </div>
                    </div>
                </div>
                <div>
                    
                </div>
            </section>
        </div>
    </div>
    <script src="js/app.js" defer></script>
</body>

</html>