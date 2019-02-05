<?php
include 'head.php';
?>
  <body>
    <h1>CAMAGRU</h1>

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
            <!-- <button id="save-button" name="save-button">Save</button> -->
            <button id="clear-button" class="btn btn-light">Clear</button>
            <canvas id="canvas"></canvas>

            <a id="savebutton" href="imageDataUrl" download="camagru_selfie.png">Save Photo</a>
            <!-- <a href="saveimage.php"><input type="submit value="upload>Upload</a> -->
            <!-- <form action="saveimage.php" method="post"> -->
            <!-- <input id="camera" name="image"> -->
            <!-- <a href="imgUrl" ><input type="submit" value="save" name="save"></a> -->
            <!-- <a id="savebutton" href="imgUrl" download="images.png">Save Photo</a> -->
            <!-- </form> -->
      </div>
    </div>

<div id="photos"></div>

<script src="camera.js"></script>
</body>