<?php
// session_start();
// $image = $_POST['image'];
// $host = "localhost";
// $username = "root";
// $password = "123456";
// $database = "camagru";
// // $data = base64_encode('$image');

// try
//     {
//         $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
//         $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $query = "INSERT INTO images(name, image, likes) values('name', '$image', '0')";
//         echo "hi1";
//         $connect->exec($query);
//         echo "hi";
//     } 
// catch (PDOException $exc)
//     {
//         echo $exc->getMessage();
//         exit();
//     }
//     header('Refresh: 3; URL=http://localhost:8080/camagru/camera.php');
?>




<?php
// session_start();
// $host = "localhost";
// $username = "root";
// $password = "123456";
// $database = "camagru";
// $message = "";

// try
// {
//     $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
//     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $exc)
// {
//     echo $exc->getMessage();
//     exit();
// }

// if (isset($_POST['submit']))
// {
//     // if (getimagesize($_FILES["image"]["temp_name"]) == FALSE)
//     // {
//     //     echo "Please select an image";
//     // }
    
    
//         $image = addslashes($_FILES['image']['temp_name']);
//         $name = addslashes($_FILES['image']['temp_name']);
//         $image = file_get_contents($image);
//         $image = base64_encode($image);
//         echo "hi";
//         saveimage($name, $image);
//         echo "hi2";

    

//     function saveimage($name, $image)
//     {
//         echo "hi1";
//        $query = "INSERT INTO images (name, image) vales ('$name', '$image')";
//        $connect->exec($query);
//        if ($result)
//        {
//            echo "Image uploaded";
//        }
//        else
//        {
//            echo "Image not uploaded";
//        }

//     }
// }
?>


<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="saveimage.php" method="post">
<br>
<input type="file" name="image">
<br><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html> -->


<!-- <html>
<head>
    <title>UPDATE LOGIN DETAILS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="images.php" method="post"></form>
<label>user name</label>
<input placeholder="Enter username" type="text" name="user_name" required>
<label>Profile picture</label>
</body>
</html> -->