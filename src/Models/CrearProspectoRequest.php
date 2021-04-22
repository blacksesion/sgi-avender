<?php
/*
 * SGIAvenderLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace SGIAvenderLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CrearProspectoRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $token public property
     */
    public $token;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $idIntegracion public property
     */
    public $idIntegracion;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $idOrigen public property
     */
    public $idOrigen;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $idMarca public property
     */
    public $idMarca;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $idModelo public property
     */
    public $idModelo;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $idSucursal public property
     */
    public $idSucursal;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $idDivision public property
     */
    public $idDivision;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $nombre public property
     */
    public $nombre;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $fono public property
     */
    public $fono;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $comentario public property
     */
    public $comentario;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $token         Initialization value for $this->token
     * @param integer $idIntegracion Initialization value for $this->idIntegracion
     * @param integer $idOrigen      Initialization value for $this->idOrigen
     * @param integer $idMarca       Initialization value for $this->idMarca
     * @param integer $idModelo      Initialization value for $this->idModelo
     * @param integer $idSucursal    Initialization value for $this->idSucursal
     * @param integer $idDivision    Initialization value for $this->idDivision
     * @param string  $nombre        Initialization value for $this->nombre
     * @param string  $email         Initialization value for $this->email
     * @param string  $fono          Initialization value for $this->fono
     * @param string  $comentario    Initialization value for $this->comentario
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->token         = func_get_arg(0);
            $this->idIntegracion = func_get_arg(1);
            $this->idOrigen      = func_get_arg(2);
            $this->idMarca       = func_get_arg(3);
            $this->idModelo      = func_get_arg(4);
            $this->idSucursal    = func_get_arg(5);
            $this->idDivision    = func_get_arg(6);
            $this->nombre        = func_get_arg(7);
            $this->email         = func_get_arg(8);
            $this->fono          = func_get_arg(9);
            $this->comentario    = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['token']         = $this->token;
        $json['idIntegracion'] = $this->idIntegracion;
        $json['idOrigen']      = $this->idOrigen;
        $json['idMarca']       = $this->idMarca;
        $json['idModelo']      = $this->idModelo;
        $json['idSucursal']    = $this->idSucursal;
        $json['idDivision']    = $this->idDivision;
        $json['nombre']        = $this->nombre;
        $json['email']         = $this->email;
        $json['fono']          = $this->fono;
        $json['comentario']    = $this->comentario;

        return $json;
    }
}
