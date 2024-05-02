<!DOCTYPE html>
<html lang="es">
    <?php
        $ruta = "../..";
        $titulo = "Aplicación de Ventas - Información del Producto";
        include("../includes/cabecera.php")
    ?>
    <body>
        <?php
            include("../includes/menu.php");
            include "../includes/cargar_clases.php";

            if (isset($_GET["codprod"])) {
                $codprod = $_GET["codprod"];

                $crudproducto = new CRUDProducto();

                $rs_prod = $crudproducto->MostrarProductoPorCodigo($codprod);

                if (empty($rs_prod)) {
                    header("location: listar_producto.php");
                }
            } else {
                header("location: listar_producto.php");
            }
        ?>
        <div class="container mt-3">
            <header>
                <h1 class="text-info">
                    <i class="fas fa-info-circle"></i> Información del Producto</h1>
                <hr>
            </header>

            <nav>
                <a href="listar_producto.php" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-circle-left"></i> Regresar
                </a>
            </nav>

            <section>
                <article>
                    <div class="row justify-content-center mt-3">
                        <div class="card col-md-6">
                            <div class="card-body"> 
                                <div class="row g-3"> 
                                    <div class="col-md-4">
                                        <h5 class="card-title">Código</h5>
                                        <p class="card-text"><?=$rs_prod->codigo_producto?></p>
                                    </div>
                                    <div class="col-md-8"></div>
                                    <div class="col-md-8">
                                        <h5 class="card-tittle">Producto</h5>
                                        <p class="card-text"><?=$rs_prod->producto?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">Stock Disponible</h5>
                                        <p class="card-text"><?=$rs_prod->stock_disponible?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">Costo</h5>
                                        <p class="card-text"><?=$rs_prod->costo?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">% Ganancia</h5>
                                        <p class="card-text"><?=$rs_prod->ganancia?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">Producto</h5>
                                        <p class="card-text"><?=$rs_prod->precio?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">Marca</h5>
                                        <p class="card-text"><?=$rs_prod->marca?></p>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="card-tittle">Categoría</h5>
                                        <p class="card-text"><?=$rs_prod->categoria?></p>
                                    </div>
                                </div>
                            </div>    
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