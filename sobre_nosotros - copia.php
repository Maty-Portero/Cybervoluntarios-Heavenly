<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/5.3/examples/album/ -->

<head>
    <link rel="icon" href="https://static.thenounproject.com/png/194335-200.png">
    <title>cybervoluntarios about us</title>
    <link href="listado_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@300;400&family=Poppins:wght@300;400&display=swap');

        * {
            font-family: 'Josefin Sans', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #8ab0df;
        }

        header {
            top: 0;
            left: 0;
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
        }

        .logo img {
            height: 80px;
            width: 80px;
            padding: 5px;
            margin: 5px;
        }

        .asuntos a {
            position: relative;
            font-size: 20px;
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

        #btnlogin:hover {
            color: #fff;
        }
    </style>

</head>

<body>

    <header>
        <div class="logo">
            <img src="https://static.thenounproject.com/png/194335-200.png">
            <strong style="font-size: 25px;">CYBERVOLUNTARIOS</strong>

        </div>
        <nav class="asuntos">
            <a href="home - copia.php">HOME</a>
            <a href="contact - copia.php">Contacto</a>
            <button class="btnlogin"><a href="../login_register/index.php">Cerrar Sesion</a></button>
        </nav>
    </header>

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">

                <div class="col-lg-6 col-md-8 mx-auto">
                    <img style="height: 160px; width: 160px; margin-bottom: 20px;" src="us-removebg-preview.png">
                    <br>
                    <strong style="font-size: 30px;">Sobre Nosotros</strong>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col" style="width: 400px;">
                        <div class="card shadow-sm">
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="yo.jpeg">
                            <div class="card-body">
                                <p class="card-text" style="color: black;"><b>Matías Portero</b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>
                                        <b>Scrum Master</b> <br>
                                        - Jugador de F1 <br>
                                        - Top 10 programadores <br>
                                        - No le gusta ser manipulado <br>
                                        - Le encanta 2Pac, Milo J y Trueno <br>
                                        - Fanático de Coscu y de DJMariio
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 400px;">
                        <div class="card shadow-sm">
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="gabi.jpeg">
                            <div class="card-body">
                                <p class="card-text" style="color: black;"><b>Gabriela Plata</b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p>
                                            <b>Diseñadora y programadora</b> <br>
                                            - Loquita por el diseño <br>
                                            - Mala en ajedrez <br>
                                            - Buena en volley <br>
                                            - Ama los animales <br>
                                            - Prefiere el yogurt de vainilla <br>
                                            - Loquita por Artic Monkeys <br>
                                            - Fanática de el Spreen y Roier
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 400px;">
                        <div class="card shadow-sm">
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="bau-removebg-preview.png">
                            <div class="card-body">
                                <p class="card-text" style="color: black;"><b>Bautista Lobo</b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p>
                                            <b>Programador</b> <br>
                                            - Top 3 programadores <br>
                                            - Muy bueno en codificación <br>
                                            - Si no se hace lo que dice te mete 5 piñas <br>
                                            - Muy contradictorio a la hora de codificar
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 400px;">
                        <div class="card shadow-sm">
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="nai-removebg-preview.png">
                            <div class="card-body">
                                <p class="card-text" style="color: #000000;"><b>Nairel Ortega</b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p>
                                            <b>Diseñadora y programadora</b> <br>
                                            - Le gustan los michis <br>
                                            - Ama a Taylor Swift y One Direction <br>
                                            - Robadora de busos profesional <br>
                                            - Buena persona <br>
                                            - Prefiere el yogurt de vainilla
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 400px;">
                        <div class="card shadow-sm">
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="tomi.jpeg">
                            <div class="card-body">
                                <p class="card-text" style="color: black;"><b>Tomas Gianonni</b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p>
                                            <b>Programador</b> <br>
                                            - Top 1 programadores <br>
                                            - Odia a todos <br>
                                            - Muy bueno en codificación <br>
                                            - Le gustan los animales <br>
                                            - "Que asco los autos"
                                        </p>
                                    </div>
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
                    <img id="cyber" src="https://static.thenounproject.com/png/194335-200.png" style="margin: 8px; height:100px; width:125px;"></img>
                </figure>
                <div>
                    <h4 style="color: #000000;">CyberVoluntarios</h4>
                    <p style="color: #000000;">© 2023 CyberVoluntarios. All rights reserved.</p>
                    <p class="mb-0"><a href="" style="padding-right: 0px;">Terms of Service</a> • <a href="">Privacy Policy</a></p>
                </div>

            </div>

        </div>
    </footer>

    <script src="./Album example · Bootstrap v5.3_files/bootstrap.bundle.min.js.descarga" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>