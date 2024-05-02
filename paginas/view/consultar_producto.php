<!DOCTYPE html>
<html lang="es">
    <?php
        $ruta = "../..";
        $titulo = "Aplicación de Ventas - Consultar Producto";
        include("../includes/cabecera.php")
    ?>
    <body>
        <?php
            include("../includes/menu.php");
            
        ?>
        <div class="container mt-3">
            <header>
                <h1><i class="fas fa-info-circle"></i> Consultar Producto</h1>
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
                            <form id="frm_consultar_prod" name="frm_consultar_prod">
                                <div class="row g-3"> 
                                    <div class="col-md-4">
                                        <label for="txt_codprod" class="form-label">Código</label>
                                        <input type="text" class="form-control" id="txt_codprod" name="txt_codprod"
                                         placeholder="Código a buscar" maxlength="5" autofocus/>
                                    </div>
                                    <div class="col-md-8"></div>
                                    <div class="col-md-8">
                                        <h5 class="card-tittle">Producto</h5>
                                        <p class="prod card-text">&nbsp;</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">Stock Disponible</h5>
                                        <p class="stk card-text">&nbsp;</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">Costo</h5>
                                        <p class="cst card-text">&nbsp;</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">% Ganancia</h5>
                                        <p class="gnc card-text">&nbsp;</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-tittle">Marca</h5>
                                        <p class="mar card-text">&nbsp;</p>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="card-tittle">Categoría</h5>
                                        <p class=" cat card-text">&nbsp;</p>
                                    </div>
                                
                                </div>
                             </form> 
                             <div class="text-center mt-3">
                                <a href="consultar_producto.php" class="btn btn-outline-primary">
                                    <i class="fas fa-file"></i> Nueva consulta
                                </a>

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