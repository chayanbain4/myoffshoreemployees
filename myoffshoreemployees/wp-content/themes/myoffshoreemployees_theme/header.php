<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header_container">
            <div class="header_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Choker Board Cake"
                    class="nav_logo">

            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Benefits</a></li>
                    <!-- <li><a href="#">Blog</a></li> -->
                    <li><a href="#">Contact</a></li>
                    <!-- <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li> -->
                    <li><a href="#">Services</a></li>
                </ul>

            </nav>

        </div>
    </header>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@2.0.8/dist/lottie-player.js"></script>