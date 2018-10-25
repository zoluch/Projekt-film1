<!DOCTYPE html>
<html>

<head>
  <title>FilmPrzemo</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display|Ropa+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="
  sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <!--Styles-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
* {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

html,
body {
    height: 100%;
}


/*Menu i nawigacja */

.menu {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.navv {
    width: 100%;
    border-bottom: 2px solid #474B4F;
    background-color: #222629;
    height: 60px;
}

.navv nav .logo {
    position: relative;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -ms-flex-align: center;
    float: left;
}

.nav-left {
    float: left;
    margin: 0;
}

.nav-left li {
    display: inline-block;
    padding: 30px;
}

.nav-right {
    float: right;
    margin: 0;
}

.nav-right li {
    display: inline-block;
    padding: 30px;
}

a {
    text-decoration: none;
}

.navv nav ul li a:link {
    color: #86C232;
}

.navv nav ul li a:visited {
    color: #86C232;
}

.navv nav ul li a:hover {
    -webkit-transition: 1.2s;
    -o-transition: 1.2s;
    transition: 1.2s;
    color: #61892F;
}

.menu .logo p {
    color: #61892F;
    font-size: 25px;
    font-weight: bold;
}

body {
    background-color: #1A1A1D;
}


/*Stopka */

.footer {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    height: 73px;
    padding-bottom: 10px;
    text-align: center;
    color: white;
    border-top: 2px solid #474B4F;
    background-color: #222629;
}

.footer h4 {
    margin: 0 auto;
    color: white;
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    font-weight: bold;
}

.footer p {
    display: inline-block;
    margin-right: 10px;
    color: #86C232;
}

.footer [class*="fab fa-"] {
    padding: 10px;
    color: white;
    font-size: 25px;
}

.footer [class*="fab fa-"]:hover {
    -webkit-transition: 1.2s;
    -o-transition: 1.2s;
    transition: 1.2s;
    color: #86C232;
    font-size: 30px;
}


/* Kontener*/

.container {
    min-height: 100%;
    width: 1200px;
    margin-bottom: 100px;
    display: flex;
    justify-content: center;
}

.container h1 {
    text-align: center;
    color: #F0F8FF;
    font-family: 'Playfair Display', serif;
}

.container p {
    padding: 0px 0px 1px 0px;
    text-align: center;
    color: #6B6E70;
    font-family: 'Open Sans', sans-serif;
}


/*Przyciski*/

.button {
    display: block;
    margin: auto;
    padding: 15px 32px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    color: #222629;
    border: none;
    border-radius: 14px;
    background-color: #86C232;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
}

.button:hover {
    display: block;
    margin: auto;
    padding: 15px 32px;
    cursor: pointer;
    -webkit-transition: 1.5s;
    -o-transition: 1.5s;
    transition: 1.5s;
    text-align: center;
    text-decoration: none;
    color: #F0F8FF;
    border: none;
    border-radius: 0px;
    background-color: #86C232;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
}


/* Wspolne style */

.videos-header {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 20px;
    margin-bottom: 30px;
    width: 100%;
}

.videos-header h2 {
    padding: 0;
    margin: 0;
    font-family: 'Ropa Sans', sans-serif;
    font-size: 40px;
    font-weight: bold;
}


/* Lista video */

.card {
    margin-top: 10px;
    box-sizing: border-box;
    background-clip: padding-box;
    -webkit-box-shadow: 20px 35px 54px 0px rgba(15, 7, 15, 1);
    -moz-box-shadow: 20px 35px 54px 0px rgba(15, 7, 15, 1);
    box-shadow: 20px 35px 54px 0px rgba(15, 7, 15, 1);
    background-color: #1A1A1A;
    color: #fdfbfb;
    text-align: center;
}

.card-content {
    padding: 16px;
    height: 300px;
}

.card-content a,
.card-content a:hover {
    color: #00a000;
    text-decoration: none;
}

.card-content p {
    color: #727272;
}

.col-xs-12,
.col-md-6,
.col-lg-4 {
    float: left;
}


/* Strona pojedycznego video */

.single-video-content {
    padding: 16px;
}

.single-video-content h4 {
    margin-top: 20px;
    margin-bottom: 5px;
}

.single-video-content p {
    margin-bottom: 0;
    color: #727272;
}
</style>
</head>

<body>
  <section class="navv">
    <nav class="menu">
      <div class="logo">
        <img src="/images/logo.png">
        <p>FilmPrzemo</p>
      </div>
      <ul class="nav-left">
        <li><a href="http://localhost:8000/welcome">HOME</a></li>
        <li><a href="/videos">Filmy</a></li>
        <li><a href="/videos/create">Dodaj film</a></li>
      </ul>
      <ul class="nav-right">
        <li><a href="/login">Zaloguj</a></li>
        <li><a href="/register">Rejestracja</a></li>
      </ul>
    </nav>
  </section>
 
    @yield('content')
 
  <section class="footer">
    <h4>Możesz nas znaleźć tu:</h4>
    <p>przykładowyemail@gmail.com</p>
    <a href="https://www.facebook.com" target="_blank">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://www.youtube.com" target="_blank">
      <i class="fab fa-youtube-square"></i>
  </section>
</body>

</html>