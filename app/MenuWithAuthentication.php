<?php
/**
 * Created by PhpStorm.
 * User: albert
 * Date: 14/12/15
 * Time: 18:18
 */

namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\MenuItem;

class MenuWithAuthentication {


    /**
     * @var null
     */
    protected static $instance = null;

    /**
     * @var MenuItem[]
     */
    protected $menu;


    /**
     * @param $id
     * @return MenuItem
     */
    function __construct()
    {
    }

    /**
     * @param $id
     * @return MenuItem
     */
    public static function menu($id)
    {
        return new MenuItem($id);

    }

    /**
     * @return null|static
     */
    public static function instance(){
        if(is_null(static::$instance)){
            return static::$instance = new static;
        }
        return static::$instance;
    }

    /**
     * @return mixed
     */
    public function getMenu(){
        return $this->menu->items();
    }
}