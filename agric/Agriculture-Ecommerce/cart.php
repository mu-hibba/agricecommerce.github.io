<?php
      include ('header.php');
?>

<?php
    /*  include cart items if it is not empty */
    count($product->getData('cart')) ? include ('Template/_cart.php') :  include ('Template/notFound/_cart_notFound.php');
    /*  include cart items if it is not empty */

 ?>

<?php 
    include ('footer.php');
?>