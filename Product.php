<?php

class Product
{
    /**
     * @var integer
     * id Продукта
     */
    public $id;

    /**
     * @var int[]
     * id категориий
     */
    public $categories;

    /**
     * @var string
     * Наименование
     */
    public $name;

    /**
     * @var string
     * Тип
     * 0 - 1
     * 0 - фиксированный
     * 1 - на весах
     */
    public $type;

    /**
     * @var string
     * Вес в граммах
     */
    public $weight;

    /**
     * @var string
     * Срок годности в часах
     */
    public $shelf_life;

    /**
     * @var string
     * Изображение для производства
     */
    public $logo;

    /**
     * @var string
     * Ссылка на изображение для производства
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
    public $description;

}