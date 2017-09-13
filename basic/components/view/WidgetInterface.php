<?php

namespace app\components\view;

interface WidgetInterface
{

    public function getName();

    public function __invoke();

}