<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 bg-black-alpha d-flex align-items-center justify-content-center">
                <div class="">

                    <h1 class="mb-5 text-center">LAB 4 - 2do. Parcial</h1>

                    <form name='formulario' action="<?=FRONT_ROOT?>/home/login"  method="POST">
                        <div class="form-group">
                            <input type="email" name='email' class="form-control form-control-lg" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <input type="password"  name='password' class="form-control form-control-lg" placeholder="Contraseña">
                        </div>
                        <button type="submit" name="button" class="btn btn-secondary btn-lg btn-block">
                            Iniciar sesión
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

<?php include('footer.php'); ?>
