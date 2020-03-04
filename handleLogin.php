<?php 

session_start();

if(isset($_POST['login'])){


    $email = $_POST['mail'] ;
    $password = $_POST['password'] ;

    $errors = [];
    
    if($email == ' ')
      array_push($errors," email is required ");
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
      array_push($errors," enter valid email  ");
   
    //   validate password 
    else if ($password == ' ')
      array_push($errors," password is required ");

      else if(gettype($password)!=='string')
           array_push($errors," password must be string");
      else if(strlen($password)< 4)
           array_push($errors," password must be more than 4 letters ");

     $arr_len = count($errors);
    
     if($arr_len == 0){

          $_SESSION['isLogin']= true;
          header('location:allProducts.php');
     }
     else{
      
      $_SESSION['errors'] = $errors;
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;

       
        header('location:login.php');
     }
    






    



}







?>