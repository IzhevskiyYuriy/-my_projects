<?php
/* Пути по-умолчанию для поиска файлов */
set_include_path(get_include_path()
                                .PATH_SEPARATOR.'application/controllers'
                                .PATH_SEPARATOR.'application/models'
                                .PATH_SEPARATOR.'application/views');

/* Имена файлов: views */
const USER = '../views/index.php';



// 2. Подключение файлов системы
if (!defined('ROOT')) define ('ROOT', dirname(__FILE__));



require_once(ROOT.'/data/Db.php');


/* Автозагрузчик классов */
function __autoload($class){
  require_once($class.'.php');
}

/* Инициализация и запуск FrontController */
$front = FrontController::getInstance();//создаем экземпляр класса =и дергаем FrontController::черезстатический метод 
$front->route();

/* Вывод данных . Возврашает представление( Views) и показывает пользователям на экран*/
//var_dump($front->getBody()) ;