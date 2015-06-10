<?php
namespace Rogee\Type;


use Rogee\Analytics;
use yii\web\View;

class WuYiLa extends Analytics{
    public $is_lay_load = false;

    private function registerJs(){
        $js_file = sprintf('http://js.users.51.la/%s.js', $this->id);

        $this->view->registerJsFile($js_file,View::POS_END);
    }
}