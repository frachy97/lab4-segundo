<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center">

        <div>

            <h1 class="mb-4 text-center">Nuevo servicio</h1>

            <form name='formulario' action="<?=FRONT_ROOT?>/service/addService"  method="POST">
              

                <fieldset>

                    <legend>Datos del cliente</legend>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">DNI</label>
                                <input type="text" class="form-control form-control-lg" name="dni">
                            </div>
                        </div>

                    </div>

                </fieldset>
                
                

                <fieldset>

                    <legend>Datos del vehiculo</legend>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Marca</label>
                                <input class="form-control form-control-lg" name="brand">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Modelo</label>
                                <input class="form-control form-control-lg" name="model">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Patente</label>
                                <input class="form-control form-control-lg" name="patent">
                            </div>
                        </div>
                    </div>
                </fieldset>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Seleccionar tarea</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="description" value="cambio de aceite">
                                <label class="form-check-label" for="defaultCheck1">
                                    Cambio de aceite
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="description" value="cambio de aceite">
                                <label class="form-check-label" for="defaultCheck2">
                                    Cambio de filtros
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="description" value="cambio de aceite">
                                <label class="form-check-label" for="defaultCheck2">
                                    Cambio de pastillas de freno
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="description" value="cambio de aceite">
                                <label class="form-check-label" for="defaultCheck2">
                                    Correa de distribucion
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="description"value="cambio de aceite">
                                <label class="form-check-label" for="defaultCheck2">
                                    Embrague
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Presupuesto</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" name="price">
                            </div>
                        </div>
                    </div>
                    
                </div>
                

                
                


                <button type="submit" class="btn btn-secondary d-block ml-auto px-4">Agregar</button>
            </form>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
