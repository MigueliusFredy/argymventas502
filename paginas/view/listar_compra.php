<!DOCTYPE html>
<html lang="es">
<?php
        $ruta = "../..";
        $titulo = "Aplication de ventas - Lista de Compras";
        include("../includes/cabecera.php");
    ?>
    <body>
        <?php
            include("../includes/menu.php");
            include "../includes/cargar_clases.php";

            $crudcompra = new CRUDCompra();
            $rs_com = $crudcompra->ListarCompra();
        ?>
        <div class="container mt-3">
            <header>
                <h1><i class="fas fa-list-alt"></i> Lista de Compras</h1>
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
                                    <th>Fecha</th>
                                    <th>Monto</th>
                                    <th>Codigo Proveedor</th>
                                </tr>
                                <?php
                                    $i = 0;
                                    foreach($rs_com as $com){
                                        $i++;
                                ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$com->codigo_compra?></td>
                                    
                                    <td><?=$com->fecha?></td>
                                    <td><?=$com->monto?></td>
                                    <td><?=$com->compra_codigo_proveedor?></td>
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