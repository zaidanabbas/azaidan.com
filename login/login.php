
<?php
session_start();
include "../conn/functions.php";
include "../conn/connection.php";
if (isset($_SESSION['user_id'])) {
  header("Location: /business");
}
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
    <title>AZaidan | Login</title>
  </head>
  <body>
    <?php
      include "../assets/home_nav.php"
    ?>
    <div class="start">
    <br><br><br>
    <h2>Login</h2>

<form action="../inc/login.inc.php" method="post">
    <label for="user_name">Username</label><br />
  <input type="text" name="user_name" placeholder="Username..." required="required"><br>
  <label for="password">Password</label><br />
  <input type="password" name="password" placeholder="Password..." required="required"><br>
  <button class="button" type="submit" value="Login">Login</button>


</form>
<?php if (isset($_GET['error'])): ?>
<p><?php echo $_GET['error']; ?></p>
<?php endif ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <main>
      <br />
      <div class="footer">
      <?php
      include "../assets/footer.php";
      ?></div>
    </main>
    <script src="/assets/script.js"></script>
  </body>
</html>
