
<?php
session_start();
include "./conn/functions.php";
include "./conn/connection.php";
// if (isset($_SESSION['user_id'])) {
//   header("Location: ./business");
// }
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
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Playfair Display"
      rel="stylesheet"
    />
    <script src="./assets/script.js"></script>
    <title>AZaidan | Home</title>
  </head>
  <body>
    <?php
      include "./assets/home_nav.php"
    ?>
    <div class="start">
      <h1>
        Hello and Welcome<br />
        This is The Web Development Agency<br />
        that we've all been looking for.
      </h1>
      <p id="prices">So lets get started shall we.</p>
    </div>
    <hr class="hr" />
    <div class="waw" id="waw">
        <h1>
            Who are we
        </h1>
        <h2>
            We are a web development company
            <br />
            <br /> 
            that brings your website to life.
            <br /> 
            We also run NFTs on 
            <a href="https://opensea.io/azaidan" style="color:blue;text-decoration:none;" target="_blank">OpenSea</a> 
        </h2>
    </div>
    <hr class="hr" />
    <div class="slogan" id="slogan">
        <h2>
            Web Design That Feels Right.<br /><br />ATZ
        </h2>
    </div>
    <hr class="hr" />
    <div class="trusted" id="trusted">
        <h2>
            Customer Trust
        </h2>
        <img src="https://www.azaidan.com/img/projects/s-sig.png" style="width:100px;height:auto;" value="S Signiture">
        <img src="https://www.azaidan.com/img/projects/nx.png" style="width:100px;height:auto;position:relative;bottom:20px;" value="NFT Marketing Agency">
    </div>
    <hr class="hr" />
    <main>
      <h2 >Our Prices</h2>
      <div class="grid">
        <div class="price right-move">
          <h2>$300</h2>
          <p>This price contains</p>
          <button class="button" onclick="window.location='/opt1'">
            See Option
          </button>
          <ul>
            <li>3 pages max.</li>
            <li>No login and Signup Pages.</li>
            <li>No functionality</li>
          </ul>
        </div>
        <br />
        <hr class="hr" />
        <br />
        <div class="price another">
          <h2>$450</h2>
          <p>This price contains</p>
          <button class="button" onclick="window.location='/opt2'">
            See Option
          </button>
          <ul>
            <li>Unlimited pages.</li>
            <li>With login and Signup Pages.</li>
            <li>And functionality.</li>
          </ul>
        </div>
      </div>
      <hr class="hr" id="projects"/>
      <div >
        <h2>Websites that we've worked on</h2>
        <div class="img" style="display: grid;justify-content: center;align-items: center;grid-gap:16px;">
            <?php 
          $sql = "SELECT * FROM ad ORDER BY RAND() LIMIT 1";
          $res = mysqli_query($con,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
            <div class="alb" style="width: 300px;height: auto;margin: 0;border: black solid 1px;border-radius: 3vw;">

              <br>
                <br>
                <button type="button" class="btn1" onclick="window.location='./docs/ads.php';" style="background-color: rgb(255, 251, 0);
    border: none;
    color: black;
    padding: 0px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    opacity: 0.6;
    transition: 0.3s;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    width: 30px;
    height: 30px;
    border-radius: 1vw;">Ad</button>
                <a href="items1?ad=<?=$images['user_id'];?>">
                    <img style="border-radius: 3vw;max-width: 290px;width: 100%;height: auto;"  src="./uploads/ADS/<?=$images['image_url'];?>" value="photo of <?=$images['message'];?>">
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
      echo "<p>No Ads Yet</p>";
      }
      ?>
      </div>
        <div class="img" style="display: grid;justify-content: center;align-items: center;grid-gap:16px;">
            <?php 
          $sql = "SELECT * FROM business ORDER BY id DESC";
          $res = mysqli_query($con,  $sql);
          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
            <div class="alb" style="width: 300px;height: auto;margin: 0;border: black solid 1px;border-radius: 3vw;">

              <br>
                <br>
                <a href="item?ad=<?=$images['user_id'];?>">
                    <img style="border-radius: 4vw;max-width: 290px;width: 100%;height: auto;"  src="./uploads/ADS/<?=$images['image_url'];?>" value="photo of <?=$images['message'];?>">
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
      echo "<p>No Projects Yet</p>";
      }
      ?>
      </div>
          
      </div>
      <hr class="hr" />
      <br />
      <div class="contact" id="contact">
        <h2>Reach Us at</h2>
        <ul>
          <li>
            <a href="mailto:info@azaidan.com"
              >info@azaidan.com</a
            >
          </li>
          <li>
            <a href="https://instagram.com/azaidanweb" target="_blank"
              >Instagram</a
            >
          </li>
        </ul>
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
