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
            <button class="submit" id="clear-button" class="btn btn-light">Clear</button>
            <br>
            <div class="icon-bar">
            <img src="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwijvrjSj7bgAhWI1-AKHcINCrYQjRx6BAgBEAU&url=https%3A%2F%2Fwww.seekpng.com%2Fipng%2Fu2e6i1a9y3w7t4w7_heart-emoji-smoke-cool-emojis-pink-nice-sticker%2F&psig=AOvVaw3sCubGq_RLtBYoPB4NNhnl&ust=1550058394342588" alt="">
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