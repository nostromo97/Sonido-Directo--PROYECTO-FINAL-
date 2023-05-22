<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sonido Directo (AP)</title>
    <!-- Referencia CSS -->
    <link rel="stylesheet" type="text/css" href="style/loginPage.css">
    <!-- Referencia Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-black">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img id="logo" src="images/LOGOFINAL.png" alt="Logo" href="index.html">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Volver</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
    </header>
    <hr><br />

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form id="loginForm" action="utilDB/login.php" method="POST">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Introduce tu username y password</p>
                                    <div class="form-outline form-white mb-4">
                                        <input name="username" type="text" id="typeEmailX" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Username</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        

                                    </div>

                                    <div>
                                        <?php
                                        if (isset($_GET["ERROR"])){
                                            echo "<h2>Incorrecto. Revise los campos introducidos</h2>";
                                        }
                                        ?>
                                    </div>

                                   
                                    <button style="margin-bottom:-60px;" class="btn btn-warning btn-lg px-5" type="submit" value="Submit">Login</button>


                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-0">¿No estás registrado? <a href="signupPage.html"
                                            class="text-white-50 fw-bold">Registro</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-center text-center mt-4 pt-1">
        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
    </div>

    </div>

    <div>
        <p class="mb-0">¿No estás registrado? <a href="signupPage.html" class="text-white-50 fw-bold">Registrate</a>
        </p>
    </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>


    <!-- Footer de la página -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(2, 2, 2, 0.507); color:rgb(226, 226, 226)">
            ©2023 Copyright Agustín Arcos Reyes
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Referencia a Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>