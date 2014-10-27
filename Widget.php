<?php


namespace harrytang\bootstrapsocial;

use vendor\harrytang\bootstrapsocial\Asset;
use Yii;

class Widget extends \yii\base\Widget
{
    public $options = [];
    public function init()
    {
        parent::init();
        $this->register();
    }

    protected function register()
    {
        $view = $this->getView();

        Asset::register($view);


    }
}