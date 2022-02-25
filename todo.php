<?php # Incluir "logger"
include_once "logger.php"; ?>
<?php error_log("se ingreso a la pagina"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HERRAMIENTAS</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script type="text/javascript">

            //1,1,2,3,5,8,13,21...
            function fibonacci(){
                var fibo1=1, fibo2=1, pos=1,
                num= parseInt(document.getElementById("numero").value);
    
                while(num > fibo1 && num > fibo2){
                    if(fibo1 < fibo2){
                        fibo1 += fibo2;
                    }
                    else{
                        fibo2 += fibo1;
                    }
                    pos++;
                }
    
                if(num == fibo1 || num == fibo2){
                    // Swal.fire(
                    //     'Good job!',
                    //     'You clicked the button!',
                    //     'success'
                    //     )
                    Swal.fire(
                        "El numero "+num+" si pertenece a la sucesion y se encuentra en la "
                        +" posicion "+(pos+1));
                        'success'
                }
                else{
                    Swal.fire(
                        "El numero "+num+" no pertenece a la sucesion Fibonacci");
                }
    
            }
        </script>
        <script src="js/validaciones.js"></script>
        <script type="text/javascript">
            function validaciones(){
                var numero;
                var numero = document.getElementById("numero").value;
                if (if (txtnombre === ""){
                        alert("El campo esta vacio");	
                        return false;
                    }
                    else if (isNaN(numero)) {
                        alert("El valor ingresado no es un numero");	
                        return false;
                    }
                }
        </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">Start Bootstrap</a></li>
                <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
                <li class="sidebar-nav-item"><a href="#about">DESCRIPCION</a></li>
                <li class="sidebar-nav-item"><a href="#services"
                <li class="sidebar-nav-item"><a href="#portfolio">CONVERTIDOR</a></li>
                <li class="sidebar-nav-item"><a href="#contact">SERIE FIBONACCI</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">IMPLEMENTACION DE FRAMEWORK</h1>
                <h3 class="mb-5"><em>DISEÑOS Y ESTILOS CON BOOTSTRAP</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">EMPEZAR</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>CON ESTA HERRAMIENTA ES POSIBLE CALCULAR, CONVERTIR TEMPERATURAS Y CONOCER NUMEROS QUE PERTENECEN A LA SERIE FIBONACCI Y SU POSICION</h2>
                        <p class="lead mb-5">
                            "Proyectos Sin diseño de practicas anteriores"
                            <!-- <a href="https://unsplash.com/">Unsplash</a> -->
                            
                        </p>
                        <a class="btn btn-dark btn-xl" href="#services">CALCULADORA</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Operaciones Basicas</h3>
                    <h2 class="mb-5">CALCULADORA</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                <?php
	$v1 = @$_GET['v1'];
	$v2 = @$_GET['v2'];
	$signo = @$_GET['signo'];
	$residuo = 0;
	if ($signo == "+") {
		$residuo = $v1 + $v2;
	}else if ($signo == "-") {
		$residuo = $v1 - $v2;
	}else if ($signo == "*") {
		$residuo = $v1 * $v2;
	}else if ($signo == "/") {
		$residuo = $v1 / $v2;
	} 
	?>
    
    <form action="#services">
		<input type="text" name="v1" placeholder="VALOR 1">
		<select name="signo" >
			<option value="signo">OPERACIÓN</option>
			<option value="+">Suma</option>
			<option value="-">Resta</option>
			<option value="*">Multiplicacion</option>
			<option value="/">Divicion</option>

		</select>
		<input type="text" name="v2" placeholder="VALOR 2">
		<input type="submit" value="Calcular" id="btncalcular" name="btncalcular">
		<br>
		<br>
		<input type="text" id="txtresiduo" name="txtresiduo" value="<?php echo "el resultado es: ". $residuo; ?> <?php error_log("se registro una operacion de $v1 $signo $v2 el resultado de la operacion es de $residuo"); ?>">
        
	</form>
                </div><br><br>
                <a class="btn btn-warning btn-xl" href="#materia">ASIGNATURA</a>
            </div>
        </section>
        <!-- Callout-->
        <section class="callout" id="materia">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mx-auto mb-5">
                    SEGURIDAD EN EL DESARROLLO
                    <em>DE</em>
                    APLICACIONES!
                </h2>
                
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0"><span class="glyphicon glyphicon-search"></span></h3>
                    <h2 class="mb-5">Convertidor de Temperaturas</h2>
                </div>
                <?php
                    @$unidad1 = @$_GET['unidad1'];
                    $operacion = @$_GET['operacion'];
                    $resultado = 0;

                    if ($operacion == "fahrenheit") {
                        $resultado = 1.8 * $unidad1 + 32;
                    }else if ($operacion == "celsius") {
                        $resultado =($unidad1-32)*5/9; 
                    }

                ?>
                <div class="row gx-0">
                    <center>
                    <form action="#portfolio">
                        <input type="number" name="unidad1" placeholder="Temperatura">
                        <select name="operacion" >
                            <option value="fahrenheit">fahrenheit</option>
                            <option value="celsius">celsius</option>
                        </select>
                        <input type="submit" class="btn-primary" value="Calcular" id="btncalcular" name="btncalcular">
                        <br>
                        <br>
                        <input type="submit" class="btn-success" id="txtresultado" name="txtresultado" value="<?php echo "la temperatura es: ". $resultado; ?>">
                        <?php error_log("se uso el convertidor para la temperatura de $unidad1 y se uso la operacion $operacion  el resultado de la operacion es de $resultado"); ?>
                    </form>
                    </center>
                </div>
            </div>
            <br><br>
        <!-- Map-->
        <div class="content-section bg-primary text-white" id="contact">
            <center>
            <form action="#contact" class="form">
				<div class="from-header">
					<h1 class="form-title">F<span>IBONACCI</span></h1>
				</div>
					<span class="form-label"> <b>INGRESE UN NUMERO PARA COMPROBAR SI PERTENESE O NO A LA SERIE FIBONACCI.</b></span><br><br><br>
					<input type="number" id="numero" class="cajatext form-input" placeholder="Ingrese un valor"/ required=""><br><br>
					<button onClick="fibonacci()" class="btn btn-xl btn-dark btn-submit" onclick="alertrverificar();">Verificar</button>
			</form> 
            </center>
            </div>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Your Website 2021</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
