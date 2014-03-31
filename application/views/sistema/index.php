<!DOCTYPE html>
<html lang="pt-br">
 	<header> 
 		<meta charset="UTF-8">

 		<title>:::AMBIENTAÇÃO - SENAC- AM:::</title>

 		<!--Bootstrap CSS -->
 		
 		<link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.csss">
 		<!--End Bootstrap CSS -->
 		<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/site_css.css">
 		<!--JQUERY UI -->
 		<link rel="stylesheet" href="/resources/demos/style.css">
 		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
 		<!--END JQUERY UI-->
 		
 		<?php 
		if(isset($css_files) && isset($js_files)):
			foreach($css_files as $file): ?>
				<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
		<?php 
			endforeach;
		 endif;	
		 ?>

		<link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.min.css">
 	</header>
 	<body>
 		<div class="container">
 			<?php $page = $this->uri->segment(3); ?>
			<div class="row">
				<div class="col-md-12 col-md-offset 13" > <!--TOPO -->

						  <img src="<?=base_url(); ?>assets/images/topo.jpg" alt="topo" class="img-responsive">
			  			

				</div><!--END TOPO -->


				<div class="col-md-12 col-md-offset 13">
					
					<ol class="breadcrumb">
						  
						
						    <li class="active"><?php echo "Ambientação Senac-AM" ?></li>		
						
						 							 

					</ol>

				</div>

			  <div class="col-xs-6 col-md-4" >
			  	<?php  print_r($menu); ?>
			  
			  	<!-- **************************************MENU ACCORDION********************************* -->
			  		<div id="accordion">
						  <h3>Section 1</h3>
						  <div>
						    <p>
						    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
						    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
						    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
						    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						    </p>
						  </div>
						  <h3>Section 2</h3>
						  <div>
						    <p>
						    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
						    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
						    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
						    suscipit faucibus urna.
						    </p>
						  </div>
						  
					</div>
				<!-- **************************************MENU ACCORDION********************************* -->	

			  </div>
 		
 			
 			<?=$contents;?>

 			</div>
 			<br>
	<!-- FOOTER -->
      <footer>
        <center>
        <p>&copy; 2014 Senac - Am &middot; <a href="#">Todos os Direitos Reservados</a> &middot; <a href="#">Termos</a></p>
      	</center>
      </footer>	
 		</div>

 	</body>
 	<!--Jquery UI -->
 	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
 	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 	<!--End Jquery UI-->
 	<!--Script Boostrap -->
 	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 	<!--End Script Boostrap -->
 	<!--Custon -->
 	<script type="text/javascript" src="<?=base_url(); ?>assets/js/script.js"></script>
 	<!--End Custon -->

</html>