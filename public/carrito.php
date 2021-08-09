<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/diseño-carrito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>CARRITO</title>
</head>

<body>
    <div class="fondo">
        <div class="banner">
            <ul class="nav nav-pills nav-fill ">
                <li class="nav-item d-flex ">
                    <a class="align-self-center nav-link" href="#"><img class="flecha" src="estilos/imagenes/flechaatras.png" alt=""></a>
                </li>
                <li class="nav-item d-flex">
                    <a class="align-self-center nav-link text-dark h5" href="index.html">Inicio</a>
                </li>
                <li class="nav-item d-flex">
                    <a class="align-self-center nav-link text-dark h5" aria-current="page" href="inicio-sesion.html">Inicia sesión o <br>
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
                    <a class="align-self-center nav-link active bg-warning" aria-current="page" href="carrito.html"><img class="carro" src="estilos/imagenes/carrito.png" alt=""></a>
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
        <section class="item">Tus servicios y productos</section>
        <div class="resto"></div>
        <div class="base" id="app2">
                     <?php
                     include_once "Conexion.php";
                     $sentencia = $Conexion->query("SELECT pedidos.nomevento AS Nombre, pedidos.fechaevento AS Fecha, pedidos.lugarevento AS Lugar,pedidos.estatus AS Estatus, eventos.nomevento AS Evento FROM pedidos INNER JOIN eventos ON
                     pedidos.evento = eventos.id_evento;");
                     $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);?>
		     <br>
		      <table class="table table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
                    <th>Fecha</th>
                    <th>Lugar</th>
                    <th>Estatus</th>
                    <th>Evento</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
                 foreach($pedidos as $Pedido){         
               ?>
				<tr>
					<td><?php echo $pedidos->nomevento ?></td>
					<td><?php echo $pedidos->fecha ?></td>
					<td><?php echo $pedidos->lugarevento ?></td>
					<td><?php echo $pedidos->estatus ?></td>
					<td><?php echo $pedidos->precioVenta ?></td>
					<td><?php echo $pedidos->evento ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		    </table>
        </div>
	</div>
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
            © 2021 Copyright:D'talles,Inc.
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Terminos</a>
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Privacidad</a>
            <div class="social">
                <a href="https://www.facebook.com/dtallees" target="blank"><img src="estilos/imagenes/facebook.svg" alt="facebook"></a>
                <a href="https://www.instagram.com/dtallees/" target="blank"><img src="estilos/imagenes/instagram.svg" alt="instagram"></a>
            </div>
        </div>
    </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>