<?php

class SoapEndPoint
{

    /**
     * @var string
     * ip устройства
     * required
     */
    public $ip;

    /**
     * @var int
     * Порт устройства
     * required
     */
    public $port;

    /**
     * @var string
     *
     * Добавочный адресс
     * required
     */
    public $path;

    /**
     * @var string
     * Ключ для удаленного доступа
     */
    public $key;

}