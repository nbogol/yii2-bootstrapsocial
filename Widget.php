<?php


namespace harrytang\bootstrapsocial;


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

        BootstrapsocialAsset::register($view);


    }
}
