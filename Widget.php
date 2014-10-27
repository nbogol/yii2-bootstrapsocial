<?php
/**
 * @author: Harry Tang (giaduy@gmail.com)
 * @link: http://www.greyneuron.com
 * @copyright: Grey Neuron
 */


namespace harrytang\bootstrapsocial;


class Widget extends \yii\base\Widget
{
    public $options = [];

    public function init()
    {
        parent::init();
        $this->register();
    }

    /**
     * register asset
     */
    protected function register()
    {
        $view = $this->getView();
        FontawesomeAsset::register($view);
        BootstrapsocialAsset::register($view);
    }
}
