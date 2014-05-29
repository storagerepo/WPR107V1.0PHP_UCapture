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

require("db_config.php");
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {

$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
/*
$sql = "INSERT INTO output_images1(imageData)
	VALUES( )";*/
}}
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];



    $userdetail ="INSERT INTO tbl_user_registration ( firstname,lastname, username, password,email,mobile,address,dob,user_image) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$password."',  '".$email."',  '".$mobile."', '".$address."', '".$dob."','".$imgData."');";
$result=$mysqli->query($userdetail);
if($result){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered, Login to continue!!!')
    window.location.href='../index.php';
    </SCRIPT>");
   }else{
       die ('Unable to save .Error updating database: ' . mysql_error());

   }


   // header("Location:../view/userRegistration.php");

?></body></html>