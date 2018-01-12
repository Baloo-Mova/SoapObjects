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
     *
     * 1 - производство
     * 2 - холодильник
     */
    public $device_type;

    /**
     * @var integer
     * Системное сообещние или температура
     * Тип лога
     *
     *  100 системное
     *  201 температура
     */
    public $type;

    /**
     * @var string
     * Статус
     */
    public $status;
}