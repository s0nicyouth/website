<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = null;
    public function actionIndex() {
            return $this->renderPartial("index");
    }
}
