<html lang="en">

<?php include 'checklogin.php'?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <h1>CAMAGRU</h1>
    <div class="box1">
        <div class="box2">
            <a href="camera.php"><input class="camerabutton" type="button" value="camera"></a>
            <input class="profilebutton" type="button" onclick="alert('Go to profile')" value="profile">
            <input class="gallerybutton" type="button" onclick="alert('Go to gallery')" value="gallery">
            <!-- <input class="logoutbutton" type="button" onclick="alert('logout')" value="logout"> -->
            <a href="logout.php"><input class="logoutbutton" type="button" value="logout"></a>
        </div>

    </div>

</body>
</html>