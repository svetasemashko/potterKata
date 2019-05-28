<?php
namespace app\Controllers;

use app\Models\BaseModel;
use app\Views\View;

class BaseController {

    /**
     * @var BaseModel
     */
    protected $model;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->model = new BaseModel();
    }

    /**
     * The main controller method
     */
    public function index()
    {
        $attributes = $this->model->getAttributes(__FUNCTION__);
        $view = new View($attributes);
        $view->show($view);
    }
}