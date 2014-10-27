<?php
/** 
 * @author: Harry Tang (giaduy@gmail.com)
 * @link: http://www.greyneuron.com 
 * @copyright: Grey Neuron
 */

namespace harrytang\bootstrapsocial;


use yii\web\AssetBundle;

class BootstrapsocialAsset extends AssetBundle {
    public $sourcePath = '@bower/bootstrap-social';
    public $css = [
        'bootstrap-social.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];

} 