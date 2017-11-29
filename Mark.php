<?php

class Mark
{

    /**
     * @var string
     * Метка
     * required
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
     * required
     */
    public $production_id;

    /**
     * @var integer
     * Id производителя
     * required
     */
    public $manufacturer_id;

}