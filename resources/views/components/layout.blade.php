<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Well Talk</title>
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Pacifico&display=swap" rel="stylesheet">
    <!-- custom     css-->
    <!-- <link rel="stylesheet" href="./static/styles/global.css">
    <link rel="stylesheet" href="./static/styles/nav.css">
    <link rel="stylesheet" href="./static/styles/index.css"> -->
    @vite(['resources/styles/global.css', 
           'resources/styles/nav.css', 
           'resources/styles/index.css',
           'resources/scripts/index.js',
           'resources/scripts/navbar.js',
           ])
</head>
<body>
    <nav class="nav-bar">
        <div class="nav-bar-lg">
         <div class="brand-name">
             WellTalk
         </div>
         <div class="nav-links">
             <p class="services">Services<span></span></p>
             <p class="for-professionals">For Professionals</p>
             <p class="about-us">About Us</p>
             <p class="pricing">Pricing</p>
             <button class="primary btn-md js-navigate-to-login" >Get Started</button>
         </div> 
         </div>
        <div class="nav-bar-md">
         <button class="primary btn-md js-navigate-to-login">Get Started</button>
         <div class="brand-name">
             WellTalk
         </div>
         <div class="nav-links-md js-nav-links-md">
             <p class="services">Services <span></span></p>
             <p class="for-professionals">For Professionals</p>
             <p class="about-us">About Us</p>
             <p class="pricing">Pricing</p>
         </div>
 
         <div>
             <a class="menu-button js-menu-button">
                <div class="menu-bar start"></div>
                <div class="menu-bar middle"></div>
                <div class="menu-bar end"></div>
             </a>
         </div>
        </div>
     </nav>
 
    {{ $slot }}

    
        <!-- <script src="./static/scripts/navbar.js"></script> -->
        <!-- <script src="./static/scripts/index.js" type="module"></script> -->

</body>
</html>