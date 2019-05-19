<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Landmarks */

$this->title = 'Create Landmarks';
$this->params['breadcrumbs'][] = ['label' => 'Landmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="landmarks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
