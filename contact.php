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

    /* fondo degradadado */
    .inicio {
        background: linear-gradient(to bottom, #8ab0df, #ffffff);
        color: #000;
    }

    /*futer*/
    .futer {
        background: linear-gradient(to bottom, #ffffff, #8ab0df);
    }

    /*formulario*/
    .formulario {
        justify-content: center;
        max-width: 700px;
        width: 100%;
        background: #ffff;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        opacity: 0;
        transform: translateX(-50px);
        animation: slideFromLeft 5s ease-in-out forwards;
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
        border-radius: 8px;
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


<body>
    <header>
        <div class="logo">
            <img src="https://static.thenounproject.com/png/194335-200.png" style="height: 80px; width: 80px; padding: 5px; margin: 5px;">
            <strong style="font-size: 25px;">CYBERVOLUNTARIOS</strong>
        </div>
        <nav class="asuntos">
            <a href="home.php">Inicio</a>
            <a href="sobre_nosotros.php">Sobre Nosotros</a>
            <button class="btnlogin"><a href="login_register/index.php">Login</a></button>
        </nav>
    </header>

    <section class="py-5 text-center inicio">
        <div>
            <div class="col-lg-6 col-md-8 mx-auto informa">
                <img style="height: 180px; width: 180px; margin: 10px" src="https://www.iconpacks.net/icons/2/free-contact-icon-3018-thumb.png">
                <h1 class="fw-light">CONTACTO</h1>
                <p style="color: #000; font-size: 20px">Si deseas hacer una diferencia en la vida de personas y animales necesitados, contactarnos para donaciones es una excelente opción. Tu donación marcará la diferencia y te permitirá ser parte del cambio positivo en el mundo.</p>
            </div>
        </div>
    </section>

    <center>
        <section class="formulario" style="margin: 50px">
            <header>
                <strong style="font-size: 30px;">Contactanos</strong>
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
