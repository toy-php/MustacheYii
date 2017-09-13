<?php

namespace app\viewModels;

class ExtNewsWidget extends NewsWidget
{

    public function getTemplate(): string
    {
        return 'ext_news.mustache';
    }
}