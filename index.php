<?php
//include header
 session_start();
 ob_start();
 include ('header.php');
?>
<?php
//include banner
include ('Template/_banner-area.php');
//include banner
?>

<?php
//include Top-sale section
include ('Template/_top-sale.php');
//include Top-sale section
?>

<?php
//include Special Offer section
include ('Template/_special-price.php');
//include Special Offer section
?>

<?php
//include banner advertise section
include ('Template/_banner-adds.php');
//include banner advertise section
?>

<?php
//include New Merchandise section
include ('Template/_new-merchadise.php');
//include New Merchandise section
?>

<?php
//include Blogs area
include ('Template/_blogs.php');
//include Blogs area
?>

<?php
//include footer
include ('footer.php');
?>