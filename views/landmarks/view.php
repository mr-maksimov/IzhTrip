<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Landmarks */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
//$this->registerJsFile('path/to/main.js');
//$this->registerCssFile('path/to/site.css');
?>
<div class="landmarks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div style="width: 100%">
        <div style="width: 300px; float:left; margin-right: 10px;">
            <img style="width: 300px; height: 300px;" src="/basic/imgs/<?=$model->id?>.jpg">
        </div>
        <div style="float:left;">
            <p>
                <?=$model->content?>
            </p>
        </div>
    </div>
</div>
