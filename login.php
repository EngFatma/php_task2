
<?php 

 session_start();
 require_once 'includes/header.php'; 

if(isset($_SESSION['errors'])){
    foreach($_SESSION['errors'] as $error ){
        echo  $error . "<br>";
        unset($error);
    }
    
}





?>

  <div class="container">

        <h1 class="my-5 text-center header">Login now !</h1>
        <form action="handleLogin.php" method="post">
        
            <div class="form-group w-50 mx-auto my-5">

                <input type="text" name="mail" class="form-control my-3"placeholder="Enter your email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>"  >
                <input type="text" name="password" class="form-control my-3"placeholder="Enter your password" value="<?php if(isset($_SESSION['password'])) echo $_SESSION['password'] ?>" >
                <input class=" btn sub_btn my-3" type="submit" value="login" name="login">

            </div><!--./form-group -->
            

        </form>

  </div><!--./container-->






<?php  require_once 'includes/footer.php';  ?>



 