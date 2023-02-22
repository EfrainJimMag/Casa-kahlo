<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesión);
                window.location = "login.php";
            </script>
        ';
        session_destroy();
        die();
    }
    session_destroy();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Harborlights - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Casa<span>Kahlo</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="rooms.php" class="nav-link">Servicios</a></li>
	          <li class="nav-item"><a href="cafeteria.php" class="nav-link">Cafetería</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Sobre nosotros</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contacto</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
		<div class="hero">
	    <section class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/peinado.png);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
	          <div class="col-md-6 ftco-animate">
	          	<div class="text">
	          		<h2>Mas que un solo un peinado...</h2>
		            <h1 class="mb-3">Haste lucir y roba miradas</h1>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/deco.png);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
	          <div class="col-md-6 ftco-animate">
	          	<div class="text">
	          		<h2>Peindo, corte, decoloración, belleza y mucho mas.</h2>
		            <h1 class="mb-3">Dale luz y movimiento a tu cabello</h1>
	            </div>
	          </div>
	        </div>
	        </div>
	      </div>
	    </section>
	  </div>



		<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Bienvenido a CasaKahlo</span>
            <h2 class="mb-4">Luce como siempre has querido</h2>
          </div>
        </div>  
        <div class="row d-flex">
          <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
					<img src="https://img.icons8.com/ios/50/000000/womans-hair.png"/>
              	</div>
              </div>
              <div class="media-body">
                <a href="hair2.php"><h3 class="heading mb-3">Tintes</h3></a>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
					<img src="https://img.icons8.com/metro/52/000000/eye-shadows.png"/>
              	</div>
              </div>
              <div class="media-body">
                <a href="hair4.php"><h3 class="heading mb-3">Maquillaje</h3></a>
              </div>
            </div>    
          </div>
          <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
					<img src="https://img.icons8.com/ios-filled/50/000000/man-combing-hair.png"/>
              	</div>
              </div>
              
              <div class="media-body">
                <a href="hair3.php"><h3 class="heading mb-3">Peinado</h3></a>
              </div>
            </div>      
          </div>
		  
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
		  <a href="hair2.html" class="nav-link">
            <div class="media block-6 services py-4 d-block text-center">
			
              <div class="d-flex justify-content-center">
			  
              	<div class="icon d-flex align-items-center justify-content-center">
					<img src="https://img.icons8.com/fluent-systems-filled/48/000000/nails.png"/>
					</a>
              	</div>
              </div>
              <div class="media-body">
                <a href="hair6.php"><h3 class="heading mb-3">Manicure</h3></a>
              </div>
            </div>      
          </div>
		  <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
					<img src="https://img.icons8.com/pastel-glyph/64/000000/cup--v4.png"/>
              	</div>
              </div>
              <div class="media-body">
                <a href="cafeteria.php"><h3 class="heading mb-3">Cafetería</h3></a>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-7 order-md-last d-flex">
						<div class="img img-1 mr-md-2 ftco-animate" style="background-image: url(images/hair_blue.jpg);"></div>
						<div class="img img-2 ml-md-2 ftco-animate" style="background-image: url(images/collage.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">Casakahlo es para ti</span>
	            <h2 class="mb-4">La elegancia es la única belleza que no se desvanece</h2>
	          </div>
	          <p>Recomendado por mas de 200 mujeres</p>
	          <p><a href="#" class="btn btn-secondary rounded">Reserva tu cita</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="testimony-section">
      <div class="container">
        <div class="row no-gutters ftco-animate justify-content-center">
        	<div class="col-md-5 d-flex">
        		<div class="testimony-img aside-stretch-2" style="background-image: url(images/hair_gold.jpg);"></div>
        	</div>
          <div class="col-md-7 py-5 pl-md-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-4">
	          		<span class="subheading">Nuestros estilistas</span>
			          <h2 class="mb-0">¡Felices de servirte!</h2>
			        </div>
	            <div class="carousel-testimony owl-carousel ftco-animate">
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/person.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Abraham Jiménez</p>
		                    <span class="position">Estilista y maquillista</span>
		                  </div>
		                </div>
	                </div>
	              </div>
	              
	              
	              <div class="item">
	                <div class="testimony-wrap pb-4">
	                  <div class="text">
	                     </div>
	                  <div class="d-flex">
		                  <div class="user-img" style="background-image: url(images/person_pa.jpg)">
		                  </div>
		                  <div class="pos ml-3">
		                  	<p class="name">Pablo</p>
		                    <span class="position">Estilista </span>
		                  </div>
		                </div>
	                </div>
	              </div>
	            </div>
	          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	
            <h2 class="mb-4">CasaKahlo estilos</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url(images/Balayage_oro_rosado.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$500.00 MXN</span> <span class="per"></span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Balayage oro rosado</a></h3>
	    						<p class="pt-1"><a href="rooms-single.php" class="btn-custom px-3 py-2 rounded">Ver detalles <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url(images/balayage_naraja_negro.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$500.00 MXN</span> <span class="per"></span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Balayage naranja negro</a></h3>
	    						<p class="pt-1"><a href="hair2.php" class="btn-custom px-3 py-2 rounded">Ver detalles <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img order-md-last" style="background-image: url(images/boda_peinado.jpg);"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$500.00 MXN</span> <span class="per"></span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Paeinado ocasión especial</a></h3>
	    						<p class="pt-1"><a href="hair3.php" class="btn-custom px-3 py-2 rounded">Ver detalles <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img order-md-last" style="background-image: url(images/makeup.jpg);"></a>
    					<div class="half right-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$500.00 MXN</span> <span class="per"></span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Maquillaje</a></h3>
	    						<p class="pt-1"><a href="hair4.php" class="btn-custom px-3 py-2 rounded">Ver detalles <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url(images/balayage_ex.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$500.00 MXN</span> <span class="per"></span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Balayage con extensiones</a></h3>
	    						<p class="pt-1"><a href="hair5.php" class="btn-custom px-3 py-2 rounded">Ver detalles <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="room-wrap d-md-flex ftco-animate">
    					<a href="#" class="img" style="background-image: url(images/nails.jpg);"></a>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 text-center">
    							<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
    							<p class="mb-0"><span class="price mr-1">$500.00 MXN</span> <span class="per"></span></p>
	    						<h3 class="mb-3"><a href="rooms.html">Manicure</a></h3>
	    						<p class="pt-1"><a href="hair6.php" class="btn-custom px-3 py-2 rounded">Ver detalles <span class="icon-long-arrow-right"></span></a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


		
		

		
		<section class="ftco-section ftco-menu bg-light">
			<div class="container-fluid px-md-4">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Cafetería</span>
            <h2>CasaKahlo cafetería</h2>
          </div>
        </div>
				<div class="row">
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-1.jpg);"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>Pay de queso con zarzamora</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Lo que buscas para el antojo</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-2.jpg);"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>Capricho de platano</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Un pequeño postre con un gran sabor</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/menu-3.jpg);"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>Hot cakes con frutos rojos</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>No te quedes con hambre disfruta en todo momento</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/cafe.jpg);"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>Café de grano</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>El amor está en aire y huele a café</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/capuchino.jpg);"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>Café moka</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Un gran cambio va acompañado de un café</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/cafe_crema.jpg);"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>Café con crema</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pasa un buen rato con un rico café</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        	
        </div>
			</div>
		</section>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Photos</span>
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/rosa_hair.jpg" class="insta-img image-popup" style="background-image: url(images/rosa_hair.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/hair_1.jpg" class="insta-img image-popup" style="background-image: url(images/hair_1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/hair_white.jpg" class="insta-img image-popup" style="background-image: url(images/hair_white.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/hair_orange.jpg" class="insta-img image-popup" style="background-image: url(images/hair_orange.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/hair_blackandapink.jpg" class="insta-img image-popup" style="background-image: url(images/hair_blackandapink.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section img" style="background-image: url(images/collage.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">CasaKahlo</h2>
              <p>Deja que tu cabello hable por ti.<br>Dicen que la felicidad no se pude comprar pero todos mis clientes salen con una sonrisa del salón.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                
                <li class="ftco-animate"><a href="https://www.facebook.com/abrahamlaracolorist/photos/?ref=page_internal"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/casakahlobeautysalon/?hl=es-la"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
         
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">¿Tienes alguna pregunta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Av. Topacio 2854, entre Mármol y Cruz del Sur 45089 Zapopan, Jalisco, México</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ab.lara83@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos resevados | Efraín Jiménez Magaña <i class="icon-heart color-danger" aria-hidden="true"></i>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>