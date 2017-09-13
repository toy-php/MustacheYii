<?php

namespace app\components\view;

use yii\base\Model;

class BaseViewModel extends Model
{

    private $_widgets = [];

    public function widget()
    {
        return function ($name){
            $name = trim($name);
            $widget = isset($this->_widgets[$name])
                ? $this->_widgets[$name]
                : null;
            if(is_callable($widget)){
                return $this->_widgets[$name] = $widget();
            }
            return $widget;
        };
    }

    public function addWidget(WidgetInterface $widget)
    {
        $this->_widgets[$widget->getName()] = $widget;
    }

    /**
     * Рендеринг шаблона
     * @param $template
     * @param $viewModel
     * @return string
     */
    public function render($template, $viewModel = null)
    {
        return \Yii::$app->view->render($template, $viewModel);
    }
}