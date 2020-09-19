<?php 
defined('BASEPATH') or exit('No se permite acceso directo'); 
include 'src/include/head.php';

require INCLUDE_COMP.'navbar.php';
?>
<title><?php echo "tituloHome"?></title>

<div class="container">
	<h2><?= $user ?>!</h2>
</div>

<?php include 'src/include/footer.php';?>