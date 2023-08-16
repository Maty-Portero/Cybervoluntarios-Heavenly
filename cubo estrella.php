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


    /*producto donado*/
    .producto {
        display: flex;
        width: 75%;
        background: #ffff;
        padding: 24px;
        border-radius: 15px;
        opacity: 0;
        transform: translateX(-50px);
        animation: slideFromLeft 1s ease-in-out forwards;
    }


    .info-prod {
        border: 1px solid #000000;
        width: 100%;
        height: 100%;
    }


    .info-prod button {
        width: 100%;
        height: 45px;
        background: transparent;
        border: 2px solid #000;
        border-radius: 6px;
        cursor: pointer;
        font-size: 18px;
        color: #000;
        margin-right: 30px;
    }


    .info-prod button:hover {
        background: #000;
        color: rgb(255, 255, 255);
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


    .info-product button {
        width: 95%;
        height: 50px;
        background: transparent;
        border: 2px solid #000;
        border-radius: 6px;
        cursor: pointer;
        font-size: 20px;
        color: #000;
        margin-right: 30px;
    }


    .info-product button:hover {
        background: #000;
        color: rgb(255, 255, 255);
    }


    /*articulos*/
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


    .imagen-product {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        margin: 15px;
        border: 2px solid #000000;
    }


    .imagen-product:hover {
        transform: scale(1.1);
    }






    .image-zoom {
        width: 500px;
        height: 300px;
        position: relative;
        overflow: hidden;
    }


    .zoom-area {
        width: 250px;
        height: 150px;
        position: absolute;
        border: 2px solid #333;
        background-image: url('imagen.jpg');
        background-size: 1000px 600px;
        background-position: 0 0;
        transition: background-position 0.3s ease;
    }


    .zoom-area:hover {
        background-position: -250px -150px;
    }


    .lugar {
        display: flex;
        align-items: center;
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
            <a href="publicaciones.php">Publicaciones</a>
            <a href="contact copy.php">Contacto</a>
            <a href="sobre_nosotros copy.php">Sobre Nosotros</a>
        </nav>
    </header>


    <section class="py-5 text-center inicio">
        <div>
            <div class="col-lg-6 col-md-8 mx-auto informa">
                <center>
                    <div class="imagen-circular">
                        <img src="https://i.pinimg.com/236x/65/36/72/653672eea0fefa046332dd21e9396d57.jpg" alt="Imagen">
                    </div>
                </center>
                <br>
                <h2 class="fw-light">Tomas koltan</h2>
            </div>
        </div>
    </section>


    <section class="producto" style="margin-left: 12%">
        <img src="https://elmundodelasmascotas.com.ar/wp-content/uploads/2023/05/WhatsApp-Image-2022-02-02-at-11.42.57-300x300.jpeg" style="width: 30%; height: 40%" class="imagen-product">
        <div class="info-product" style="margin: 20px">
            <h2>Cubo reversible chico estrella 40CM X 40CM</h2>
            <br>
            <p>Lorem ipsum dolor sit, reiciendis maxime assumenda quos cupiditate, laudantium aliquam fugit quis culpa molestias voluptatum accusamus.</p>
            <p>Condición: usado</p>
            <p>Tela: algodon</p>
            <p>Stock: 3 disponibles</p>
            <button class="solicitar">Contactar</button>
        </div>
        <section>
            <div class="info-prod" style="padding: 30px">
                <div class="lugar">
                    <img src="https://cdn-icons-png.flaticon.com/512/709/709806.png?w=360" style="width: 10%; height: 6%; margin: 5px;">
                    <h4>Llega <b>mañana</b></h4>
                </div>
                <p>assumenda quos cupiditate, laudantium accusamus.</p>


                <div class="lugar">
                    <img src="https://cdn-icons-png.flaticon.com/512/1671/1671004.png" style="width: 10%; height: 6%; margin: 5px">
                    <h4>Retirar el <b>jueves</b> en
                        <br><b>Av. Cobo 800</b></< /h4>
                </div>
                <p>assumenda quos cupiditate, laudantium accusamus.</p>
                <br><br><br>
                <button class="solicitar">Solicitar donación</button>
                <br><br>
                <button class="solicitar">Añadir al carrito</button>
            </div>
        </section>
    </section>

    <br></br>

    <div class="articulos" style="margin: 20px;">
        <div class="container">
            <center><strong style="font-size: 30px;">Otras donaciones</strong></center>
            <br>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-4"> <!--para dividir las columnas de los articulos-->
                <div class="col">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="https://blog.trapitos.com.ar/images/qAKeHGn35cXXedp8stpck2i4TQYP0dYYqBePNbyN.jpeg" style="width: 90%; height: 90%; margin: 15px">
                            <br>
                            <h5 style="padding-bottom: 5px;">Juguete para perro</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis quisquam quasi distinctio fugiat.</p>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aliquid.</p>
                            <center><button type="button"><a href="rascador de gato.php">VER MÁS</a></button></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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