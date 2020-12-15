
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4"><?php echo $titulo; ?></h3>

                        <div>
                            <p>
                                <a href="<?php echo base_url(); ?>/unidades/nuevo" class="btn btn-info">
                                <i class="fas fa-plus-square"> </i> Agregar    
                                 </a>
                                 <a href="<?php echo base_url(); ?>/unidades/eliminados" class="btn btn-warning">
                                 <i class="fas fa-trash"> </i> Eliminados    
                                 </a>

                            </p>
                        </div>
                        
                        
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Nombre Corto </th>
                                                <th></th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach($datos as $dato){ ?>
                                                <tr>
                                                    <td><?php echo $dato ['id']; ?></td>
                                                    <td><?php echo $dato ['nombre']; ?></td>
                                                    <td><?php echo $dato ['nombre_corto']; ?></td>
                                                    
                                                    <td> <a href="<?php echo base_url(); ?>/unidades/editar/" 
                                                         <?php echo $dato ['id']; ?> class="btn btn-info">
                                                       <i class="fas fa-pencil-alt"> </i> Editar </a></td>

                                                       <td> <a href="<?php echo base_url(); ?>/unidades/eliminar/" 
                                                         <?php echo $dato ['id']; ?> class="btn btn-danger">
                                                       <i class="fas fa-trash"> </i> Eliminar </a></td>
                                                       
                                                       
                                                     

                                                </tr>
                                            <?php } ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                </main>