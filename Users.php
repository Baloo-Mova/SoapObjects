<?php

class Users
{

    /**
     * @var integer
     * Id
     */
    public $personal_id;

    /**
     * @var integer
     * Тип пользователя
     */
    public $user_type;

    /**
     * @var integer
     * Номер карты
     */
    public $number_card;

    /**
     * @var string
     *  Uid пользователя
     */
    public $uid;

    /**
     * @var integer
     * 1,2,3,4
     * 2 - Редактирование пользователя
     * 3 - Пополнение баланса
     * 4 - Корректировка баланса
     * 1 - Добавление пользователя
     * required
     */
    public $action;

    /**
     * @var string
     * Статус
     */
    public $status;

    /**
     * @var double
     * Сумма коректировки или пополнения
     */
    public $value;

    /**
     * @var integer
     * Id производства
     */
    public $production_id;

    /**
     * @var integer
     * Id производителя
     */
    public $manufacturer_id;
}