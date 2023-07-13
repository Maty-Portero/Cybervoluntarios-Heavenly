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
            animation: fadeIn 2s ease-in forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
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

        .formulario {
            justify-content: center;
            max-width: 700px;
            width: 100%;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateX(-50px);
            animation: slideFromLeft 2s ease-in-out forwards;
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

        .formulario header {
            color: #333;
            text-align: center;
            height: 50px;
        }

        .container .form {
            margin-top: 30px;
        }

        .form .input-box {
            width: 100%;
            margin-top: 20px;
        }

        .form :where(.input-box input, .select-box) {
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 15px;
        }

        .form :where(.gender-option, .gender) {
            display: flex;
            align-items: center;
            column-gap: 50px;
            flex-wrap: wrap;
        }

        .form .gender {
            column-gap: 5px;
        }

        .form :where(.gender input, .gender label) {
            cursor: pointer;
        }

        .address :where(input, .select-box) {
            margin-top: 15px;
        }

        .select-box select {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            color: #707070;
            font-size: 1rem;
        }

        .form button {
            height: 55px;
            width: 100%;
            color: #000;
            margin-top: 30px;
            cursor: pointer;
            background: transparent;
            border: 2px solid #000;
            font-size: 20px;
            transition: all 0.2s ease;
        }

        .form button:hover {
            background: #000;
            color: rgb(255, 255, 255);
        }

        /*Responsive*/
        @media screen and (max-width: 500px) {
            .form .column {
                flex-wrap: wrap;
            }

            .form :where(.gender-option, .gender) {
                row-gap: 15px;
            }
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
            <a href="sobre_nosotros.php">Sobre Nosotros</a>
            <button class="btnlogin"><a href="../login_register/index.php">Login</a></button>
        </nav>
    </header>

    <section class="py-5 text-center inicio">
        <div>
            <div class="col-lg-6 col-md-8 mx-auto">
                <img style="height: 180px; width: 180px;" src="https://www.iconpacks.net/icons/2/free-contact-icon-3018-thumb.png">
                <br>
                <strong style="font-size: 30px;">CONTACTO</strong>
                <p style="color:aliceblue;" class="lead text-body-secondary">Si deseas hacer una diferencia en la vida de personas y animales necesitados, contactarnos para donaciones es una excelente opción. Tu donación marcará la diferencia y te permitirá ser parte del cambio positivo en el mundo.</p>
            </div>
        </div>
    </section>

    <center>
        <section class="formulario" style="margin: 50px">
            <header>
                <h2>Contactanos</h2>
            </header>
            <form action="#" class="form">
                <div class="input-box">
                    <input type="text" placeholder="Ingrese su nombre y apellido" required />
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Ingrese su correo electronico" required />
                </div>

                <div class="column">
                    <div class="input-box">
                        <input type="number" placeholder="Ingrese su numero de telefono" required />
                    </div>
                </div>
                <div class="input-box address">
                    <input type="text" placeholder="Ingrese su dirección" required />
                    <div class="column">
                        <div class="select-box">
                            <select>
                                <option hidden>Provincia</option>
                                <option>Buenos aires</option>
                                <option>Mendoza</option>
                                <option>Cordoba</option>
                                <option>Corrientes</option>
                            </select>
                        </div>
                        <input type="number" placeholder="Ingrese su codigo postal" required />
                    </div>
                </div>
                <div class="input-box">
                    <input style="height: 100px" type="text" placeholder="Ingrese su mensaje" required />
                </div>
                <button>Enviar</button>
            </form>
        </section>
    </center>




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