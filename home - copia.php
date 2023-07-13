<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/5.3/examples/album/ -->

<head>
    <link rel="icon" href="https://static.thenounproject.com/png/194335-200.png">
    <title>cybervoluntarios</title>
    <link href="listado_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Instrument+Sans&display=swap');

        * {
            font-family: 'Instrument Sans', sans-serif;
        }

        body {
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

        .infor {
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeFromTop 1s ease-in-out forwards;
        }
        @keyframes fadeFromTop {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
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

        .up a {
            scroll-behavior: smooth;
        }

        .inicio {
            background: linear-gradient(to bottom, #8ab0df, #ffffff);
        }

        .futer {
            background: linear-gradient(to bottom, #ffffff, #8ab0df);
        }

        .btn2 {
            width: 360px;
            height: 50px;
            background: transparent;
            border: 2px solid #000;
            border-radius: 25px;
            cursor: pointer;
            font-size: 20px;
            color: #000;
            margin-right: 30px;
        }

        .btn2:hover {
            background: #000;
            color: rgb(255, 255, 255);
        }

        .btn3 {
            width: 390px;
            height: 50px;
            background: transparent;
            border: 2px solid #000;
            border-radius: 25px;
            cursor: pointer;
            font-size: 20px;
            color: #000;
            margin-right: 30px;
        }

        .btn3:hover {
            background: #000;
            color: rgb(255, 255, 255);
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
            <a href="contact - copia.php">Contacto</a>
            <a href="sobre_nosotros - copia.php">Sobre Nosotros</a>
            <button class="btnlogin"><a href="../login_register/index.php">Cerrar Sesion</a></button>
        </nav>
    </header>

    <main>
        <section class="py-5 text-center inicio">
            <div>
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img style="height: 180px; width: 180px; margin-bottom: 15px;" src="https://static.thenounproject.com/png/194335-200.png">
                    <br>
                    <strong style="font-size: 30px;">CYBERVOLUNTARIOS</strong>
                    <h3 class="fw-light">¿Que somos?</h3>
                    <p style="color:aliceblue;" class="lead text-body-secondary">Somos una organización sin fines de lucro que se dedica a ayudar a los más necesitados, y tu donación será utilizada para brindarles el apoyo que necesitan.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 infor">
            <section class="py-5 container">
                <div class="row py-lg-9">
                    <img style="height: 290px; width: 320px;" src="https://cdn-icons-png.flaticon.com/512/878/878820.png" alt="">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h3 class="fw-light">Personas</h3>
                        <p style="color:aliceblue;" class="lead text-body-secondary">Si estás buscando maneras de marcar la diferencia y apoyar a las personas que más lo necesitan, considera hacer una donación. ¡Haz una donación hoy y haz una diferencia en la vida de alguien!</p>
                        <button class="btn2"><a href="donaciones.php">QUIERO AYUDAR A LOS DEMÁS</a></button>
                    </div>
                </div>
            </section>
            <section class="py-5 text-right container">
                <div class="row py-lg-9">
                    <img style="height: 290px; width: 320px; display: flex; justify-content: flex-end;" src="https://cdn-icons-png.flaticon.com/512/2913/2913494.png" alt="">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h3 class="fw-light">Animales</h3>
                        <p style="color:aliceblue;" class="lead text-body-secondary">Si eres un amante de los animales y te preocupa su bienestar, considera hacer una donación. ¡Haz una donación hoy y ayúdanos a proteger y cuidar a los animales!</p>
                        <button class="btn3"><a href="donacionesperros.php">QUIERO AYUDAR A LOS ANIMALES</a></button>
                    </div>
                </div>
            </section>
        </div>

    </main>

    <footer class="futer py-5" style="height: 250px; padding-top: 60px; display: flex;">
        <div class="container">
            <div class="up">
                <p class="float-end mb-1">
                    <a href=""><img src="https://cdn-icons-png.flaticon.com/512/54/54213.png" style="width: 45px; height: 45px"></a>
                </p>
            </div>

            <div style="display:flex">
                <figure>
                    <img id="cyber" src="https://static.thenounproject.com/png/194335-200.png" height="100px" width="100px" style=" margin: 8px"></img>
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