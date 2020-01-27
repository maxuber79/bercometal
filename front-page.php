<?php
/**
 * Theme Home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bercometal
 */

get_header();
?>
<!--==========================
Intro Section
============================-->
    <section id="intro">
        <div class="intro-container">
            <?php get_template_part('template-parts/content', 'slider-home'); ?>
        </div>
    </section><!-- #intro -->

<main id="main">
  <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ribbon-b"></i>
            <h4 class="title"><a href="">Certificación</a></h4>
            <p class="description">Contamos con la certificación de SABIC Polymershapes Chile, para proveer e instalar productos de Solatube y Policarbonatos.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-checkmark-circled"></i>
            <h4 class="title"><a href="">Responsabilidad</a></h4>
            <p class="description">Mediante el desarrollo de proyectos eficientes, en los plazos definidos y con altos estándares de calidad y seguridad.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="fa fa-handshake-o"></i>
            <h4 class="title"><a href="">Confianza</a></h4>
            <p class="description">Mantenemos un estrecho lazo de confianza con nuestros clientes, quienes nos permiten potenciar al máximo nuestras capacidades.</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->
 <!--==========================
        About Us Section
    ============================-->
    
    <section id="about" style="background-image: url('<?php echo get_post_meta($post->ID, 'URL_bg_about', true); ?>');background-size:cover;background-position: center center;background-repeat: no-repeat;">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <header class="section-header">
                        <h3>NOSOTROS</h3>
                        <p>Bercometal es una empresa de Construcciones Metálicas, Obras Civiles menores e Instaladores certificados de Policarbonatos y Solatube.<br> Con más de 27 años de experiencia y certificados por Sabic polymershapes CP Chile, asesoramos las necesidades de nuestros clientes para evaluar y entregar la mejor solución a sus proyectos tanto en diseño, forma, tiempo y costos.<br> Contamos con el personal calificado, capacitado y confiable para el desarrollo de los diferentes proyectos de construcción.</p>
                    </header>
                </div>
            </div>            

        </div><!--./container-->
    </section><!-- #about -->

     <!--==========================
        Services Section
    ============================-->
    <section id="services">
        <div class="container">

        <div class="row">
            <div class="col-12">
                <header class="section-header wow fadeInUp">
                    <h3>Servicio</h3>
                    <p>Nuestro servicio de construcción y expertise se basa en el desarrollo de proyectos que contemplan:</p>
                </header>
            </div>
        </div>          

        
        <article class="row">
            <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="icon-economic-architecture-building-of-stacked-containers"></i></div>
            <h4 class="title"><a href="<?php echo esc_url( get_page_link( 514 ) ); ?>">Estructuras Metálicas y Maderas</a></h4>
            <p class="description">Proyectos para Empresas (Industriales-Comerciales-Constructoras) con productos de construcción de excelente calidad y garantizados, </p>
          </div>
          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="icon-ceiling-lamp"></i></div>
            <h4 class="title"><a href="<?php echo esc_url( get_page_link( 516 ) ); ?>">Sistema de Solatube</a></h4>
            <p class="description">Sistema de iluminación natural eficiente, con tecnología de vanguardia que brinda luz natural y ecológica para iluminar pequeños y grandes espacios.</p>
          </div>
          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="icon-sketch"></i></div>
            <h4 class="title"><a href="<?php echo esc_url( get_page_link( 519 ) ); ?>">Obras Civiles Menores</a></h4>
            <p class="description">Ampliaciones, Reparaciones, Manutenciones, Habilitaciones de oficinas, Tiendas Comerciales, Cobertizos Estacionamientos, Patios de Servicios, Protecciones Metálicas, Rejas, Portones (correderas ó batientes), Terrazas, Lucarnas y Cupulas así como también, en viviendas particulares (Casas y Departamentos).</p>
          </div>
          <div class="col-lg-6 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="icon-glass-wall"></i></div>
            <h4 class="title"><a href="<?php echo esc_url( get_page_link( 522 ) ); ?>">Provisión e Instalación de Policarbonatos</a></h4>
            <p class="description">Instalación de Alveolares, Monolíticos y Antobalísticos</p>
          </div>
          <!-- <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->
        </article>
        

        </div>
    </section><!-- #services -->


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Galería de Trabajos</h3>
        </header>
          <?php get_template_part('template-parts/content', 'gallery'); ?>
      </div>
    </section><!-- #portfolio -->
    <!--==========================
    Contact Section
    ============================-->
        
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

        <div class="section-header">
            <h3>Contactanos</h3>          
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
            <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Dirección</h3>
                <address>Lorem Ipsu dolor N° 12345, Of. 123, Santiago, Chile</address>
            </div>
            </div>

            <div class="col-md-4">
            <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Teléfonos</h3>
                <p><a href="tel:+155895548855">+56 2 1234 5678 - 5678</a></p>
            </div>
            </div>

            <div class="col-md-4">
            <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3>Email</h3>
                <p><a href="contacto@costaaustral.cl">contacto@bercometal.com</a></p>
            </div>
            </div>

        </div>

        <div class="form">
            <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
            <?php echo do_shortcode( '[contact-form-7 id="255" title="Formulario de contacto 1"]' ); ?>            
        </div>

        </div>
    </section> <!-- #contact -->
<?php
//get_sidebar();
get_footer();