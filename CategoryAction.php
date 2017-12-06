<?php

/**
 * Created by PhpStorm.
 * User: Валентин
 * Date: 06.12.2017
 * Time: 15:42
 */
class CategoryAction
{
    /**
     * @var int
     *
     * required
     * ID категории на сервере (1 – супы, 2 – горячее, 3 – салаты, 4 – десерты, 5 – напитки, 6 – завтраки, 7-n любые другие категории)
     */
    public $category_id;

    /**
     * @var string
     *
     * required
     * Имя категории
     */
    public $category_name;

    /**
     * @var int
     *
     * required
     * 0 - remove
     * 1 - add or update
     */
    public $action;

    /**
     * @var string
     *
     * status
     */
    public $status;
}