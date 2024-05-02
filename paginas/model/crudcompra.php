<?php
    class CRUDCompra extends Conexion{
        public function ListarCompra(){
            $arr_compra = null;
            $cn = $this->Conectar();
            $sql = "call sp_ListarCompra()";
            $snt = $cn->prepare($sql);
            $snt->execute();
            $arr_compra = $snt->fetchAll(PDO::FETCH_OBJ);
            $cn = null;
            return $arr_compra;
        }
    }