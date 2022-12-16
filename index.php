<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/functions.js"></script>
    <title>Home | Snuggirl Official</title>
</head>
<body>
    <div>
      <img src="images/sglogo.png" onclick="redirect('portfolio')" class="logoBtn"/>
    </div>

    <div class="NavBar" >
    <ul>
        <a class="navBtn" id="btn1" onclick="checkPage()">Home</a>
        <a class="navBtn" onclick="changeColor()" href="shop">Etsy shop</a>
        <a class="navBtn" onclick="changeColor()" href="portfolio">portfolio</a>
        <a class="navBtn" onclick="changeColor()" href="contact">contact</a>
    </ul>
    </div>
    <script>checkPage();</script>

    <div>
        <img class="bannerImg" src="images/banner.png" />
        <img class="welcometopaper"src="images/welcometopaper.png" />
    </div>

    <div class="footer"> 
    </div>
</body>
</html>