<?php
 require('../srcphp/verificarsesion.php')
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/diseño-inicio-sesion.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio de sesion</title>
</head>

<body>
    <div class="fondo">
        <div class="banner">
            <ul class="nav nav-pills nav-fill ">
                <li class="nav-item d-flex">
                    <a class="align-self-center nav-link text-dark h5" href="index.html">Inicio</a>
                </li>
                <li class="nav-item d-flex">
                    <a class="align-self-center nav-link text-dark  active bg-warning h5" aria-current="page" href="inicio-sesion.html">Inicia sesión o <br>
                        Regístrate</a>
                </li>
                <li class="nav-item d-flex">
                    <a class="align-self-center nav-link" href="#"> <img class="logo" src="estilos/imagenes/logo.png" alt=""> </a>
                </li>
                <li class="nav-item d-flex">
                    <a class="align-self-center nav-link text-dark h5" href="servicios.html">Servicios</a>
                </li>
                <li class="nav-item d-flex">
                    <a class="align-self-center nav-link text-dark h5" href="productos.html">Productos</a>
                </li>
                <li class="nav-item d-flex">
                    <a class="align-self-center nav-link  " aria-current="page" href="carrito.html"><img class="carro" src="estilos/imagenes/carrito.png" alt=""></a>
                </li>
            </ul>
        </div>
        <section class="item">Recuerda iniciar sesión para empezar a trabajar con nosotros</section>
        <section class="container-fluid ">
            <div class="column auto align items center justify-content-center">
        </section>
        </div>


        </section>
    </div>
<div  id="app" >
    <section class="form-login">
        <i><h5>!Bienvenid@¡</h5></i>
        <input class="controls" type="text" name="E-mail" v-model="clientes.correo" value="" placeholder="Email" id="correo">
        <br>
        <input class="controls" type="password" v-model="clientes.passwordd" name="Contraseña" placeholder="Contraseña" id="passwordd">
        <h2 id="ms" v-if="mostrarerror">El correo que ingresaste no está registrado</h2>
        <div>
        <button type="button" class="buttons" id="btnsesion" @click="inicioses">Iniciar sesión</button>
        <p style="color: black;">No tienes una cuenta? <a href="registro.html">    Registrate</a></p>
    </div>
    </section>
</div>
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
            ©️ 2021 Copyright:D'talles,Inc.
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Terminos</a>
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Privacidad</a>
            <div class="social">
                <a href="https://www.facebook.com/dtallees" target="blank"><img src="estilos/imagenes/facebook.svg" alt="facebook"></a>
                <a href="https://www.instagram.com/dtallees/" target="blank"><img src="estilos/imagenes/instagram.svg" alt="instagram"></a>
            </div>
        </div>
    </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            clientes: {
                correo: "",
                passwordd: ""
            },
            },
        methods: {
            inicioses: function () {
    var params = new URLSearchParams();
     params.append('correo', this.clientes.correo);
    params.append('passwordd', this.clientes.passwordd);
                axios.post('controller/iniciarsesion.php', params)
                    .then((response) => {
                        this.mostrarerror = !response.data.acceso;
                        if (response.data.acceso) {
                            window.location = "/";

                        }


                    })
                    .catch(function (error) {
                        console.log(error);
                    });

            }
        }
        // },
        // methods: {
        //     inicioses: function () {
        //         var params = new URLSearchParams();
        //         params.append('correo', this.clientes.correo);
        //         params.append('passwordd', this.clientes.passwordd);

        //         axios.post('/controller/iniciarsesion.php', params)
        //             .then(function (response) { console.log(response); })
        //             .catch(function (error) { console.log(error); })
        //     }
        // }

    })

</script>

</body>

</html>