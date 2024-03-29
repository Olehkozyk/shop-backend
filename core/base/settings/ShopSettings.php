<?php


namespace core\base\settings;

use core\base\settings\Settings;

class ShopSettings extends Settings
{
    static private  $_instance;
    private $baseSettings;

    private $teplateArr = [
      'text' => ['price', 'short',],
      'textarea' => ['goods_content',],
    ];

    static public function get($property)
    {
        return self::instance()->$property;
    }

    static public function instance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }
        self::$_instance = new self;
        self::$_instance->baseSettings = Settings::instance();
        $baseProperties = self::$_instance->baseSettings->clueProperties(get_class());
        return self::$_instance = new self;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}