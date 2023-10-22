<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso | CCD</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
</head>

<body class="user-select-none">
    <div class="container-fluid m-0">
        <div class="row">
            <div class="col-12 col-xl-6 fondoCCD d-none d-xl-block"></div>
            <div class="col-12 col-xl-6 fondoCCD2">
                <section class="sectionLoginCCD d-flex justify-content-center align-items-center flex-column">
                    <form action="" method="POST" class="d-flex justify-content-center align-items-center flex-column w-100">
                        <section class="fondoLogoCDD text-center">
                            <div>
                                <img src="assets/img/CCD-logo.png" class="logoCCD px-5" alt="">
                            </div>
                        </section>
                        <section class="formLoginCDD">
                            <div class="input-group mb-3 inputForm">
                                <span class="input-group-text">
                                    <img src="assets/img/usuario.svg" class="iconForm" alt="">
                                </span>
                                <input type="text" class="form-control" name="username" placeholder="Usuario">
                            </div>
                            <div class="input-group mb-3 inputForm">
                                <span class="input-group-text">
                                    <img src="assets/img/candado.svg" class="iconForm" alt="">
                                </span>
                                <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div>
                            <?php
                            if (isset($_GET['errorcode']) && $_GET['errorcode'] == 3) {
                            ?>
                            <div class="mb-3">
                                <p class="text-center text-danger fw-bold">Nombre de usuario y/o contraseña incorrecta</p>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-3 form-check mt-4">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label chkRecuerdame user-select-none" for="exampleCheck1">Recuérdame</label>
                                </div>
                                <div class="text-end mb-3 mt-4">
                                    <a class="txtFP user-select-none" href="#">Olvidaste tu contraseña</a>
                                </div>
                            </div>
                        </section>
                        <button type="submit" class="btnSubmit btn">Ingresar</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>