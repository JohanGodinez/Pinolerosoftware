<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<script type="text/javascript" src="Js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="Js/bootstrap.min.js"></script>
</head>
<body>
	<header class="app-header">
        <nav class="navbar app-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>
                        <span class="icon-bar app-icon"></span>
                    </button>
                    <a href="#" class="navbar-brand app-link">Web</a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav navbar-right app-nav">
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Proyectos</a></li>
                        <li><a href="#">Staff</a></li>
                        <li><a href="#">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="app-section1">
            <h1 class="app-titulo">Le mejor sitio para leer <span class="app-resaltar">mangas</span> en linea</h1>
            <p class="app-descripcion">
                Estas buscando un lugar donde leer tu manga favorito,
                Sin molesta publicidad o anuncion, facil y sencillo.
            </p>
        </section>
	</header>

    <section class="app-section2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <br />
                    <h2 class="text-center etiqueta col-md-4 col-md-offset-4">Ultimas Publicaciones</h2>
                    <br />
                </div>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="app-section3">
        <div class="container">
            <div class="row">
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
                <figure class="col-xs-12 col-sm-6 col-md-4 fig">
                    <br />
                    <img alt="" class="img-responsive " src="IMG/img3.jpg" />
                    <figcaption class="animate">Skyword Sword</figcaption>
                </figure>
            </div>
        </div>
    </section>
    <footer class="app-footer">
        <div class="app-empresa">
            <h4>C1V1</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </div>
        <span class="app-icon1"></span>
        <span class="app-icon1"></span>
        <span class="app-icon1"></span>
    </footer>
     <script type="text/javascript">
            $("figure").hover(
                function() {
                    $(".animate", this).fadeIn(150);
                },
                function() {
                   $(".animate", this).fadeOut(250);
            });
    </script>

</body>
</html>
