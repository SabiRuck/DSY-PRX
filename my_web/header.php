<!DOCTYPE html>
<html lang="en" class="<?php echo basename($_SERVER['PHP_SELF'], ".php"); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="slideshow.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Inria Serif' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Document</title>
</head>
<body id="top-page">
    

<header>
    <div class="header container">
        <a href="index.php">
            <img src="images/logo.png" class="logo">
        </a>
        <div id="headerContainer">
            <button class="menu-button">☰</button> 

            <ul class="nav-list">
                <li><a href="menu.php">Menu</a></li>
                <li><a href="#">Custom Box</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <div id="hIcon">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#B78D5E" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2M7.35 18.5C8.66 17.56 10.26 17 12 17s3.34.56 4.65 1.5c-1.31.94-2.91 1.5-4.65 1.5s-3.34-.56-4.65-1.5m10.79-1.38a9.95 9.95 0 0 0-12.28 0A7.96 7.96 0 0 1 4 12c0-4.42 3.58-8 8-8s8 3.58 8 8c0 1.95-.7 3.73-1.86 5.12" stroke-width="0" stroke="#432E22"/><path fill="#B78D5E" d="M12 6c-1.93 0-3.5 1.57-3.5 3.5S10.07 13 12 13s3.5-1.57 3.5-3.5S13.93 6 12 6m0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11" stroke-width="0" stroke="#432E22"/></svg></a>

                <a href="#" id="basketIcons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="backetIcon"><path fill="#B78D5E" d="M21 9h-1.42l-3.712-6.496l-1.736.992L17.277 9H6.723l3.146-5.504l-1.737-.992L4.42 9H3a1 1 0 0 0-.965 1.263l2.799 10.264A2.005 2.005 0 0 0 6.764 22h10.473c.898 0 1.692-.605 1.93-1.475l2.799-10.263A.998.998 0 0 0 21 9m-3.764 11v1zH6.764L4.31 11h15.38z" stroke-width="0.5" stroke="#432E22"/><path fill="#B78D5E" d="M9 13h2v5H9zm4 0h2v5h-2z" stroke-width="0" stroke="#432E22"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 26 26" id="cookieIcon"><g fill="none"><path fill="#604535" d="M2 16c0 9.29 6.27 14 14 14s14-4.74 14-14c0-9.43-6.27-14-14-14S2 6.43 2 16" stroke-width="0.5" stroke="#edb87f"/><path fill="#B78D5E" d="m19.89 8.32l.62.04a.95.95 0 0 0 1.01-1.01l-.04-.61a1.55 1.55 0 0 0-.22-.71a1.51 1.51 0 0 0-1.85-.59c-.8.34-1.14 1.28-.76 2.05c.23.5.72.79 1.24.83m7.03 6.29l.04-.62a.95.95 0 0 0-1.01-1.01l-.61.04c-.24.01-.49.09-.71.22a1.51 1.51 0 0 0-.59 1.85c.34.8 1.28 1.14 2.05.76c.5-.23.79-.72.83-1.24m-16.3 9.91l.05-.77c.04-.64.41-1.24 1.03-1.55a1.85 1.85 0 0 1 2.54.94c.35.84.04 1.82-.73 2.3c-.28.17-.58.26-.88.28l-.76.05c-.71.05-1.3-.54-1.25-1.25m9.78-9.33l.03-.46c.1-1.51-1.15-2.76-2.67-2.67l-.45.03c-.45.02-.9.15-1.32.4a2.93 2.93 0 0 0-1.22 3.62c.65 1.59 2.5 2.26 4.01 1.51c.98-.47 1.56-1.42 1.62-2.43M7.65 9l.03.42c.06.91.59 1.77 1.47 2.21c1.37.68 3.05.07 3.64-1.37c.49-1.21.02-2.63-1.11-3.29a2.65 2.65 0 0 0-1.2-.36l-.41-.03C8.7 6.49 7.57 7.63 7.65 9m16.61 13.82l.02.36c.08 1.17-.9 2.15-2.07 2.07l-.35-.02c-.35-.02-.7-.12-1.03-.31a2.28 2.28 0 0 1-.95-2.81A2.27 2.27 0 0 1 23 20.94c.76.36 1.21 1.09 1.26 1.88m-18.39-5.9l.04.62c.03.52.33 1.01.83 1.24c.77.38 1.71.04 2.05-.76c.28-.67.03-1.46-.59-1.85a1.55 1.55 0 0 0-.71-.22l-.61-.04a.95.95 0 0 0-1.01 1.01" stroke-width="0.5" stroke="#604535"/></g></svg>

                </a>

            </div>
        </div>
    </div>
</header>
