
<?php
    //Intialize the session variable
    session_start();

    //DB Configuration file
    require("db_config.php");

    //Variable store
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];

    //Store image
    if(count($_FILES) > 0) {
    if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {

        $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
     }}

    //Session values
    foreach($_POST as $key=>$value)
    {
       $_SESSION['values'][$key] = $value;
    }


    //Validation
    if(!isset($_POST['firstname'])|| trim($_POST['firstname'])=='')
         $_SESSION['require']['firstname']="Firstname should not be blank";
    if(!isset($_POST['lastname'])|| trim($_POST['lastname'])=='')
         $_SESSION['require']['lastname']="Lastname Should not blank";
    if(!isset($_POST['username'])|| trim($_POST['username'])=='')
          $_SESSION['require']['username']="Username should not be blank";
    if(!isset($_POST['email'])|| trim($_POST['email'])=='')
          $_SESSION['require']['email']="Email Should not blank";
    if(!isset($_POST['mobile'])|| trim($_POST['mobile'])=='')
          $_SESSION['require']['mobile']="Mobile should not be blank";
    if(!isset($_POST['address'])|| trim($_POST['address'])=='')
          $_SESSION['require']['address']="Address Should not blank";
    if(!isset($_POST['dob'])|| trim($_POST['dob'])=='')
          $_SESSION['require']['dob']="Date of Birth Should not blank";

    //Check no required field
    if(!isset($_SESSION['require']))
    {
        //No blank values execute query
       $userdetail ="INSERT INTO tbl_user_registration ( firstname,lastname, username, password,email,mobile,address,dob,user_image) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$password."',  '".$email."',  '".$mobile."', '".$address."', '".$dob."','".$imgData."');";
       $result=$mysqli->query($userdetail);
       if($result)
       {
             $_SESSION['success']="Account Created Successfully!!";
              unset($_SESSION['values']);
              unset($_SESSION['require']);
              header("Location:../view/userRegistration.php");
       }
       else
       {
        die ('Unable to save .Error updating database: ' . mysql_error());
       }
    }
    else//Some required fields are blank
    {
          header("Location:../view/userRegistration.php");
    }

?>