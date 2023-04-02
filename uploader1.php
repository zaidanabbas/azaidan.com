<?php
session_start();
include "./conn/functions.php";
include "./conn/connection.php";
$user_data = check_login($con);
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
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png" />
    <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="/img/apple-touch-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="/img/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="/img/apple-touch-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="/img/apple-touch-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="/img/apple-touch-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="/img/apple-touch-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="/img/apple-touch-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/img/apple-touch-icon-180x180.png"
    />
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
    <title>AZaidan | Uploader</title>
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
  
  <div id="ADS1">
  <form action="uploadads1.php" method="post" enctype="multipart/form-data">
  <br><br><br><br><br><br>
              <input autofocus class="button" type="file" name="my_image" value="+"><br>
              <textarea name="message"  cols="20" rows="5" placeholder="message"></textarea><br>
              <input name="price" placeholder="Price"><br>
              <input name="name" placeholder="Name of Seller"><br>
              <input name="number_email" type="text" placeholder="Link to OpenSea"><br>
              <input name="email" type="email" placeholder="Email"><br>
              <input type="submit" type="submit" name="submit" value="Post">    
          </form>

      </div>
      <br />
      
      <div class="footer">
        
        <?php
      include "./assets/footer.php";
      ?>
      </div>
    </main>
    <script src="/assets/script.js"></script>
  </body>
</html>
