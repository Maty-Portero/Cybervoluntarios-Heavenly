<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="./Album example · Bootstrap v5.3_files/color-modes.js.descarga"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">

    <link rel="icon" href="https://static.thenounproject.com/png/194335-200.png">
    <title>cybervoluntarios</title>

    <link href="./Album example · Bootstrap v5.3_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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

    /* fondo degradadado */
    .inicio {
        background: linear-gradient(to bottom, #8ab0df, #ffffff);
        color: #000;
    }

    /*futer*/
    .futer {
        background: linear-gradient(to bottom, #ffffff, #8ab0df);
    }

    /*infor*/
    .animales {
        opacity: 0;
        transform: translateY(-50px);
        animation: fadeFromTop 6s ease-in-out forwards;
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

    .personas {
        opacity: 0;
        transform: translateY(-50px);
        animation: fadeFromTop 5s ease-in-out forwards;
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

    .infor button {
        width: 50%;
        height: 15%;
        background: transparent;
        border: 2px solid #000;
        border-radius: 15px;
        cursor: pointer;
        font-size: 100%;
        color: #000;
        margin-right: 30px;
    }

    .infor button:hover {
        background: #000;
        color: rgb(255, 255, 255);
    }


    .informa {
        padding: 25px;
        opacity: 0;
        transform: translateX(-50px);
        animation: slideFromLeft 4s ease-in-out forwards;
    }

    @keyframes slideFromLeft {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>


<body>
    <header>
        <div class="logo">
            <img src="https://static.thenounproject.com/png/194335-200.png" style="height: 80px; width: 80px; padding: 5px; margin: 5px;">
            <strong style="font-size: 25px;">CYBERVOLUNTARIOS</strong>
        </div>
        <nav class="asuntos">
            <a href="login_register/index.php">Publicaciones</a>
            <a href="contact.php">Contacto</a>
            <a href="sobre_nosotros.php">Sobre Nosotros</a>
            <button class="btnlogin"><a href="login_register/index.php">Login</a></button>
        </nav>
    </header>

    <main> <!--para contenido principal-->
        <section class="py-5 text-center inicio">
            <div>
                <div class="col-lg-6 col-md-8 mx-auto informa">
                    <img style="height: 180px; width: 180px; margin: 10px" src="https://static.thenounproject.com/png/194335-200.png">
                    <h1 class="fw-light">CYBERVOLUNTARIOS</h1>
                    <h3 class="fw-light">¿que somos?</h3>
                    <p style="color: #000; font-size: 20px">Somos una organización sin fines de lucro que se dedica a ayudar a los más necesitados, y tu donación será utilizada para brindarles el apoyo que necesitan.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 infor" style="padding: 10px;">
            <div class="container">
                <div class="row py-lg-9 personas" style="padding-left: 200px">
                    <img style="height: 290px; width: 320px; " src="https://cdn-icons-png.flaticon.com/512/878/878820.png" alt="">
                    <div class="col-lg-7 col-md-8">
                        <br></br>
                        <h3 class="fw-light">Personas</h3>
                        <p>Si estás buscando maneras de marcar la diferencia y apoyar a las personas que más lo necesitan, considera hacer una donación. ¡Haz una donación hoy y haz una diferencia en la vida de alguien!</p>
                        <button class="btn2"><a href="login_register/index.php">QUIERO AYUDAR A LOS DEMÁS</a></button>
                    </div>
                </div>
                <br>
                <div class="row py-lg-9 animales" style="padding-left: 200px">
                    <img style="height: 290px; width: 320px; " src="https://cdn-icons-png.flaticon.com/512/2913/2913494.png" alt="">
                    <div class="col-lg-7 col-md-8">
                        <br></br>
                        <h3 class="fw-light">Animales</h3>
                        <p>Si eres un amante de los animales y te preocupa su bienestar, considera hacer una donación. ¡Haz una donación hoy y ayúdanos a proteger y cuidar a los animales!</p>
                        <button class="btn2"><a href="login_register/index.php">QUIERO AYUDAR A LOS ANIMALES</a></button>
                    </div>
                </div>
            </div>


        </div>
    </main>

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

</body>

</html>
