<!DOCTYPE html>
<html lang="es">
    <?php
        $ruta = ".";
        $titulo = "Aplicación de Ventas";
        include("paginas/includes/cabecera.php");
    ?>
    <body>
        <?php
            include("paginas/includes/menu.php");
        ?>
        <div class="container mt-3">
            <header>
                <h1><i class="fab fa-slack"></i> Aplicación</h1>
                <hr/>
            </header>
            <section>
            <article>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="./img/electrodomesticos.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="./img/electrodomesticos2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="./img/electrodomesticos3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
        
    </article>
            </section>
            <?php
                include("paginas/includes/pie.php");
            ?>
        </div>
    </body>
</html>
