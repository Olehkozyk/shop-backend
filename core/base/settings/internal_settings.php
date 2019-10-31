<?php
defined('VG_ACCESS') or die('die');

const
TEMPLATE = 'templates/default/',
ADMIN_TEMPLATE = 'core/admin/views/',
COOCKIE_VERSION = '1.0.0',
CRYPT_KEY = '',
COOCKIE_TIME = 60,
BLOCK_TIME = 3,
QTY = 8,
QTY_LINKS = 3,
ADMIN_CSS_JS = [
    'styles' => [],
    'scripts' => []
],
USER_CSS_JS = [
    'styles' => [],
    'scripts' => []
];

use core\base\exceptions\RouteException;


function autoloadMainClasses($class_name) {
    $class_name = str_replace('\\', '/', $class_name);

    if (!@include_once $class_name . '.php') {
        throw new RouteException('Не верное имя файла для подключения - ' . $class_name);
    }
}
spl_autoload_register('autoloadMainClasses');