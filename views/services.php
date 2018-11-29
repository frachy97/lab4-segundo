<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center ">

        <div class="full-height py-5 w-75">
            <h1 class="mb-5 text-center">Services</h1>

            <div id="services-list">    
            <?php if(isset($serviceArray)){ ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titular</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Patente</th>
                            <th>Servicio</th>
                            <th>Presupuesto</th>
                            <th class="text-center">Estado</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <?php foreach ($serviceArray as $key => $value) {?>
                        <tr>
                            <td><?= $value->getClient(); ?></td>
                            <td><?= $value->getBrand(); ?></td>
                            <td><?= $value->getModel(); ?></td>
                            <td><?= $value->getPatent(); ?></td>
                            <td><?= $value->getDescription(); ?></td>
                            <td><?= $value->getPrice(); ?></td>

                            <td class="text-right">


                             <form name='formulario' action="<?=FRONT_ROOT?>/service/changeState"  method="POST">
                                
                                <input type="hidden" name="id" class="form-control form-control-lg" value="<?= $value->getId(); ?>" >
                                <input type="hidden" name="state" class="form-control form-control-lg" value="en espera" >
                                <label>En espera</label>
                                <?php if($value->getState() == 'en espera'){ ?>
                                <button class="btn"  >
                                    <i class="fas fa-question" aria-hidden="true" ></i>
                                </button>
                                <?php }else{ ?>
                                    <button class="btn btn-outline-light"  >
                                    <i class="fas fa-question" aria-hidden="true" ></i>
                                </button>
                                 <?php } ?>
                            </form>
                            
                             <form name='formulario' action="<?=FRONT_ROOT?>/service/changeState"  method="POST">
                                
                                <input type="hidden" name="id" class="form-control form-control-lg" value="<?= $value->getId(); ?>" >
                                <input type="hidden" name="state" class="form-control form-control-lg" value="en reparacion" >
                                <label>En reparacion</label>
                                <?php if($value->getState() == 'en reparacion'){ ?>
                                <button class="btn"  >
                                    <i class="fas fa-question" aria-hidden="true" ></i>
                                </button>
                                <?php }else{ ?>
                                    <button class="btn btn-outline-light"  >
                                    <i class="fas fa-question" aria-hidden="true" ></i>
                                </button>
                                 <?php } ?>
                            </form>
                            
                             <form name='formulario' action="<?=FRONT_ROOT?>/service/changeState"  method="POST">
                                
                                <input type="hidden" name="id" class="form-control form-control-lg" value="<?= $value->getId(); ?>" >
                                <input type="hidden" name="state" class="form-control form-control-lg" value="listo para retirar" >
                                <label>Listo</label>
                                <?php if($value->getState() == 'listo para retirar'){ ?>
                                <button class="btn"  >
                                    <i class="fas fa-question" aria-hidden="true" ></i>
                                </button>
                                <?php }else{ ?>
                                    <button class="btn btn-outline-light"  >
                                    <i class="fas fa-question" aria-hidden="true" ></i>
                                </button>
                                 <?php } ?>
                            </form>
                            
                                <button class="btn btn-outline-light" data-toggle="modal" data-target="#modal1">
                                    <i class="fas fa-comments"></i>
                                </button>

                                <form name='formulario' action="<?=FRONT_ROOT?>/service/sendMsg"  method="POST">
                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content text-secondary">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enviar mensaje al cliente</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <div class="form-group">
                                                    
                                                    <label for="">Mensaje</label>
                                                    <input type="hidden" name="id" class="form-control form-control-lg" value="<?= $value->getId(); ?>" >



                                                    <input type="text" name="msg"  >
                                                   


                                                   

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-light border">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 </form>
                            </td>
                        </tr>
                    <?php } ?>
                        
                    </tbody>
                </table>
            <?php } ?>
            </div>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
