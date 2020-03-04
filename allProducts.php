<?php
 
 require_once 'includes/header.php';

$products = array(
    'product1'=> array( 'price'=> '600' , 'img'=>'man1.jpg','desc'=>'this is nice product'),
    'product2'=> array( 'price'=> '1200' , 'img'=>'man2.jpg','desc'=>'this is nice product'),
    'product3'=> array( 'price'=> '800' , 'img'=>'man6.jpg','desc'=>'this is nice product'),
    'product4'=> array( 'price'=> '900' , 'img'=>'man4.jpg','desc'=>'this is nice product'),
    'product5'=> array( 'price'=> '100' , 'img'=>'man5.jpg','desc'=>'this is nice product'),
    'product6'=> array( 'price'=> '5000' , 'img'=>'man6.jpg','desc'=>'this is nice product')
     
);

?>


<div class="logout mt-4 d-flex justify-content-end mr-4">
   
    <a class="btn sub_btn my-3" href="logout.php">Logout </a>

</div>


<div class="container my-5">
   <div class="row "> 
       <?php

       foreach ( $products  as $product => $data) { ?>
                       <div class="col-md-2">
                           <div class="item">
                                   <div class="card" >
                                       <img src="assets/images/<?php echo $data['img'] ?> " class="card-img-top" alt="...">
                                       <div class="card-body ">

                                           <h5 class="card-title "> <?php echo $product  ?> </h5>
                                           <p class="card-text "> price  <?php echo $data['price'] ?> </p>

                                           <p class="card-text"> <?php echo $data['desc'] ?> </p>
                                           <!-- <a href="#" class="btn btn-primary">buy</a> -->
                                       </div>
                                   </div> <!--./card -->
                               </div> <!--./item -->
                       </div> <!--./col-md-4 -->
      <?php   } ?>

   </div> <!--./row -->

</div> <!--./container -->



<?php  require_once 'includes/footer.php';  ?>


