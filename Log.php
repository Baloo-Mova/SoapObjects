<?php

class Log
{
    /**
     * @var integer
     * Id устройства с которого пришел лог
     */
    public $device_id;

    /**
     * @var string
     * Данные сообщения
     */
    public $message;

    /**
     * @var integer
     * Холодильник или производство
     * Тип устройства
     */
    public $device_type;

    /**
     * @var integer
     * Системное сообещние или температура
     * Тип лога
     */
    public $type;
}