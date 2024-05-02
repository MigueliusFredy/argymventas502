<!DOCTYPE html>
<html lang="es">
<?php
        $ruta = "../..";
        $titulo = "Aplication de ventas - Lista de Marcas";
        include("../includes/cabecera.php");
    ?>
    <body>
        <?php
            include("../includes/menu.php");
            include "../includes/cargar_clases.php";

            $crudmarca = new CRUDMarca();
            $rs_mar = $crudmarca->ListarMarca();
        ?>
        <div class="container mt-3">
            <header>
                <h1><i class="fas fa-list-alt"></i> Lista de Marcas</h1>
                <hr/>
            </header>

            <nav></nav>

            <section>
                <article>
                    <div class="row justify-content-center mt-3">
                        <div class="col-md-6">
                            <table class="table table-hover table-sm table-success">
                                <tr class="table-primary">
                                    <th>N°</th>
                                    <th>Codigo</th>
                                    <th>Marca</th>
                                </tr>
                                <?php
                                    $i = 0;
                                    foreach($rs_mar as $mar){
                                        $i++;
                                ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$mar->codigo_marca?></td>
                                    <td><?=$mar->marca?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </article>
                </section>

                <?php
                    include("../includes/pie.php");
                ?>
            </div>
            

    </body>
</html>

