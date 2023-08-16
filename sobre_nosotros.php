<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/5.3/examples/album/ -->

<head>
    <link rel="icon" href="https://static.thenounproject.com/png/194335-200.png">
    <title>cybervoluntarios about us</title>
    <link href="./Album example · Bootstrap v5.3_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
            <a href="home.php">HOME</a>
            <a href="contact.php">Contacto</a>
            <button class="btnlogin"><a id="btnlogin" href="../login_register/index.php">Login</a></button>
        </nav>
    </header>

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">

                <div class="col-lg-6 col-md-8 mx-auto">
                    <img style="height: 160px; width: 160px; margin-bottom: 20px;" src="https://static.thenounproject.com/png/194335-200.png">
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
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhEkCkJzFpjWZJcbiyABuAP7mYye0rUFlbhc96k1akxwrq3nxzv4dsWJTfTMAN_OkH&usqp=CAU">
                            <div class="card-body">
                                <p class="card-text" style="color: black;"><b>Matías Portero</b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p>
                                        <b>Scrum Master</b> <br>
                                        - Jugador de F1 y Gran Turismo <br>
                                        - Fanático de todo lo Italiano <br>
                                        - Le encanta 2Pac, Trueno y Sainté <br>
                                        - Fanático del Momo, Santutu y de Carrera
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 400px;">
                        <div class="card shadow-sm">
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="https://i.pinimg.com/1200x/8e/d2/ba/8ed2ba99a97a34b1729bc26454e530c5.jpg">
                            <div class="card-body">
                                <p class="card-text" style="color: black;"><b>Gabriela Plata</b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p>
                                            <b>Diseñadora y programadora</b> <br>
                                            - Loquita por el diseño <br>
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
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="data:image/jpeg;base64,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">
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
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="https://i.pinimg.com/236x/52/52/cd/5252cd3d06901864bc1d9f0356b0b0fa.jpg">
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
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="https://images.genius.com/998b5d79c69cb548c64f52ddf188d09f.500x500x1.jpg">
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
                                            - "Que asco los autos" <br>
                                            - Amateur en basquet (juego en Huracán)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" style="width: 400px;">
                        <div class="card shadow-sm">
                            <img style="height: 200px; width: 200px; margin-bottom: 20px; padding-left: 20px; padding-top: 20px;" src="https://lh3.googleusercontent.com/a-/AD_cMMSkfacmN8svUfB9ZCbC1eNfotXIWIXqlD--hVXASsx5fLA=s64-p-k-rw-no">
                            <div class="card-body">
                                <p class="card-text" style="color: black;"><b>Gino Mazzaglia</b></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p>
                                            <b>Programador</b> <br>
                                            - Le gustan los gatos <br>
                                            - Se la pasa leer mangas <br>
                                            - Amante de los videojuegos <br>
                                            - Es un enano de 1.63m 
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