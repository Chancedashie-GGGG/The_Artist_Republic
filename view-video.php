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

    <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
    <script src="https://unpkg.com/video.js/dist/video.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.9.0/videojs.ads.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.9.0/videojs.ads.min.js"></script>
    <link rel="stylesheet" href="css/player.css">
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
                <li><a href="auth_signin">My Account</a></li>
            </ul>
        </div>
        <ion-icon name="menu" onclick="showMenu()"></ion-icon>
    </nav>
    <div id="container">
        <?php echo '<video id="player" class="video-js vjs-Tarplayer" playsinline controls><source src=""/></video>' ?>
        <div>
            <span>Video Name</span>
        </div>
    </div>
    <script src="js/app.js" defer></script>
    <script>
        var player = videojs('player', {
            controlBar: {
    volumePanel: {
      inline: false
    }
  }
        });
    </script>
</body>

</html>
