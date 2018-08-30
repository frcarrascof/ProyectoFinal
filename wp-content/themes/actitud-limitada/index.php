<?php get_header(); ?>

    <!-- Info - Imagen -->
    <div class="container-block contenedor_morado py-5 mb-4">
        <div class="col-lg-10 mx-auto">
          <div class="row align-items-center h-100 mx-auto">
            <div class="col-sm-6 col-lg-4 mx-auto text-center">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fondo1.png" alt="" class="img-fluid">   
            </div>
            <div class="col-lg-7">
              <h2 class="pt-4"><b>La actitud es una decisión diaria</b></h2>
              <p>Somos una consultora de recursos humanos. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="contacto.html"><button class="btn btn-primary btn-md">¡Contáctanos!</button></a>
            </div>
          </div>
        </div>
    </div> 

    <!-- Quiénes somos -->
    <div class="container pt-5">
      <div class="row align-items-center">
        <div class="col-lg-12">
            <h3 class=" h3linea">Qué hacemos</h3>
        </div>
        <div class="col-lg-8 ">
          <p>Somos profesionales especializados en soluciones de recursos humanos.
          Contamos con la <b>Actitud</b> necesaria, para ofrecerte servicios en gestión de personas, innovando en asesorías hacia nuestros clientes, coaching ejecutivo y de equipo y consultorías de RRHH.</p>
          <a href="equipo.html"><button class="btn btn-primary-dark my-3">Conoce nuestro equipo</button></a>
        </div>
        <div class="col-lg-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/quienessomos.jpeg" alt="Imagen quiénes somos" class="img-fluid">
        </div>
      </div>
    </div>

    <!-- Servicios -->
     <div class="container py-5 mb-4">
      <div class="row">
        <div class="col-lg-12 mb-2">
            <h3 class="pb-2 h3linea">Nuestros Servicios</h3>
        </div>
        <div class="col-lg-8">
          <p>Realizamos todo tipo de procesos de gestión del talento, procesos operativos a gerenciales. ¿Cuál es nuestra especialidad? <b>Los procesos para TI.</b></p>
        </div>
        <div class="col-lg-12">
          <div class="row py-2">
           <!-- Reclutamiento -->
            <div class="col-lg-4 mb-4">
              <h4 class="pt-4 pb-2"><span class="fa-stack fa-1x mr-2"><i class="fas fa-circle fa-stack-2x" style="color:#57A79D"></i><i class="fas fa-users fa-stack-1x fa-inverse"></i></span>Reclutamiento</h4>
              <p>Ofrecemos servicios profesionales de reclutamiento. Te entregamos el mejor listado de candidatos y tú los entrevistas y decides.</p>
              <a href="reclutamiento.html"><button class="btn btn-primary-dark">Más información</button></a>
            </div>
            <!-- Talleres -->
            <div class="col-lg-4 mb-4">
              <h4 class="pt-4 pb-2"><span class="fa-stack fa-1x mr-2"><i class="fas fa-circle fa-stack-2x" style="color:#803a85"></i><i class="fas fa-pencil-alt fa-stack-1x fa-inverse"></i></span>Talleres</h4>
              <p>Realizamos talleres de Expresión verbal, Autoconocimiento, Auotestima, Liderazgo, entre otros. También hacemos talleres personalizados, cursos y relatorías.</p>
              <a href="talleres.html"><button class="btn btn-primary-dark">Más información</button></a>
            </div>
            <!-- Asesorías -->
            <div class="col-lg-4">
              <h4 class="pt-4 pb-2"><span class="fa-stack fa-1x mr-2"><i class="fas fa-circle fa-stack-2x" style="color:#B0924D"></i><i class="fas fa-hands-helping fa-stack-1x fa-inverse"></i></span>Asesorías</h4>
              <p>Hacemos asesorías de CV, Entrevistas presenciales, Entrevistas por competencias, Entrevistas psicológicas y personalizadas.</p>
              <a href="asesorias.html"><button class="btn btn-primary-dark">Más información</button></a>
            </div>
            <!-- Eventos -->
            <div class="col-lg-4">
              <h4 class="pt-4 pb-2"><span class="fa-stack fa-1x mr-2"><i class="fas fa-circle fa-stack-2x" style="color:#803a85"></i><i class="fas fa-hands-helping fa-stack-1x fa-inverse"></i></span>Eventos</h4>
              <p>Pausas laborales de 20 a 30 minutos, para plantear temáticas fundamentales para la organización de los trabajadores. Intervenciones, Stand UP, y obras de teatro personalizadas.</p>
              <a href="eventos.html"><button class="btn btn-primary-dark">Más información</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Servicios -->
    <div class="container-block container-blue py-5 text-center">
        <div class="col-lg-10 mx-auto mb-2 ">
            <h2 class="pb-2">Servicios Personalizados</h2>
            <span class="fa-stack fa-2x mr-2">
              <i class="fas fa-coffee fa-stack-1x fa-inverse"></i>
            </span>
        </div>
        <div class="col-lg-8 mx-auto">
          <p>¿Tienes alguna duda? ¿Te gustaría un servicio más personalizado? Si gustas, nos tomamos un café y conversamos. En <b>Actitud Ilimitada</b> todo es posible.</p>
              <a href="contacto.html"><button class="btn btn-primary btn-md">¡Contáctanos!</button></a>
        </div>
    </div>

    <!-- Noticias -->
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-12 mx-auto mb-2 ">
          <h3 class="pb-2 h3linea">Últimas noticias</h3>
        </div>
        <div class="col-lg-8">
          <p>Revisa las últimas noticias que hemos publicado.</p>
        </div>
        <div class="col-lg-12">
          <div class="row justify-content-center">
            <!-- Loop noticias -->
            <?php query_posts('posts_per_page=3&cat=-3');?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <div class="card m-3" style="width: 18rem;">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top']) ?>
                <div class="card-body">
                  <h5 class="card-title"><?php the_title() ?></h5>
                  <p class="card-text"><?php the_excerpt() ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Ver más...</a>
                </div>
              </div>
            <?php endwhile; endif; ?>
            <!-- /Loop noticias -->
            <div class="col-lg-12 text-center">
              <a href="noticias.html"><button class="btn btn-primary-dark my-3">Ver todas las noticias</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>