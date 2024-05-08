<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Artist Republic</title>
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
                <h1>#HelloArtWorld</h1>
                <section class="section">
                    <div class="content-section">
                        <article class="content-container">
                            <a href="../public/video.php" class="thumbnail">
                                <img class="thumbnail-image" src="http://unsplash.it/250/150?gravity=center" />
                                <div class="thumbnail-content">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt repudiandae porro quaerat!</p>
                                    <img src="../public/static/Rating-G.webp" width="40">
                                </div>
                            </a>
                            <h1>Video</h1>
                        </article>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>