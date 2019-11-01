<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <!-- METAS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Equipo 4">
    <title>Chabtic</title>

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
</head>

<body class="body">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0">
    </script>

    <?php include 'header.php' ?>
    <!--INCLUIR HEADER-->

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/slider1.jpg" alt="Imagen de abejas" style="width:100%;">
                </div>

                <div class="item">
                    <img src="img/slider2.jpg" alt="Imagen de abejas en panal" style="width:100%;">
                </div>

                <div class="item">
                    <img src="img/slider3.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <!-- <span ><i class="fas fa-angle-right"></i></span> -->
                <!-- <span class="sr-only">Previous</span> -->
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <!-- <span><i class="fas fa-angle-right"></i></span> -->
                <!-- <span class="sr-only">Next</span> -->
            </a>
        </div>
    </div>

    <section class="nuestraMiel">
        <!--NUESTRA MIEL-->
        <div>
            <h2>NUESTRA MIEL</h2>
            <p>Chabtic es una empresa productora y comercializadora de miel de abeja, orgánica certificada. Producto del
                trabajo de la coperativa <strong>Ts'umbal Xitalha'</strong>, conformada por familias tseltales
                apicultoras en la Selva Norte de Chiapas, México.</p>
            <br>
            <p>Nuestra miel es cultivada entre la diversidad de la flora local y en armonía con la Madre Tierra, lo que
                brinda un color, textura y sabor exquisito.</p>
            <a href="www.facebook.com" class="verMas" target="_self">VER MÁS</a>
        </div>
        <div>
            <figure><img src="img/cara_abejas.png" alt="icono"></figure>
        </div>
    </section>

    <section class="certificaciones">
        <!--CERTIFICACIONES-->
        <h2>CERTIFICACIONES</h2>
        <p>Nuestros productos están certificados por los procesos <strong>100% ecológicos y orgánicos</strong> que
            tienen. </p>
        <ul>
            <li>
                <figure><a
                        href="https://ec.europa.eu/info/food-farming-fisheries/farming/organic-farming/becoming-organic-farmer#certification"
                        target="_blank"><img src="img/logo_idk.jpg" alt="eu organic certification"></a></figure>
            </li>
            <li>
                <figure><a href="https://www.usda.gov/topics/organic" target="_blank"><img src="img/logo_usda.png"
                            alt="logo de USDA"></a></figure>
            </li>
            <li>
                <figure><a href="https://certimexsc.com/about.html" target="_blank"><img src="img/logo_certimex.jpg"
                            alt="logo de CERTIMEX"></a></figure>
            </li>
            <li>
                <figure><a href="https://www.gob.mx/agricultura" target="_blank"><img src="img/logo_sagarpa.jpg"
                            alt="logo de SAGARPA"></a></figure>
            </li>
        </ul>
    </section>

    <?php include 'colaboradores.php' ?>
    <!--INCLUIR COLABORADORES-->

    <?php include 'puntosDeVenta.php' ?>
    <!--INCLUIR PUNTOS DE VENTA-->

    <section class="cuidadoAbejas">
        <!--CUIDADO DE LAS ABEJAS-->
        <div>
            <h2>CUIDADO DE LAS ABEJAS</h2>
            <p>Buscamos retribuir de manera <strong>justa y digna </strong>el trabajo de las familias indígenas
                tseltales de la coperativa <strong>Tsu'mbalXitalha'</strong>.</p>
            <br>
            <p>A travéz de la organización de productores aseguramos la comercialización y calidad de nuestros productos
                luchando asi contra la falta de oportunidades, marginación y aislamiento geográfico en el que nos
                encontramos.</p>
            <a href="www.facebook.com" class="verMas" target="_self">VER MÁS</a>
        </div>
        <div>
            <figure><img src="img/manos_abejas.png" alt="icono"></figure>
        </div>
    </section>

    <section class="homeRecetas">
        <!--RECETAS-->
        <h2>RECETAS</h2>
        <p>A continuación presentaremos recetas orgánicas hechas con nuesta miel orgánica Chabtic para brindar
            <strong>color, textura y sabor a tus paltillos.</strong></p>

        <div>
            <div class="contenedor12">
                <div class="img1">
                    <figure><img src="img/img1.jpg" alt="img1"></figure>
                </div>
                <div class="img2">
                    <figure><img src="img/img2.jpg" alt="img1"></figure>
                </div>
            </div>

            <div class="contenedor3">
                <div class="img3">
                    <figure><img src="img/img3.jpg" alt="img1"></figure>
                </div>
            </div>

        </div>


        <a href="www.facebook.com" class="verMas" target="_self">VER MÁS</a>
    </section>

    <?php include 'redes.php' ?>
    <!--INCLUIR REDES-->

    <?php include 'footer.php' ?>
    <!--INCLUIR FOOTER-->

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1a6576ed2d.js" crossorigin="anonymous"></script>
</body>

</html>