<?php
    include "../includes/cargar_clases.php";

    $crudproducto = new CRUDProducto();

    if(isset($_GET["codprod"])){
        $codprod = $_GET["codprod"];

        $crudproducto->BorrarProducto($codprod);

        header("location: ../view/listar_producto.php");
    }