<?php
/**
 * Created by PhpStorm.
 * User: Valer
 * Date: 27.11.2017
 * Time: 11:54
 */

class Purchase
{
    /**
     * @var integer
     *
     * Номер карты
     *
     */
    public $number_card;
    /**
     * @var double
     *
     * Сумма покупки
     *
     */
    public $price;
    /**
     * @var string[]
     *
     * Метки EPC
     *
     */
    public $epc;
    /**
     * @var string
     *
     * Временной штамп
     *
     */
    public $timestamp;

    /**
     * @var integer
     *
     * Id Устройства
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

    /**
     * @var string
     * Статус
     */
    public $status;
}