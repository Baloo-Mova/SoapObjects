<?php

require_once 'objects/SoapAuth.php';
require_once 'objects/SoapEndPoint.php';
class Device
{
    /**
     * @var integer
     * Id устройства
     */
    public $id;

    /**
     * @var string
     * Холодильник или Устройство
     * Тип устройства
     */
    public $type;

    /**
     * @var SoapAuth
     */
    public $soap_auth;

    /**
     * @var SoapEndPoint
     */
    public $soap_point;

    /**
     * @var string
     * Статус
     */
    public $status;

    /**
     * @var string
     * Ключ для удаленного доступа
     */
    public $key;

}