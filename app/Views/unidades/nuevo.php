<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4"><?php echo $titulo; ?></h3>

                      
                        <form method="POST" action="<?php echo base_url(); ?>/unidades/insertar" autocomplete="off">
                        
                                <div class="form-group">
                                 <div class="row">
                                   <div class="col-12 col-sm-6">
                                       <label>Nombre</label>
                                       <input class="form-control" id="nombre" name="nombre" type="text"
                                       autofocus require />
                                   </div>

                                   
                                   <div class="col-12 col-sm-6">
                                       <label>Nombre Corto</label>
                                       <input class="form-control" id="nombre" name="nombre" type="text"
                                       autofocus require />
                                   </div>
                                   </div>
                                   </div> 

                                   <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary"><i class="fas fa-arrow-left"> </i> Regresar </a>
                                   <button type="submit" class="btn btn-success"> <i class="fas fa-save"> </i> Guardar</button>

                                
                                </form>
                                </div>
                            
                </main>