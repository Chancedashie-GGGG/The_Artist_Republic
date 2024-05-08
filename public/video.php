<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video - The Artist Republic</title>
    <link rel="stylesheet" href="../public/style.css">

    <link rel="stylesheet" href="https://cdn.vidstack.io/player/theme.css" />
    <link rel="stylesheet" href="https://cdn.vidstack.io/player/video.css" />
    <script src="https://cdn.vidstack.io/player" type="module"></script>
    <link rel="stylesheet" href="../public/player.css">
</head>

<body>
    <?php
    require "../autoload.php";
    ?>
    <div class="app">
        <div class="page">
            <?php include("../core/templates/navbar.php") ?>
            <main class="mainpage">
                <?php include("../core/templates/player.html") ?>
                <h1>Video Player Test</h1>
            </main>
        </div>
    </div>
</body>

</html>