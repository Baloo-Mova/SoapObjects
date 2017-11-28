<?php

class Mark
{

    /**
     * @var string
     * Метка
     */
    public $mark;

    /**
     * @var integer
     * Действие
     * 0 or 1
     * 0 - remove
     * 1 - add
     * required
     */
    public $action;

    /**
     * @var string
     * Статус
     */
    public $status;

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