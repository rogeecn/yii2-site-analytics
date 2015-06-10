<?php

namespace Rogee;

class Analytics extends \yii\base\Widget
{
    public $id;

    public function run()
    {
        return $this->registerJs();
    }
}
