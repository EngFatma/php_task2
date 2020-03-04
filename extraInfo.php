
<?php
session_start();
require_once 'includes/header.php'; 


if(isset($_SESSION['info_errors'])){
    $i= -1;
    foreach($_SESSION['info_errors'] as $er ){
        $i += 1;
        echo  $er. "<br>";
        unset($_SESSION[$i]);
    }
    
}

?>
<!-- log out  -->
<div class="logout mt-4 d-flex justify-content-end mr-4">
   
    <a class="btn sub_btn my-3" href="logout.php">Logout </a>

</div>
<!-- info form  -->
<div class="container">

        <h1 class="my-5 text-center header">TTELL US ABOUT YOU !</h1>

        <form action="handleInfo.php" method="post" class="w-50 mx-auto my-5">

                <input type="text" name="username" class="form-control my-3"placeholder="Enter your name" value="<?php if(isset($_SESSION['user_name'])) echo $_SESSION['user_name'] ?>"  >
                <input type="text" name="usermail" class="form-control my-3"placeholder="Enter your email" value="<?php if(isset($_SESSION['user_mail'])) echo $_SESSION['user_mail'] ?>"  >
                <input type="text" name="userpassword" class="form-control my-3"placeholder="Enter your password" value="<?php if(isset($_SESSION['user_password '])) echo $_SESSION['user_password '] ?>" >
                <input type="text" name="userphone" class="form-control my-3"placeholder="Enter your phone" value="<?php if(isset($_SESSION['user_phone'])) echo $_SESSION['user_phone'] ?>"  >
                
                <input type="text" name="facebook" class="form-control my-3"placeholder="Enter your facebook url" value="<?php if(isset($_SESSION['user_facebook'])) echo $_SESSION['user_facebook'] ?>"  >
                <input type="text" name="twitter" class="form-control my-3"placeholder="Enter your twitter account url" value="<?php if(isset($_SESSION['user_twitter'])) echo $_SESSION['user_twitter'] ?>"  >
                <input type="text" name="instagram" class="form-control my-3"placeholder="Enter your instagram account url" value="<?php if(isset($_SESSION['user_insta'])) echo $_SESSION['user_insta'] ?>"  >

               
                <input class=" btn sub_btn my-3" type="submit" value="submit" name="submit">
            

        </form>

  </div><!--./container-->























<?php require_once 'includes/footer.php'; ?>