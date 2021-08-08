<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/diseño-invitaciones.css" .css>
    <title>Invitaciones</title>
</head>

<body>
    <div class="banner">
        <ul class="nav nav-pills nav-fill ">
            <li class="nav-item d-flex ">
                <a class="align-self-center nav-link" href="productos.html"><img class="flecha" src="estilos/imagenes/flechaatras.png" alt=""></a>
            </li>
            <li class="nav-item d-flex">
                <a class="align-self-center nav-link text-dark h5" href="index.html">Inicio</a>
            </li>
            <li class="nav-item d-flex">
                <a class="align-self-center nav-link text-dark h5" href="inicio-sesion.html">Inicia sesión o <br>
                    Regístrate</a>
            </li>
            <li class="nav-item d-flex">
                <a class="align-self-center nav-link" href="#"> <img class="logo" src="estilos/imagenes/logo.png" alt=""> </a>
            </li>
            <li class="nav-item d-flex">
                <a class="align-self-center nav-link text-dark h5" href="servicios.html">Servicios</a>
            </li>
            <li class="nav-item d-flex">
                <a class="align-self-center nav-link text-dark h5 active bg-warning" aria-current="page" href="productos.html">Productos</a>
            </li>
            <li class="nav-item d-flex">
                <a class="align-self-center nav-link" href="carrito.html"><img class="carro" src="estilos/imagenes/carrito.png" alt=""></a>
            </li>
            <li class="nav-item">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: aqua; margin-top: 1vh;">
                        <img class="perf" src="estilos/imagenes/perf-icon.png" alt="" style="width: 3vw;">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="perfil.html">MI PERFIL</a></li>
                        <li><a class="dropdown-item" href="#">MI PEDIDO</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="inicio-sesion.html">CERRAR SESIÓN</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <DIV class="fondo">
        <div>
            <section class="item">Recuerda iniciar sesión para empezar a trabajar con nosotros</section>
        </div>
        <div>
            <section class="item2">Invitaciones</section>
        </div>
        <form>
            <div class="container row align-items-start">
                <div class="mb-3 row">
                    <label for="Tipoevento" class=" mb-3 form-label">Tipo de evento</label> <br>
                    <select class="form-select" id="tipoevento">
                        <option selected>Selecciona uno</option>
                        <option value="1">Cumpleaños</option>
                        <option value="2">XV Años</option>
                        <option value="3">Boda</option>
                        <option value="4">Primera comunión</option>
                        <option value="5">Bautizo</option>
                        <option value="6">Baby shower</option>
                        <option value="7">Reunion formal</option>
                    </select>
                </div>

                <div>
                    <div class="mb-3 row">
                        <label id="fech" for="Fechaevento" class=" mb-3 form-label">Fecha del evento</label>
                        <input type="date" min="datetime-local" id="fecha">
                    </div>
                    <div class="mb-3 row">
                        <label id="leve" for="Lugarevento" class=" mb-3 form-label">Lugar del evento</label>
                        <input type="text" class="form-control" id="lugarevento" cols="50" rows="5">
                    </div>
                    <div>
                        <div class="mb-3 row">
                            <label id="neve" for="Nombrevento" class=" mb-3 form-label">Nombre del evento </label>
                            <input type="text" class=" mb-3 form-control" data-toggle="popover" data-trigger="focus" data-content="Aquí también puede ir el nombre del festejad@" id="nombrevento" cols="50" rows="2">
                        </div>
                    </div>
                    <div class="container row align-items-start">
                        <label id="fra" for="Frase" class="mb-3 form-label">Frase conmemorativa</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">No</label>
                        </div>
                        <div class=" mb-3 row">
                            <textarea class="form-control" id="nombrevento" cols="50" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>




            <div class="card-group" id="invitac">
                <?php include_once("../public/controller/mosinvitaciones.php"); ?>
                <?php foreach ($diseñosproducto as $producto) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="estilos/imagenes/stickercump.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto->nombredispro ?></h5>
                            <label for="Cantidadinvita" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantinv" cols="4" rows="1">
                            <br>
                            <a href="#" class="btn btn-primary">Añadir a carrito</a>
                        </div>
                    </div>
                  
                <?php } ?>
            </div>
        </form>

        <footer class="text-center text-lg-start bg-light text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                    <span>Mantente en contacto con nosotros:</span>
                </div>
            </section>

            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>D'talles
                            </h6>
                            <p>
                                Aqui podras encontrar todo tipo de productos y servicios para tu fiesta o evento.
                            </p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Links
                            </h6>
                            <p>
                                <a href="index.html" class="text-reset">Inicio</a>
                            </p>
                            <p>
                                <a href="servicios.html" class="text-reset">Servicios</a>
                            </p>
                            <p>
                                <a href="productos.html" class="text-reset">Productos</a>
                            </p>
                            <p>
                                <a href="carrito2.html" class="text-reset">Pedidos</a>
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                            <h6 class="text-uppercase fw-bold mb-4">
                                Preguntas Frecuentes
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">¿Como pedir?</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">¿Como pagar?</a>
                            </p>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contacto
                            </h6>
                            <p><i class="fas fa-home me-3"></i> Torreon, Coahuila, Mexico</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i> info@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> +52 871 328 2850</p>
                            <p><i class="fas fa-print me-3"></i> +52 871 710 6290</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:D'talles,Inc.
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Terminos</a>
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Privacidad</a>
                <div class="social">
                    <a href="https://www.facebook.com/dtallees" target="blank"><img src="estilos/imagenes/facebook.svg" alt="facebook"></a>
                    <a href="https://www.instagram.com/dtallees/" target="blank"><img src="estilos/imagenes/instagram.svg" alt="instagram"></a>
                </div>
            </div>
        </footer>
    </DIV>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>





</body>



</html>