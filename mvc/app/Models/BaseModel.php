<?php
namespace app\Models;

use app\Configurators\Configurator;

class BaseModel
{
    /**
     * @param $action
     * @return array
     */
    public function getAttributes($action)
    {
        $app = Configurator::app();
        $attributes = [
            'title'    => $app->name,
            'template' => '/' . $app->layout . '/' . $action . '.php',
        ];

        return $attributes;
    }
}