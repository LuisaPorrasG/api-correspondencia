<?php

include_once("./conDB.php");
class Correspondencia
{
    private $_con;

    private $id_correspondencia;
    private $apartamento;
    private $remitente;
    private $id_residente;
    private $fecha_recepcion;

    public function __construct()
    {
        $db = new conDB(); //instancio la conexion de base de datos
        $this->_con = $db->con; //instancio la conexion de base de datos
        $this->id_correspondencia = 12;
        $this->apartamento = 200;
        $this->remitente = 'Envia';
        $this->id_residente = 10008;
        $this->fecha_recepcion = '2024-01-29';
    }

    public function registrarCorrespondencia()
    {
        $query = "INSERT INTO correspondencia VALUES
        ('$this->id_correspondencia','$this->apartamento','$this->remitente','$this->id_residente', '$this->fecha_recepcion')";
        echo $query;
        if (mysqli_query($this->_con, $query)) {
            //mysql_close($this->_con);
            echo "Se registró  una nueva correspondencia";
        } else {
            echo "error";
        }
    }

    public function registrarCorrespondencia2($id_correspondencia1, $apartamento1, $remitente1, $id_residente1, $fecha_recepcion1)
    {
        $query = "INSERT INTO correspondencia VALUES
        ('$id_correspondencia1','$apartamento1','$remitente1','$id_residente1', '$fecha_recepcion1 ')";
        echo $query;
        if (mysqli_query($this->_con, $query)) {
            //mysql_close($this->_con);
            echo "Se registró  una nueva correspondencia";
        } else {
            echo "error";
        }
    }
}
