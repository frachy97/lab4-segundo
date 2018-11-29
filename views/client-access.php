<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 bg-black-alpha d-flex align-items-center justify-content-center">
                <div class="">

                    <h1 class="mb-5 text-center">Consultar Estado</h1>

                    <form name='formulario' action="<?=FRONT_ROOT?>/service/getService"  method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="patent" placeholder="Patente">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="client" placeholder="DNI">
                        </div>
                        <button type="submit" name="button" class="btn btn-secondary btn-lg btn-block">
                            Ver estado
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

<?php include('footer.php'); ?>
