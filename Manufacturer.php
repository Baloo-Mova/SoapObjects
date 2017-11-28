<?php

class Manufacturer
{
    /**
     * @var integer
     * 1-1047
     * required
     */
    public $id;

    /**
     * @var string
     * Имя
     * required
     */
    public $name;

    /**
     * @var string
     * Логотип
     */
    public $logo;

    /**
     * @var string
     * Ссылка
     */
    public $link;

    /**
     * @var string
     * Статус
     */
    public $status;

    /**
     * @var string
     * Описание
     */
    public $descriptions;
}