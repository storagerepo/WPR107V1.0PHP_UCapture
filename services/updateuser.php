<html><head>
    <style>
        body{
            background: url(../images/dummybgregsuccess.PNG);
            width:99%;
            height: 100%;
        }

    </style>

</head>
<body bgcolor="black"style="">
<?php
// echo "<pre>";
//   print_r($_POST);  exit;
session_start();
require("db_config.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = "suresh";
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
echo $firstname;
if(!isset($_POST['firstname']))
    $_SESSION['require']['firstname']="Should not blank";


//  echo $password; exit;
if(isset($_SESSION['require']))
{

    $userdetail ="INSERT INTO tbl_user_registration ( firstname,lastname, username, password,email,mobile,address,dob) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$password."',  '".$email."',  '".$mobile."', '".$address."', '".$dob."');";
$result=$mysqli->query($userdetail);
if($result){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered, Login to continue!!!')
    window.location.href='../index.php';
    </SCRIPT>");
   }else{
       die ('Unable to save .Error updating database: ' . mysql_error());

   }
}
else
{
    header("Location:../view/userRegistration.php");
}
?></body></html>