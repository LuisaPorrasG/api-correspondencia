<?php

include_once("conDB.php");
class Estado
{
    private $_con;


    private $id_estado;
    private $id_correpondencia;
    private $id_residente;
    private $entregado;

    public function __construct()
    {
        $db = new conDB(); //instancio la conexion de base de datos
        $this->_con = $db->con; //instancio la conexion de base de datos
        $this->id_estado = 12;
        $this->id_correpondencia = 12;
        $this->id_residente = 10002;
        $this->entregado =1;
    }
    
}
