<html>
<head>
    <title>Untitled Document</title>

</head>

<?php
if (isset($_GET['user']) && isset($_GET['code']))
{
    try{
        $con = new PDO ("mysql:host=localhost;dbname=camagru","root","123456");
        
            $user = $_GET['user'];
            $code = $_GET['code'];
            
            $select = $con->prepare("SELECT code FROM users WHERE email='$user' and code='$code'");
            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            $data=$select->fetch();

            
            if ($data['code']==$code)
            { 
                $update = $con->prepare("UPDATE users SET isVerified='1' WHERE email='$user'");
                $update->execute();
            }

            // if($data['email']!=$email and $data['password']!=$pass)
            // {
            //  echo "invalid email or password. ";
            //  echo "You will be redirected in 3 seconds";
            //  header('Refresh: 3; URL=http://localhost:8080/camagru/login.phtml');
            // }
            // else{
            //    $_SESSION['email']=$data['email'];
            //    $_SESSION['name']=$data['name'];
            //    header("location: camera.php"); 
            // }
    }
        catch(PDOException $e)
        {
            echo "error".$e->getMessage();
        } 
}

?>

<body>
<div>
    <form>
        <h2 style="color: black">Congratulations you have Signed up successfully!!!</h2>
        <a href="index.php" style="text-decoration: none">Go to Home page</a>
        <br><br>
    </form>
    
</div>
</body>
</html>