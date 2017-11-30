<?php

class Product
{
    /**
     * @var integer
     * id Продукта
     * required
     */
    public $id;

    /**
     * @var int[]
     * id категориий
     * required как пустой массив
     */
    public $categories;

    /**
     * @var string
     * Наименование
     * required
     */
    public $name;

    /**
     * @var string
     * Тип
     * 0 - 1
     * 0 - фиксированный
     * 1 - на весах
     *
     * required
     */
    public $type;

    /**
     * @var string
     * Вес в граммах
     *
     */
    public $weight;

    /**
     * @var string
     * Срок годности в часах
     * required
     */
    public $shelf_life;

    /**
     * @var string
     * Изображение для производства
     *
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

    /**
     * @var double
     * Цена продукта
     * required для холодильника
     */
    public $price;

}