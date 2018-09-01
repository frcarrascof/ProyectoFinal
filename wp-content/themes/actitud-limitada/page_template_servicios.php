<?php

	/*
		Template Name: Servicios
	*/

?>

<?php get_header() ?>
	<?php the_post() ?>
		<!-- Header titulo-->
	    <div class="container-block contenedor_morado p-5 text-center mx-auto">
	        <div class="col-lg-12">
	            <h3 class="py-1 pb-2"><?php the_title() ?></h3>
	        </div>
	        <div class="col-lg-6 mx-auto">
	          <p>Servicios profesionales de reclutamiento, que se adecuan a las necesidades de tu empresa.</p>
	        </div> 
	    </div>
		
		<?php the_content(); ?>
		
		<div class="container-block container-blue py-5 text-center">
	        <div class="col-lg-10 mx-auto mb-2 ">
	            <h2 class="pb-2">Si necesitas más información, contáctanos</h2>
	        </div>
	        <div class="col-lg-6 mx-auto">
	          <p>Si tienes alguna duda, o deseas cotizar algún servicio puedes contactarnos. En <b>Actitud Ilimitada</b> todo es posible.</p>
	              <a href=""><button class="btn btn-primary btn-md">¡Contáctanos!</button></a>
	        </div>
    	</div>

<?php get_footer()?>
