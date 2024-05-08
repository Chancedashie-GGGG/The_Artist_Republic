<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo - The Artist Republic</title>
    <link rel="stylesheet" href="../public/style.css">
</head>

<body>
    <?php
    require "../autoload.php";
    ?>
    <div class="app">
        <div class="page">
            <?php include("../core/templates/navbar.php") ?>
            <main class="mainpage">
                <?php include("../core/templates/photo.html") ?>
                <h1>It's BostonChan!</h1>
            </main>
        </div>
    </div>
</body>

</html>