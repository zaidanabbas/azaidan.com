<?php
session_start();
include "./conn/functions.php";
include "./conn/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Abbas Zaidan" />
    <meta
      name="description"
      content="The Web Development Agency that you've been looking for is here. Care to a Visit."
    />
    <meta
      name="keywords"
      content="azaidan, webdevelopment,AZaidan,Abbas Zaidan"
    />
    <meta
      property="og:description"
      content="The Web Development Agency that you've been looking for is here. Care to a Visit."
    />
    <meta property="og:title" content="AZaidan | Home" />
        <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
<link rel="manifest" href="/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Abhaya Libre"
      rel="stylesheet"
    />
    <title>AZaidan | About</title>
  </head>
  <body>
    <?php
      include "./assets/home_nav.php"
    ?>
    <main>
      
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
  <br><br>
  <?php if (isset($_GET['login'])): ?>
		<p><?php echo $_GET['login']; ?></p>
	<?php endif ?>
	<div>

<div><h1>About</h1><div><img src="/img/me.jpg" style="max-width:100px;width:100%;height:auto;border-radius: 4vw;"></div><p> Welcome to AZaidan Web Development,<br><br> your number one source for all things, Websites.<br><br> We're dedicated to giving you the very best of websites,<br><br> with a focus on quality, variety, and price. Founded in 2022<br><br> by Abbas Zaidan, AZaidan Web Development has come<br><br> a long way from its beginnings in Lebanon. When Abbas Zaidan<br><br> first started out, his passion for Websites drove them to do tons of research so<br><br> that AZaidan Web Development could offer you affordable prices<br><br> for custom web design. We now serve customers all over the world and are thrilled that we're able to turn our passion into our own website.<br><br> we hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments,<br><br> please don't hesitate to contact us.<br><br> Sincerely, Abbas Zaidan </p></div>
</div>
  
      
      
      <div class="footer">
        
        <?php
      include "./assets/footer.php";
      ?>
      </div>
    </main>
    <script src="/assets/script.js"></script>
  </body>
</html>