//Iniciar los eventos en JQuery
$(function(){
    //Define los eventos a trabajar en la pagina

    //Evento click del boton mostrar de la pagina listar_producto.php
    $(".reg_producto .btn_mostrar").click(function(e) {
        let codprod = $(this).closest(".reg_producto").children(".codprod").text();

        location.href = "mostrar_producto.php?codprod=" + codprod;
    });

    


    //Evento click del boton editar de la pagina listar_producto.php
    $(".reg_producto .btn_editar").click(function(e){
        let codprod = $(this).closest(".reg_producto").children(".codprod").text();

        location.href = "editar_producto.php?codprod=" + codprod;
    });

    //Evento click del boton borrar de la pagina listar_producto.php
    $(".reg_producto .btn_borrar").click(function(e){
        let codprod = $(this).closest(".reg_producto").children(".codprod").text();
        let prod = $(this).closest(".reg_producto").children(".prod").text();

        $("#md_borrar .lbl_codprod").text(codprod);
        $("#md_borrar .lbl_prod").text(prod);

        $("#md_borrar .btn_borrar").attr("href","../controlador/ctr_borrar_prod.php?codprod=" + codprod);

        $("#md_borrar").modal("show");

    });

 

    $("#frm_filtrar_prod #btn_filtrar").on("click",function(e){
        e.preventDefault();

        var valor = $("#txt_valor").val();

        if(valor != ""){
            $.post("../controlador/ctr_filtrar_prod.php",
            {valor: valor},
            function(rpta) {
                $("#tabla").html(rpta);
            });
        }else{
            $("#tabla").html("");

            alert("Escriba un valor para filtrar...");

            $("#txt_valor").focus();
        }


    });

    $("#frm_consultar_prod #txt_codprod").focusout(function(e){
        //alert("hola");
          
          e.preventDefault();
          let codprod = $(this).val();
           
          if(codprod !=""){
            $.ajax({
                url:"../controlador/ctr_consultar_prod.php",
                type:"POST",
                data:{codprod: codprod},
                success: function(rpta){
                    let rp=JSON.parse(rpta);

                    if(rp){
                        $(".prod").html(rp.producto);
                        $(".stk").html(rp.stock_disponible);
                        $(".cst").html("S/ " + rp.costo);
                        $(".gnc").html(rp.ganacia)
                        $(".mar").html(rp.producto_codigo_marca)
                        $(".cat").html(rp.producto_codigo_categoria)

                    }else{
                        alert("El código " + codprod + " no existe");

                        $("#txt_codprod").val("");
                         let vacio = "&nbsp;";
                         $(".prod").html(vacio);
                         $(".stk").html(vacio);
                         $(".cst").html(vacio);
                         $(".gnc").html(vacio)
                        $(".mar").html(vacio)
                        $(".cat").html(vacio)

                         $("#txt_codprod").focus();

                    }
                }

            });
          }
            
    });
});