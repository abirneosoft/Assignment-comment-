<?php
include("db.php");

?>
<html>
    <head>
        <title></title>
        <?php include("head.php"); ?>

    </head>
    <body>
    <section class="container">
        <h1>view post</h1>
        <div class='row'>
        <?php 
         foreach($products as $val){
             ?>
             <div class='col-sm-4'>
             <div class="card" style="width: 18rem;">
                <img src="<?php echo $val['image'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $val['id'];?></h5>
                    <h5 class="card-title"><?php echo $val['pname'];?></h5>
                    <p class="card-text">
                     <h6 class="card-title"><?php echo $val['price'];?></h6>
                     <h6 class="card-title"><?php echo $val['quality'];?></h6>
                    </p>
                    <a href="#" class="btn btn-primary">Add To Cart</a>
                </div>
                </div>
             </div>
        
            <?php

         }

        ?>
        </div>
    </section>   
  



   
   
    <?php include("foot.php"); ?>
    </body>
</html>