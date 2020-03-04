
<?php 

session_start();

if(isset($_SESSION['isLogin'] )===true ){

    header('location:extraInfo.php');
}
else{
    header('location:login.php');
}




?>