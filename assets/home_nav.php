<div class="navigation">
      <nav>
      <div style="margin-right: auto;background-color:black;height:30px;display: flex;align-items: center;margin-left: auto;text-align: center;justify-content: center;">
    <p style="margin:0;color:white;">WORLDWIDE SERVICE</p>
  </div>
        <a class="logo2" href="/">
          <h1>AZAIDAN</h1>
        </a>
        <div id="main">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                <?php
                if (basename(__FILE__) == "index.php"){
                    ?>
                    <a href="https://www.azaidan.com/">Home</a>
                    <a href="#waw">Who Are We</a>
                     <a href="#contact">Contact</a>
                     <a href="https://azaidan.com/about">About</a>
                    <?php
                }else{
                    ?>
                    <a href="https://www.azaidan.com/">Home</a>
                    <a href="https://www.azaidan.com/#waw">Who Are We</a>
                     <a href="https://www.azaidan.com/#contact">Contact</a>
                     <a href="https://azaidan.com/about">About</a>
                    <?php
                }
                ?>
                
                
               
                <?php
    if (isset($_SESSION['user_id'])) {
		if ($_SESSION['user_name'] === 'zaidanabbas') {
      echo "<a href='/uploader'>Website Uploader</a><a href='/uploader1'>NFT Uploader</a><a href='/business'>NFTs</a><a href='/uploader2'>Ad Uploader</a>
      <a href='/coconut'>oso</a><a href='/uploadercoco'>oso uploader</a>";
      
    } else {
      echo "";
    }
// 		if ($_SESSION['user_name'] === 'osomoso') {
//       echo "<a href='/uploader'>Website Uploader</a><a href='/uploader1'>NFT Uploader</a><a href='/business'>NFTs</a><a href='/uploader2'>Ad Uploader</a>
//       <a href='/coconut'>oso</a><a href='/uploadercoco'>oso uploader</a>";
      
//     } else {
//       echo "";
//     }
    
    if ($_SESSION['user_name'] === 'azaidan') {
      echo "<a href='/uploader'>Website Uploader</a><a href='/uploader1'>NFT Uploader</a><a href='/business'>NFTs</a><a href='/uploader2'>Ad Uploader</a>";
      
    } else {
      echo "";
    }
		echo "
		<a href='/logout.php'>logout</a>";
	  } else { ?>
      <a href="/login/login">Login</a>
      <a href="/signup">Signup</a>
   <?php }
	 
    
    ?>
</div>
</div>
<div>
  <div>
  <button class="btn" onclick="openNav()">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div></button>
</div>
</div>
      </nav>
    </div>
