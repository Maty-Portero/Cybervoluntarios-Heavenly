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
            <a href="publicaciones.php">Publicaciones</a>
            <a href="contact copy.php">Contacto</a>
            <a href="home copy.php">Inicio</a>
            <a href="sobre_nosotros copy.php">Sobre Nosotros</a>
        </nav>
    </header>


    <section class="py-5 text-center inicio">
        <div>
            <div class="col-lg-6 col-md-8 mx-auto informa">
                <center>
                    <div class="imagen-circular">
                        <img src="data:image/jpeg;base64,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" alt="Imagen">
                    </div>
                </center>
                <br>
                <h2 class="fw-light">Soriacrack27</h2>
            </div>
        </div>
    </section>


    <section class="producto" style="margin-left: 12%">
        <img src="https://blog.trapitos.com.ar/images/qAKeHGn35cXXedp8stpck2i4TQYP0dYYqBePNbyN.jpeg" style="width: 30%; height: 40%" class="imagen-product">
        <div class="info-product" style="margin: 20px">
            <h2>juguete para perro</h2>
            <br>
            <p>Lorem ipsum dolor sit, reiciendis maxime assumenda quos cupiditate, laudantium aliquam fugit quis culpa molestias voluptatum accusamus.</p>
            <p>condicion: usado</p>
            <p>tela: algodon</p>
            <p>stock: 3 disponibles</p>
            <p>tela: algodon</p>
            <button class="solicitar">contactar</button>
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
                <button class="solicitar">añadir al carrito</button>
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
                            <img src="https://elmundodelasmascotas.com.ar/wp-content/uploads/2023/05/WhatsApp-Image-2022-02-02-at-11.42.57-300x300.jpeg" style="width: 90%; height: 90%; margin: 15px">
                            <br>
                            <h5 style="padding-bottom: 5px;">Cubo reversible chico estrella 40CM X 40CM</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque corporis quisquam quasi distinctio fugiat.</p>
                            <center><button type="button"><a href="cubo estrella.php">VER MÁS</a></button></center>
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
