<?php
include 'head.php';
session_start();
$host = "localhost";
$username = "root";
$password = "123456";
$database = "camagru";
$message = "";


try
{
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $error)
{
      $message = $error->getMessage();
}
?>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
  <body>
    <h1>CAMAGRU</h1>

    <div class="all-bx">
      <div id="sidebar">
        <a href="camera.php"><input class="camerabutton" type="button" value="camera"></a>
        <!-- <input class="profilebutton" type="button" onclick="alert('Go to profile')" value="profile"> -->
        <a href="profile.php"><input class="profilebutton" type="button" value="profile"></a>
        <a href="gallery.php"><input class="gallerybutton" type="button" value="gallery"></a>
        <a href="settings.phtml"><input type="submit" value="settings"></a>
        <a href="logout.php"><input class="logoutbutton" type="button" value="logout"></a>
      </div>

      <div id="img-bx">
        <video id="video">Stream not available...</video>
        
              <button class="submit" id="photo-button" class="btn btn-dark">
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
            <!-- <button class="submit" id="clear-button" class="btn btn-light">Clear</button> -->
            <br>
            <div class="icon-bar">
               <img class='sticker' src="./stickers/584998d695008575ff974862.png" style="width:42px;height:42px;border:0;">
               <img class='sticker' src="./stickers/276545973018211.png" style="width:42px;height:42px;border:0;">
               <img class='sticker' src="./stickers/stickeroid_5bf543afba86b.png" style="width:42px;height:42px;border:0;">
               <img class='sticker' src="./stickers/586c311b052925979c0768e4.png" style="width:42px;height:42px;border:0;">
               <img class='sticker' style="width:42px;height:42px;">

               </div>

           <button id="clear-button" class="btn btn-light">Clear</button>
           <div class="canvas-element">
               <canvas id="canvas"></canvas>
               <img id='stick' style="width:42px;height:42px;">

           </div>
            <br><br><br><br>
            <canvas id="canvas"></canvas>

            <a class="submit" id="savebutton" href="imageDataUrl" download="camagru.png">Save Photo</a>
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
<?php
include 'uploadimage.php';
?>
</body>