<?php
/**
 * Created by PhpStorm.
 * User: Valer
 * Date: 27.11.2017
 * Time: 11:54
 */

class Purchases
{
    /**
     * @var integer $number_card
     *
     * Номер карты
     *
     */
    public $number_card;
    /**
     * @var double $price
     *
     * Сумма покупки
     *
     */
    public $price;
    /**
     * @var string $mark_epc
     *
     * Метки EPC
     *
     */
    public $epc;
    /**
     * @var string $time_stamp
     *
     * Временной штамп
     *
     */
    public $timestamp;
    /**
     * @var integer $group_id
     *
     * Id Группы
     *
     */
    public $group_id;
    /**
     * @var integer $device_id
     *
     * Id Устройства
     */
    public $device_id;

    public $device_type;
}