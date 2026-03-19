<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor/Model/UtilitarioModel.php";

function ConsultarProductosModel()
{
    try 
    { 
        $context = OpenDatabase();

        $sp = "CALL sp_ConsultarProductos()";
        $result = $context -> query($sp);

        $datos = [];
        while($fila = $result -> fetch_assoc())
        {
            $datos[] = $fila;   
        }

        CloseDatabase($context);
        return $datos;
    }
    catch (Exception $e) 
    {
        return null;
    }
}