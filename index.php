<?php
session_start();
require "database/connection.php";


if (empty($_GET['msg'])) {
    $msg = "";
} else {
    $mes = $_GET['msg'];
    ?>
<?php
}

//$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chula&copy; || charith&trade;</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body style="  background: linear-gradient(to right, #05090a, #000000, #0a1115);" class="  overflow-x-hidden">
    <div class="container-fluid">
        <div class="row">
            <?php require "header.php" ?>
            <div class="col-12 justify-content-center mt-lg-5">
                <div class="row">
                    <div class="col-10 offset-1 col-lg-5 mt-lg-5">
                        <h1 class=" text-uppercase fw-bolder text-light mt-5">charith sasmitha</h1>
                        <span class=" text-light  text-bold text-capitalize">Welcome to Chula Websity , an
                            immersive
                            GTA FiveM server built on the Nopixel-inspired qbcore framework. delivering an unmatched
                            roleplaying experience. Dive into our world, characterized by serious roleplay, a rich
                            array of
                            over 50 optimized jobs, custom maps, scripts, clothing, cars, and much more. Explore a
                            meticulousty crafted environment designed to provide an unforgettable escopode,
                            solidifying our
                            position as one of Sri Lanka's premier RP servers.
                            <br><br>
                            Step into the dynamic metropolis of Colombo City Roleplay. where an authentic GTA FiveM
                            adventure awaits. Immerse yourself in our carefully curated features, fostering a
                            playground for
                            creativity and strategic thinking. Unleash your potential as you navigate through a
                            myriad of
                            seamiessly woven possibilities, redefining the standards of virtual immersion within Sri
                            Lanka's
                            finest RP servers. </span>
                        <br><br>
                        <form action="https://discord.gg/qW3XzehT" method="get" target="_blank">
                            <button type="submit" style="font-size: 20px;"
                                class="btn btn-light text-secondary fw-bold">Get
                                Whitelisted</button>
                        </form>
                    </div>
                    <div class="col-6 d-none d-lg-block">
                        <div class="sideimg"></div>
                    </div>
                    <?php require "footer.php"?>
                    <span class="text-warning h1"></span>
                </div>
            </div>
            <div class="loading-page">
                <svg id="svg" style="height: 10vh; width: 40vw;" xmlns="http://www.w3.org/2000/svg" height="100"
                    width="400" viewBox="0 0 1512 1512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <text x="50%" y="50%" text-anchor="middle" alignment-baseline="middle"
                        style="text-shadow: 0 0 10px #07a8d0, 0 0 20px #07a8d0, 0 0 30px #07a8d0;" font-size="1000"
                        fill="blue" font-family="Arial" text-anchor="middle" alignment-baseline="middle">charith
                        sasmitha</text>
                        <link rel="stylesheet" href="resources/ezgif.com-optimize.gif">
                </svg>

                
            </div>
</body>
<script src="assets\js\bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
    integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="script.js"></script>
</body>

</html>