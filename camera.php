<?php
include 'head.php';
?>
  <body>
    <h1>CAMAGRU</h1>

            <?php if(!isset($_SESSION['email'])): ?>
            <P style="font-size: 14px" color="white">You are currently not signed in <a href="login.php">Log in</a> Not yet a member?" <a href="signup.php">Sign up</a> </P>
            <?php else: ?>  
            <p style="font-size: 14px">You are logged in as <?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?> <a href="logout.php">Logout</a> </p>
            <?php endif ?>



    <div class="all-bx">
      <div id="sidebar">
        <a href="camera.php"><input class="camerabutton" type="button" value="camera"></a>
        <input class="profilebutton" type="button" onclick="alert('Go to profile')" value="profile">
        <input class="gallerybutton" type="button" onclick="alert('Go to gallery')" value="gallery">
        <a href="settings.phtml"><input type="submit" value="settings"></a>
        <a href="logout.php"><input class="logoutbutton" type="button" value="logout"></a>
      </div>

      <div id="img-bx">
        <video id="video">Stream not available...</video>
        
              <button id="photo-button" class="btn btn-dark">
                Take Photo
              </button>
            <select id="photo-filter" class="select">
              <option value="none">Normal</option>
              <option value="grayscale(100%)">Grayscale</option>
              <option value="sepia(100%)">Sepia</option>
              <option value="invert(100%)">Invert</option>
              <option value="hue-rotate(90deg)">Hue</option>
              <option value="blur(10px)">Blur</option>
              <option value="contrast(200%)">Contrast</option>
            </select>
            <button id="clear-button" class="btn btn-light">Clear</button>
            <canvas id="canvas"></canvas>
        
      </div>
    </div>

<div id="photos"></div>

<script src="camera.js"></script>
</body>