<?php

class User
{

    /**
     * @var integer
     * Тип пользователя
     * 0 - Пользователь
     * 1 - Загрузчик
     * 2 - Мастер
     */
    public $user_type;

    /**
     * @var string
     */
    public $user_name;

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
     * @var string
     * Статус
     */
    public $status;

    /**
     * @var double
     * Сумма коректировки или пополнения
     */
    public $value;
}