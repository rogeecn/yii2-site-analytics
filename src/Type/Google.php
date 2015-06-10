<?php
namespace Rogee\Type;


use Rogee\Analytics;
use yii\web\View;

class Google extends Analytics{
    public $is_lay_load = false;

    private function registerJs(){
        $js_tpl = <<<JS
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '{$this->id}', 'auto');
  ga('send', 'pageview');
JS;

        $this->view->registerJs($js_tpl,View::POS_END);
    }
}