<?php

class MarkActions
{
    /**
     * @var integer
     * Номер карты
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
     */
    public $timestamp;

    /**
     * @var integer
     * Id Группы
     */
    public $group_id;

    /**
     * @var integer
     * Id Устройства
     */
    public $device_id;


}