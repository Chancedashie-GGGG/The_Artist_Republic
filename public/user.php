<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - The Artist Republic</title>
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
                <div class="userpage">
                    <div class="banner">
                        <img src="../public/static/def_banner.webp" height="365" alt="">
                    </div>
                    <div class="user-info">
                        <div class="profile-pic">
                            <img src="../public/static/def_pfp.webp">
                        </div>
                        <div class="user-metadata">
                            <div class="username">
                                <span>Username</span>
                            </div>
                            <div class="users-buttons">
                                <div class="button">
                                    <a href="">
                                        Follow
                                    </a>
                                </div>
                                <div class="button">
                                    <a href="">
                                        Join Fanclub
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aboutuser">
                            <h1>Bio</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ipsum in laboriosam ullam velit iusto adipisci, libero exercitationem recusandae ipsa aut culpa odit laudantium, nesciunt itaque impedit similique. Ut, natus.</p>
                </div>
            </main>
        </div>
    </div>
</body>

</html>