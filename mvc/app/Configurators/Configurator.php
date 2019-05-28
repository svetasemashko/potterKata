<?php
namespace app\Configurators;

/*
|------------------------------------------------------------------
| Configurator
|------------------------------------------------------------------
|
| The class was created to configure the system. To get settings
| You need just call the necessary method. For example: to get
| app settings You should call Configurator::app().
|
*/

class Configurator
{
    /**
     * To get app parameters
     *
     * @return object
     */
    public static function app()
    {
        return (object) include __DIR__ . '/../../config/app.php';
    }

    /**
     * To get database parameters
     *
     * @return object
     */
    public static function db()
    {
        return (object) include __DIR__ . '/../../config/database.php';
    }
}