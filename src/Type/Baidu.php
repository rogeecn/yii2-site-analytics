<?php
/**
 * Created by PhpStorm.
 * User: yanghao
 * Date: 2015/6/10
 * Time: 17:38
 */

namespace Rogee\Type;


use Rogee\Analytics;

class Baidu extends Analytics{
    public $lazyload = false;

    private function registerJs(){
        $lazy_load_js = <<<_JS_
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?{$this->id}";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
_JS_;

        $normal_js = <<<JS_
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F{$this->id}' type='text/javascript'%3E%3C/script%3E"));
JS_;

        if ($this->lazyload) {
            $this->view->registerJs($lazy_load_js,View::POS_HEAD);
            return;
        }

        $this->view->registerJs($lazy_load_js,View::POS_END);
    }
}