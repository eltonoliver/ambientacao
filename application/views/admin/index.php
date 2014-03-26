<!DOCTYPE html>
<html lang="pt-br">
 	<header> 
 		<meta charset="UTF-8">

 		<title>:::AMBIENTAÇÃO - SENAC- AM:::</title>

 		<!--Bootstrap CSS -->
 		
 		<link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.csss">
 		<!--End Bootstrap CSS -->
 		<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/site_css.css">
 		
 		<?php 
			foreach($css_files as $file): ?>
				<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
		<?php endforeach; ?>
		<link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.min.css">
 	</header>
 	<body>
 		<div class="container">
 		
 			
 			<?=$contents;?>


 		</div>	
 	</body>
 	
 	<!--Script Boostrap -->
 	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 	<!--End Script Boostrap -->
 	<!--Custon -->
 	<script type="text/javascript" src="<?=base_url(); ?>assets/js/script.js"></script>
 	<!--End Custon -->


</html>