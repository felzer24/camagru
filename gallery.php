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

  $username = $_SESSION['username'];
// $username = "nishka";
    $display = "SELECT * FROM `images` WHERE username = '".$username."'";
    $do = $connect->query($display);

   

    while($pics = $do->fetch())
    {
        $pic = $pics['picProfile'];
      echo "<img src='data:image/png;base64,$pic'>";
        echo $pics['username']."  said  ";
      echo $pics['image_text'];


      echo "<script>
 window.location.Gallery;
 </script>";
    }

// try{
//     $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // $images = $conn->prepare("SELECT username, picProfile, image_text FROM images");
    // $images->setFetchMode(PDO::FETCH_ASSOC); 
    // echo "hi1"; 
    // $images->execute();
    // // set the resulting array to associative
    // echo "hi2";
    // $result = $images->fetch();
    // echo "hi3";
       
    
    
    // $display = "SELECT * FROM images";
    //     $images = $conn->query($display);
    //     // $id = $_GET['id'];
    //     while($pics = $images->fetch())
    //     {
            
    //       echo "<img src=\"".$pics['picProfile']."\">";
    //       echo("<button onclick=\"\">like</button>");
    //       echo "hi";
    //       echo "<script>window.location.Gallery;</script>";
    //     }
    //   }
 
//       $username = $_SESSION['username'];
//         $display = "SELECT * FROM `images` WHERE username = '".$username."'";
//         $do = $conn->query($display);
    
//         $id = $_GET['id'];
       
    
//         while($pics = $do->fetch())
//         {
//             $pic = $pics['picProfile'];
//             echo "<img src='data:image/png;base64,$pic'>";
//             echo $pics['username']."  said  ";
//             echo $pics['image_text'];
//           echo "<script>
//           window.location.Gallery;
//           </script>";
//         }
//     }

//   catch(PDOException $error) {
//     echo 'Connection Failed: ' . $error->getMessage();
//   }
?>
