<?php

namespace app\viewModels;

use app\components\view\BaseViewModel;
use app\components\view\BaseWidget;

class NewsWidget extends BaseWidget
{

    public function getName()
    {
        return 'news';
    }

    public function getTemplate(): string
    {
        return 'news.mustache';
    }

    public function getViewModel(): ?BaseViewModel
    {
        return null;
    }
}