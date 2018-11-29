<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">


    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center ">

        <div class="full-height py-5 w-75">
            <h1 class="mb-5 text-center">Estado del servicio</h1>
            <?php if(isset($service)){ ?>
            <div class="card">

                <div class="card-body">

                    <h5 class="card-title">Dni: <?= $service->getClient(); ?> </h5>
                    <p class="card-text">
                        <strong>Vahículo:</strong> <?= $service->getBrand().' '. $service->getModel();  ?> <br>
                        <strong>Patente:</strong> <?= $service->getPatent(); ?><br>
                        <strong>Servicio:</strong> <?= $service->getDescription(); ?> <br>
                    </p>
                </div>
            <?php } ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-comment mr-4"></i>
                       <?= $service->getMsg(); ?>
                    </li>
                </ul>
                <div class="card-body">

                    <strong>Estado de su vehiculo:</strong> 
                    <?php if($service->getState() == 'en espera'){ ?>
                    <span class="mx-3">
                        <i class="fas fa-question text-success" aria-hidden="true"></i>
                    </span>
                    <?php }else if($service->getState() == 'en reparacion'){ ?>
                    <span class="mx-3">
                        <i class="fas fa-wrench text-warning" aria-hidden="true"></i>
                        </span>
                    <?php }else if($service->getState() == 'listo para retirar'){?>
                    <span class="mx-3">
                        <i class="fas fa-check" aria-hidden="true"></i>
                    </span>
                <?php } ?>
                </div>
            </div>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
