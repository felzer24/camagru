<?php
session_start();
try{
    $con = new PDO ("mysql:host=localhost;dbname=camagru","root","123456");
    if(isset($_POST['signin'])){
        $email = $_POST['email'];
        $pass = hash('whirlpool',$_POST['password']);
        
        $select = $con->prepare("SELECT * FROM users WHERE email='$email' and password='$pass'");
        $select->setFetchMode(PDO::FETCH_ASSOC);
        $select->execute();
        $data=$select->fetch();
        if($data['email']!=$email and $data['password']!=$pass)
        {
         echo "invalid email or password. ";
         echo "You will be redirected in 3 seconds";
         header('Refresh: 3; URL=http://localhost:8080/camagru/login.phtml');
        }
        else if ($data[isVerified] != 1)
        {
            echo "Error : Verify your email before trying to login. ";
            echo "You will be redirected in 3 seconds";
            header('Refresh: 3; URL=http://localhost:8080/camagru/login.phtml');
        }
        else{
           $_SESSION['email']=$data['email'];
           $_SESSION['name']=$data['name'];
           header("location: camera.php"); 
        }
    }
}
    catch(PDOException $e)
    {
        echo "error".$e->getMessage();
    }
?>