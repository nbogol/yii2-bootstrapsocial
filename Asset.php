<?php
/** 
 * @author: Harry Tang (giaduy@gmail.com)
 * @link: http://www.greyneuron.com 
 * @copyright: Grey Neuron
 */

namespace vendor\harrytang\bootstrapsocial;


use yii\web\AssetBundle;

class Asset extends AssetBundle {
    public $sourcePath = '@bower/bootstrap-social';
    public $css = [
        'bootstrap-social.css',
    ];

} 