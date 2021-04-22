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
class DivisionesRequest implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $idIntegracion public property
     */
    public $idIntegracion;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $token public property
     */
    public $token;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $idOrigen public property
     */
    public $idOrigen;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $idIntegracion Initialization value for $this->idIntegracion
     * @param string  $token         Initialization value for $this->token
     * @param integer $idOrigen      Initialization value for $this->idOrigen
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->idIntegracion = func_get_arg(0);
            $this->token         = func_get_arg(1);
            $this->idOrigen      = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['idIntegracion'] = $this->idIntegracion;
        $json['token']         = $this->token;
        $json['idOrigen']      = $this->idOrigen;

        return $json;
    }
}
