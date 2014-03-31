<!DOCTYPE html>
<html lang="pt-br">
 	<header> 
 		<meta charset="UTF-8">

 		<title>:::AMBIENTAÇÃO - SENAC- AM:::</title>

 		<!--Bootstrap CSS -->
 		
 		<link rel="stylesheet" href="http://bootswatch.com/start/bootstrap.css">
 		<!--End Bootstrap CSS -->
 		<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/site_css.css">
 		<!--JQUERY UI -->
 		<link rel="stylesheet" href="/resources/demos/style.css">
 		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/excite-bike/jquery-ui.css">
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
			  	 
			  	<!-- **************************************MENU ACCORDION********************************* -->
			  		<div id="accordion">

							<?php 

								$dados = $this->db->get('tbl_categoria')->result();
								foreach ($dados as $value) {

									echo "<h3>".$value->nome."<h3>";
									 		$this->db->where('tbl_categoria_id', $value->id);
									$sub =	$this->db->get('tbl_conteudo')->result();
									foreach ($sub as $menu) {
										echo  '<p><a  class="subMenu" href="'.base_url().'sistema/ambientacao/slide/'.$menu->id.'"> > '.nbs(2).$menu->titulo."</a></p>";
									}

								}	
							 ?>
									  <!-- NOME CATEGORIA -->				
						 
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
 	<script type="text/javascript">
 			$(function(){

 				$('.subMenu').click(function(){
 					
 					var href = $(this).attr('href');
 					$.ajax({
 						  url: href,
 						  type: 'POST',
 						  dataType: 'html',
 						  
 						  beforeSend: function(){
 						  	$("#ambiente").html("<center>Carregando...</center>");
 						  },
 						  complete: function(xhr, textStatus) {
 						    //called when complete
 						   
 						  },
 						  success: function(data, textStatus, xhr) {
 						    //called when successful
 						    $("#ambiente").html("");
 						    $("#ambiente").html(data);
 						    $("#ambiente").hide();
 						    $("#ambiente").show('drop');
 						  },
 						  error: function(xhr, textStatus, errorThrown) {
 						    //called when there is an error
 						    alert('error');
 						  }
 						});					


 					return false;

 				})
 			})
 	</script>	
</html>