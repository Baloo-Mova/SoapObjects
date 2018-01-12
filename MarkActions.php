<?php

class MarkActions
{
    /**
     * @var integer
     * Номер карты
     * required
     */
    public $number_card;

    /**
     * @var integer
     * Действие
     * 1, 2X, 3
     * 1 - загрузка
     * 2X - списание, где X -номер причины
     * 3 - утилизация
     * required
     */
    public $action;

    /**
     * @var string
     * Метки EPC
     * required
     */
    public $epc;

    /**
     * @var string
     * Статус
     */
    public $status;

    /**
     * @var string
     * Временная метка
     * required
     */
    public $timestamp;

    /**
     * @var integer
     * Id Устройства
     * required
     */
    public $device_id;

    /**
     * @var integer
     * Холодильник или производство
     * Тип устройства
     *
     * 1 - производство
     * 2 - холодильник
     */
    public $device_type;

}