<?php

namespace app\components\view;

use yii\helpers\ArrayHelper;

abstract class BaseWidget extends BaseViewModel implements WidgetInterface
{

    private $_view;

    abstract public function getTemplate(): string;

    abstract public function getViewModel(): ?BaseViewModel;

    public function getAdditionalData()
    {
        return [];
    }

    public function __invoke()
    {
        if (empty($this->_view)) {
            $data = ArrayHelper::merge(
                $this->getAdditionalData(),
                ['model' => $this->getViewModel()]
            );
            $this->_view = $this->render($this->getTemplate(), $data);
        }
        return $this->_view;
    }
}