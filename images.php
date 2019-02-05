
<?php
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
catch (PDOException $exc)
{
    echo $exc->getMessage();
    exit();
}

if (isset($_POST['submit']))
{
    if (getimagesize($_FILES['image']['temp_name']) == FALSE)
    {
        echo "Please select ana image";
    }
    else
    {
        $image = addslashes($_FILES['image']['temp_name']);
        $name = addslashes($_FILES['images']['temp_name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        saveimage($name, $image);
    }

    function saveimage($name, $image)
    {
       $query = "INSERT INTO images (name, image) vales ('$name', '$image')";
       $result = $connect->prepare($query);
       $result->execute();
       if ($result)
       {
           echo "Image uploaded";
       }
       else
       {
           echo "Image not uploaded";
       }

    }
}
?>


<!DOCTYPE html>
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
<form action="images.php" method="post">
<br>
<input tyoe="file" name="image">
<br><br>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>


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