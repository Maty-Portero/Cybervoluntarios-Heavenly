<!DOCTYPE html>
<!-- saved from url=(0050)https://getbootstrap.com/docs/5.3/examples/album/# -->
<html lang="en" data-bs-theme="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="./listado_files/color-modes.js.descarga"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>CyberVoluntarios </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link href="./listado_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="icon" href="https://static.thenounproject.com/png/194335-200.png">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@300;400&family=Poppins:wght@300;400&display=swap');

        * {
            font-family: 'Josefin Sans', sans-serif;
        }

        :root,
        [data-bs-theme=light] {
            --bs-body-bg: #8ab0df;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .logo {
            display: flex;
            align-items: center;
        }


        a {
            text-decoration: none;
            padding-right: 30px;
        }

        .btn-outline-secondary {
            --bs-btn-color: #000000;
            --bs-btn-border-color: #000000;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #272727;
            --bs-btn-hover-border-color: #000000;
            --bs-btn-focus-shadow-rgb: 108, 117, 125;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #000000;
            --bs-btn-active-border-color: #000000;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #000000;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #000000;
            --bs-gradient: none;
        }

        #cyber {
            height: 50px;
            width: 70px;
            padding-right: 20px;
        }

        .lead_text-body-secondary {
            color: black;
        }
    </style>


</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#sun-fill"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true" style="color: black;">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    <p style="color: black;">Light</p>
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false" style="color: black;">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    <p style="color: black;">Dark</p>
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false" style="color: black;">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    <p style="color: black;">Auto</p>
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <header data-bs-theme="dark">
        <div class="collapse text-bg-dark" id="navbarHeader"> <!--debes estar-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 style="color:aliceblue">¿Qué somos?</h4>
                        <p class="text-body-secondary" style="color:aliceblue">Somos una organización sin fines de lucro que se dedica a ayudar a los más necesitados, y tu donación será utilizada para brindarles el apoyo que necesitan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar navbar-dark bg-dark shadow-sm"> <!--menu-->
            <div class="container">

                <div class="logo">
                    <img src="https://static.thenounproject.com/png/194335-200.png" style="height: 60px; width: 60px; margin: 5px" class="logo">
                    <div style="height: 20px;">
                        <h5 style="color:aliceblue">CyberVoluntarios</h5>
                    </div>

                </div>

                <div class="menu">
                    <p>
                        <a href="contact - copia.php" style="color: aliceblue; ">Contacto</a>
                        <a href="sobre_nosotros - copia.php" style="color:aliceblue; ">Sobre Nosotros</a>
                        <a href="home - copia.php" style="color: aliceblue; ">inicio</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"> <!--debes estar-->
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </p>


                </div>



            </div>
        </div>

    </header>

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light" style="color: black;">Animales</h1>
                    <p class="lead_text-body-secondary">En esta parte de la pagina podras encontrar las diferentes donaciones dirigidas hacia los distintos animales</p>
                    <button type="button" class="btn btn-sm btn-outline-secondary">quiero donar </button>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">

                                <img src="https://http2.mlstatic.com/D_NQ_NP_662429-MLA49565191794_042022-V.jpg" width="390px" height="220px">
                                <br></br>
                                <p class="card-text" style="color: black;">cucha para perro</p>
                                <p style="color : black ;">cucha de madera de 70cm x 120cm , color madera (no es madera de verdad ) </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button href="" type="button" class="btn btn-sm btn-outline-secondary">Contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_686540-MLA40643714998_022020-O.webp" width="390px" height="220px">
                                <br></br>
                                <p class="card-text" style="color: black;">10 Correas para perros</p>
                                <p style="color: black;">correas de distintos tamaños y colores , retirar en jujuy barrio lozano , de 7am a 4pm</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button href="" type="button" class="btn btn-sm btn-outline-secondary">Contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <img src="https://www.gentledogstyle.com/wp-content/uploads/2020/02/ropa-para-perro-19-2-350x350.jpg" width="390px" height="220px">
                                <br></br>
                                <p class="card-text" style="color: black;">Ropa para perro (estilo militar ) </p>
                                <p style="color: black;">ropa de perro estilo militar , para perro chiquito (caniches o salchicha ) , retirar en loma de zamora a las 4pm </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button href="" type="button" class="btn btn-sm btn-outline-secondary">contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <img src="https://www.cochikis.pe/wp-content/uploads/2021/08/chalecoclassicguinda-600x600.jpg" width="390px" height="220px">
                                <br></br>
                                <p class="card-text" style="color: black;">Ropa para gato</p>
                                <p style="color: black;">ropa para gato (invierno ) , la matanza , retirar de 9am a 2pm </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button href="" type="button" class="btn btn-sm btn-outline-secondary">Contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <img src="https://d3ugyf2ht6aenh.cloudfront.net/stores/929/283/products/_mg_9284r11-3bf067a235637cb4ed16266535319733-240-0.jpg" width="390px" height="220px">
                                <br></br>
                                <p class="card-text" style="color: black;">Cucha para gato </p>
                                <p style="color: black;">de 70cm x 21 cm peluda (algodon ) , tiene una mancha pero esta en perfecto estado </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button href="" type="button" class="btn btn-sm btn-outline-secondary">Contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_820102-MLA44080343703_112020-O.webp" width="390px" height="220px">
                                <br></br>
                                <p class="card-text" style="color: black;">Collar para perro y gato </p>
                                <p style="color: black;">collar para perro y gato con pañuelo rojo , el horario y ubicacion de retirada lo arreglamos </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button href="" type="button" class="btn btn-sm btn-outline-secondary">Contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            >
                            <div class="card-body">
                                <img src="https://http2.mlstatic.com/D_NQ_NP_800792-MLA48098755343_112021-O.jpg" width="390px" height="220px">
                                <br></br>
                                <p class="card-text" style="color: black;">comida para gato </p>
                                <p style="color: black;">comida para gato cat chow , 3kg , lugar de encuentro en CABA </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button href="" type="button" class="btn btn-sm btn-outline-secondary">Contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <img src="https://www.pedigree.com.mx/cdn-cgi/image/format%3Dauto%2Cq%3D90/sites/g/files/fnmzdf1501/files/2022-08/product-landing-hero-allBreeds.png" width="390px" height="243px">
                                <br></br>
                                <p class="card-text" style="color: black;">comida para perro </p>
                                <p style="color: black;">comida pedigree para perro adulto , biscrok , dentastix y raza pequeña </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button href="" type="button" class="btn btn-sm btn-outline-secondary">Contacto</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>

    <footer class="text-body-secondary py-5">



        <div class="container">

            <div>
                <p class="float-end mb-1">
                    <a href=""><img src="https://cdn-icons-png.flaticon.com/512/54/54213.png" style="width: 45px; height: 45px"></a>
                </p>
            </div>

            <div style="display:flex">
                <figure>
                    <img id="cyber" src="https://static.thenounproject.com/png/194335-200.png" height="80px" width="80px" style=" margin: 7px"></img>
                </figure>
                <div>
                    <h4 style="color: #000000;">CyberVoluntarios</h4>
                    <p style="color: #000000;">© 2023 CyberVoluntarios. All rights reserved.</p>
                    <p class="mb-0"><a href="" style="padding-right: 0px; color: black;">Terms of Service • </a><a href="" style="color: black;">Privacy Policy</a></p>
                </div>

            </div>

        </div>
    </footer>


    <script src="./listado_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>




</body>

</html>