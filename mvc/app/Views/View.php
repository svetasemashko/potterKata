<?php
namespace app\Views;


class View
{
    /**
     * @var
     */
    protected $title;

    /**
     * @var
     */
    protected $template;

    /**
     * View constructor.
     * @param $attributes
     */
    public function __construct($attributes)
    {
        foreach ($attributes as $property => $value) {
            $this->{$property} = $value;
        }
    }

    /**
     * To display this view
     * @param $view
     */
    public function show($view)
    {
        include_once __DIR__ . $view->template;
    }
}