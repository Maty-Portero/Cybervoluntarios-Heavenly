<!DOCTYPE html>

<head>

    <link rel="icon" href="https://static.thenounproject.com/png/194335-200.png">
    <title>cybervoluntarios</title>

    <link href="./Album example · Bootstrap v5.3_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- por si el header sigue mal -->
    <link href="./Carousel Template · Bootstrap v5.3_files/carousel.css" rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Instrument+Sans&display=swap');

    * {
        font-family: 'Instrument Sans', sans-serif;
    }

    body {
        background-color: #ffffff;
        color: #000;
        opacity: 0;
        animation: fadeIn 1s ease-in forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    /* header */
    header {
        width: 100%;
        background-color: rgb(255, 255, 255);
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 90px;
    }

    .logo {
        display: flex;
        align-items: center;
        color: #000;
    }

    .asuntos a {
        position: relative;
        font-size: 120%;
        color: black;
        text-decoration: none;
        font-weight: 500;
        margin-right: 30px;
    }

    .asuntos a::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        background: #000;
        border-radius: 5px;
        left: 0;
        bottom: -6px;
        transform: scaleX(0);
        transition: transform .5s;
    }

    .asuntos a:hover::after {
        transform-origin: left;
        transform: scaleX(1);
    }

    .asuntos button {
        width: 90px;
        height: 50px;
        background: transparent;
        border: 2px solid #000;
        border-radius: 6px;
        cursor: pointer;
        font-size: 20px;
        color: #000;
        margin-right: 30px;
    }

    .asuntos button:hover {
        background: #000;
        color: rgb(255, 255, 255);
    }

    /*futer*/
    .futer {
        background: linear-gradient(to bottom, #ffffff, #8ab0df);
    }

    /*artuculos*/
    .articulos button {
        width: 50%;
        height: 50%;
        background: transparent;
        border: 2px solid #000;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        color: #000;
    }

    .articulos button:hover {
        background: #000;
        color: rgb(255, 255, 255);
    }

    /*imagen circular*/
    .imagen-circular {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
    }

    .imagen-circular img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<body style="padding-top: 0px; padding-bottom: 0px;">
    <header>
        <div class="logo">
            <img src="https://static.thenounproject.com/png/194335-200.png" style="height: 80px; width: 80px; padding: 5px; margin: 5px;">
            <strong style="font-size: 25px;">CYBERVOLUNTARIOS</strong>
        </div>
        <nav class="asuntos">
            <a href="contact copy.php">Contacto</a>
            <a href="home copy.php">Inicio</a>
            <a href="">Sobre Nosotros</a>
        </nav>
    </header>

    <div id="myCarousel" class="carousel slide mb-6">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Dona organos</h1>
                        <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Dona tu virginidad</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%"></rect>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Dona tus hijos</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container marketing">
        <center><strong style="font-size: 30px;">DONADORES CONTINUOS</strong></center>
        <br>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <center>
                    <div class="imagen-circular">
                        <img src="https://i.ytimg.com/vi/NIJpHGpbiJo/hqdefault.jpg" alt="Imagen">
                    </div>
                </center>
                <h2 class="fw-normal">Rafael</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <center>
                    <div class="imagen-circular">
                        <img src="https://www.ohchr.org/sites/default/files/styles/hero_5_image_desktop/public/2022-11/women-rights-main-image.jpg?itok=RRGl2PFb" alt="Imagen">
                    </div>
                </center>
                <h2 class="fw-normal">Penelope</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <center>
                    <div class="imagen-circular">
                        <img src="https://www.latercera.com/resizer/yX09XYJSi_PF-ktKA92jbtdXEWU=/420x0/smart/arc-anglerfish-arc2-prod-copesa.s3.amazonaws.com/public/KP75SSAT6NDMDLFGCQGHUSRTUY.jpg" alt="Imagen">
                    </div>
                </center>
                <h2 class="fw-normal">Claudia</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="articulos" style="margin: 20px;">
            <div class="container">
                <center><strong style="font-size: 30px;">PARA PERSONAS</strong></center>
                <br>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-4"> <!--para dividir las columnas de los articulos-->
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_940093-MLA51493724367_092022-O.webp" style="width: 90%; height: 90%; margin: 15px">
                                <br>
                                <h5 style="padding-bottom: 5px;">Colchita calentita con olor a abuela</h5>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, eius quisquam voluptatibus sequi.</p>
                                <center><button type="button"><a href="producto.php">VER MÁS</a></button></center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://m.media-amazon.com/images/I/41SzwmCExGL._AC_UF894,1000_QL80_.jpg" style="width: 90%; height: 90%; margin: 15px">
                                <br>
                                <h5 style="padding-bottom: 5px;">Terreneitor usado</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis quisquam quasi distinctio fugiat.</p>
                                <center><button type="button"><a href="terreneitor.php">VER MÁS</a></button></center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_637363-MLA49164575445_022022-O.webp" style="width: 90%; height: 90%; margin: 15px">
                                <br>
                                <h5 style="padding-bottom: 5px;">spaghetti factory juguete</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aliquid.</p>
                                <center><button type="button"><a href="spaghetti factory juguete.php">VER MÁS</a></button></center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_691552-MLA52250719600_112022-O.webp" style="width: 90%; height: 90%; margin: 15px">
                                <br>
                                <h5 style="padding-bottom: 5px;">Colchita del river</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et, doloribus provident vel magni aliquid. Ut, deleniti magnam.</p>
                                <center><button type="button"><a href="colcha river.php">VER MÁS</a></button></center>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <br></br>
                <br></br>
                <center><strong style="font-size: 30px;">PARA ANIMALES</strong></center>
                <br>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-4"> <!--para dividir las columnas de los articulos-->
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://elmundodelasmascotas.com.ar/wp-content/uploads/2023/05/WhatsApp-Image-2022-02-02-at-11.42.57-300x300.jpeg" style="width: 90%; height: 90%; margin: 15px">
                                <br>
                                <h5 style="padding-bottom: 5px;">Cubo reversible chico estrella 40CM X 40CM</h5>
                                <p>Cubo reversible chico estrella 40CM X 40CM, tiene una mancha de cafe pero esta en perfectas condiciones, material peluche.</p>
                                <center><button type="button"><a href="cubo estrella.php">VER MÁS</a></button></center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://blog.trapitos.com.ar/images/qAKeHGn35cXXedp8stpck2i4TQYP0dYYqBePNbyN.jpeg" style="width: 90%; height: 90%; margin: 15px">
                                <br>
                                <h5 style="padding-bottom: 5px;">juguete para perrro</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est placeat harum voluptatibus.</p>
                                <center><button type="button"><a href="juguete perro.php">VER MÁS</a></button></center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://katoclinicafelina.com/wp-content/uploads/2014/06/la-foto-224x300.jpg" style="width: 90%; height: 90%; margin: 15px">
                                <br>
                                <h5 style="padding-bottom: 5px;">Rascador de gato en perfectas condiciones</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <center><button type="button"><a href="rascador de gato.php">VER MÁS</a></button></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

    <br></br>
    <br></br>

    <footer class="futer py-5">
        <div class="container">
            <div>
                <p class="float-end">
                    <a href=""><img src="https://cdn.icon-icons.com/icons2/906/PNG/512/up-arrow-7_icon-icons.com_69821.png" style="width: 50px; height: 50px"></a>
                </p>
            </div>

            <div style="display: flex">
                <figure>
                    <img id="cyber" src="https://static.thenounproject.com/png/194335-200.png" height="100px" width="100px" style=" margin: 8px"></img>
                </figure>
                <div>
                    <h4 style="color: #000000;">CyberVoluntarios</h4>
                    <p style="color: #000000;">© 2023 CyberVoluntarios. All rights reserved.</p>
                    <p class="mb-0"><a href="">Terms of Service</a> • <a href="">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="./Carousel Template · Bootstrap v5.3_files/bootstrap.bundle.min.js.descarga" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>
