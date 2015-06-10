<?php
namespace Rogee\Type;


use Rogee\Analytics;
use yii\web\View;

class Cnzz extends Analytics{
    public $is_lay_load = false;

    private function registerJs(){
        $js_file = sprintf("http://s11.cnzz.com/stat.php?id=%s&web_id=%s",$this->id,$this->id);
        $this->view->registerJsFile($js_file,View::POS_END);
    }
}