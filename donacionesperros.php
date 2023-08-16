<!DOCTYPE html>

<head>

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

    /* fondo degradadado en */
    .inicio {
        background: linear-gradient(to bottom, #8ab0df, #ffffff);
        color: #000;
    }

    /* fondo degradadado en */
    .futer {
        background: linear-gradient(to bottom, #ffffff, #8ab0df);
    }

    /*informacion principal*/
    .informa {
        padding: 25px;
        opacity: 0;
        transform: translateX(-50px);
        animation: slideFromRight 4s ease-in-out forwards;
    }

    @keyframes slideFromRight {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /*productos a donar*/
    .articulos {
        opacity: 0;
        transform: translateY(-50px);
        animation: fadeFromTop 3s ease-in-out forwards;
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

    .articulos button {
        width: 90%;
        height: 60%;
        background: transparent;
        border: 2px solid #000;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
        color: #000;
    }

    .articulos button:hover {
        background: #000;
        color: rgb(255, 255, 255);
    }

    /*voluntarios*/
    .voluntario {
        padding: 25px;
        opacity: 0;
        transform: translateX(50px);
        animation: slideFromRight 7s ease-in-out forwards;
    }

    @keyframes slideFromRight {
        0% {
            opacity: 0;
            transform: translateX(50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .voluntario button {
        width: 50%;
        height: 15%;
        background: transparent;
        border: 2px solid #000;
        border-radius: 5px;
        cursor: pointer;
        font-size: 20px;
        color: #000;
    }

    .voluntario button:hover {
        background: #000;
        color: rgb(255, 255, 255);
    }

    /*puntos de encuentro*/
    .puntos {
        padding: 25px;
        opacity: 0;
        transform: translateX(-50px);
        animation: slideFromRight 8s ease-in-out forwards;
    }

    @keyframes slideFromRight {
        0% {
            opacity: 0;
            transform: translateX(-50px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .puntos button {
        width: 20%;
        height: 18%;
        background: transparent;
        border: 2px solid #000;
        border-radius: 6px;
        cursor: pointer;
        font-size: 20px;
        color: #000;
        margin-right: 30px;
    }

    .puntos button:hover {
        background: #000;
        color: rgb(255, 255, 255);
    }
</style>

<body>
    <header>
        <div class="logo">
            <img src="https://static.thenounproject.com/png/194335-200.png" style="height: 80px; width: 80px; padding: 5px; margin: 5px;">
            <strong style="font-size: 25px;">CYBERVOLUNTARIOS</strong>
        </div>
        <nav class="asuntos">
        <a href="home copy.php">Inicio</a>
            <a href="contact copy.php">Contacto</a>
            <a href="sobre_nosotros copy.php">Sobre Nosotros</a>
            <a href="publicaciones.php">Publicaciones</a>
        </nav>
    </header>

    <main> <!--para contenido principal-->
        <section class="py-5 text-center inicio">
            <div>
                <div class="col-lg-6 col-md-8 mx-auto informa">
                    <img style="height: 180px; width: 180px; margin: 10px" src="https://cdn-icons-png.flaticon.com/512/2913/2913494.png">
                    <h1 class="fw-light">ANIMALES</h1>
                    <p style="color: #000; font-size: 20px">En esta parte de la pagina podras encontrar las diferentes donaciones dirigidas hacia los distintos animales que quieras ayudar.</p>
                </div>
            </div>
        </section>

        <div class="articulos" style="margin: 20px;">
            <div class="container">
                <center><strong style="font-size: 30px;">QUIERO DONAR..</strong></center>
                <br>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-4"> <!--para dividir las columnas de los articulos-->
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://cdn-icons-png.flaticon.com/512/2700/2700602.png" style="width: 90%; height: 90%; margin: 15px">
                                <br></br>
                                <center><button type="button">COMIDA</button></center>
                                <br>
                                <p>Dona alimentos y proporciona una nutrición vital para nuestros amigos peludos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://cdn-icons-png.flaticon.com/512/2137/2137583.png" style="width: 90%; height: 90%; margin: 15px">
                                <br></br>
                                <center><button type="button">ARTICULOS</button></center>
                                <br>
                                <p>Dona casitas, juguetes, ropa y más para brindarles confort y felicidad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://cdn-icons-png.flaticon.com/512/2916/2916201.png" style="width: 90%; height: 90%; margin: 15px">
                                <br></br>
                                <center><button type="button">DINERO</button></center>
                                <br>
                                <p>Tu contribución financiera nos permite rescatar, cuidar y encontrar hogares para aquellos que lo necesitan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="https://cdn-icons-png.flaticon.com/512/2834/2834155.png" style="width: 90%; height: 90%; margin: 15px">
                                <br></br>
                                <center><button type="button">MEDICAMENTOS</button></center>
                                <br>
                                <p>Tu donación de vendajes y medicamentos ayuda a los animales heridos a sanar y recuperarse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br></br>

        <div class="voluntario">
            <div class="container">
                <div class="row py-lg-9" style="padding-left: 250px">
                    <img style="height: 300px; width: 320px;" src="https://cdn-icons-png.flaticon.com/512/571/571825.png" alt="">
                    <div class="col-lg-7">
                        <br></br><br>
                        <button type="button" class="btn">QUIERO SER VOLUNTARIO</button>
                        <br></br>
                        <p>Únete como voluntario y brinda amor, cuidado y atención a los que mas lo necesitan, tanto animales como personas. ¡Únete a nosotros y sé la voz de aquellos que no pueden hablar!</p>
                    </div>
                </div>
            </div>


        </div>

        <br></br>

        <div class="puntos">
            <div class="container">
                <center><strong style="font-size: 30px;">PUNTOS DE ENCUENTRO</strong></center>
                <br>
                <div class="row py-lg-9" style="padding-left: 250px">
                    <img style="height: 220px; width: 240px;" src="https://cdn-icons-png.flaticon.com/512/149/149442.png" alt="">
                    <div class="col-lg-7">
                        <br>
                        <b>
                            <p>Punto de encuentro: escuela técnica 26 av Jujuy (ej)</p>
                        </b>
                        <p>Morbi eget metus vel felis sodales venenatis. Aenean massa nunc, commodo tempor magna, tincidunt aliquet exquis...</p>
                        <button type="button" class="btn-comida">VER MÁS</button>
                    </div>
                </div>
                <br>
                <div class="row py-lg-9" style="padding-left: 250px">
                    <img style="height: 220px; width: 240px;" src="https://cdn-icons-png.flaticon.com/512/149/149442.png" alt="">
                    <div class="col-lg-7">
                        <br>
                        <b>
                            <p>Punto de encuentro: Buenos Aires san Telmo, carlos calvo 632 (ej)</p>
                        </b>
                        <p>Morbi eget metus vel felis sodales venenatis. Aenean massa nunc, commodo tempor magna, tincidunt aliquet exquis...</p>
                        <button type="button" class="btn-comida">VER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

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

</body>

</html>
