
<?php 

session_start();

if (isset($_POST['submit'])) {

    $user_name = $_POST['username'];
    $user_mail = $_POST['usermail'];
    $user_password = $_POST['userpassword'];
    $user_phone = $_POST['userphone'];
    $user_facebook = $_POST['facebook'];
    $user_twitter= $_POST['twitter'];
    $user_insta = $_POST['instagram'];

    $infoErrors =[];

   //   validate user name
   if(gettype($user_name) !=='string') 
      array_push($infoErrors ,"user name must be string ");
  //  validate user mail
   else if($user_mail == ' ')
      array_push($infoErrors," email is required ");
   else if(!filter_var($user_mail,FILTER_VALIDATE_EMAIL))
      array_push($infoErrors," enter valid email  ");

  //  validate user password
   else if ($user_password == ' ')
      array_push($infoErrors," password is required ");
   else if(gettype($user_password)!=='string')
      array_push($infoErrors," password must be string");
   else if(strlen($user_password)< 4)
      array_push($infoErrors," password must be more than 4 letters ");

    // validate phone number
    else if(strlen($user_phone) < 11)
      array_push($infoErrors," please enter valid phone consists of 11 digits");

    // validate url
    else if(!filter_var($user_facebook,FILTER_VALIDATE_URL))
       array_push($infoErrors," please enter true facebook url");
    else if(!filter_var($user_twitter,FILTER_VALIDATE_URL))
       array_push($infoErrors," please enter true twitter  url");
    else if(!filter_var($user_insta,FILTER_VALIDATE_URL))
       array_push($infoErrors," please enter true instagram url");


    $len = count($infoErrors);


      
    if($len == 0){

       header('location:home.php');
   }
   else{

       $_SESSION['info_errors']=$infoErrors;    
    
       $_SESSION['user_name']=$user_name;
       $_SESSION['user_mail']=$user_mail;
       $_SESSION['user_password ']=$user_password ;
       $_SESSION['user_phone']=$user_phone;
       $_SESSION['user_facebook']=$user_facebook;
       $_SESSION['user_twitter']=$user_twitter;
       $_SESSION['user_insta']=$user_insta;

      header('location:extraInfo.php');
   }
  
   
   



   
}

?>

