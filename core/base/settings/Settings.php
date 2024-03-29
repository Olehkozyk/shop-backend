<?php


namespace core\base\settings;


class Settings
{

    static private $_instance;


    private $routes = [
        'admin' => [
            'name' => 'admin',
            'path' => 'core/admin/controller/',
            'hrUrl' => false,
        ],
        'settings' => [
            'path' => 'core/base/settings/'
        ],
        'plugins' => [
            'path' => 'core/plugins/',
            'hrUrl' => false,
        ],
        'user' => [
            'path' => 'core/user/controller/',
            'hrUrl' => true,
            'routes' => [

            ]
        ],
        'default' => [
            'controller' => 'IndexController',
            'inputMethod' => 'inputData',
            'outputMethod' => 'outputData',
        ]
    ];

    private $teplateArr = [
        'text' => ['name','phone', 'adress', ],
        'textarea' => ['content', 'keywords',  ],
    ];

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    static public function get($property)
    {
        return self::instance()->$property;
    }

    static public function instance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }
        return self::$_instance = new self;
    }

    public function  clueProperties($class) {
        $baseProperties = [];

        foreach($this as $name => $item) {
            $property = $class::get($name);
          if (is_array($property) && is_array($item)) {
              $newProperty = array_merge_recursive($n1, $n2);
          }
        }
        exit();
    }

}