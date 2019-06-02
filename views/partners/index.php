<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Партнеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <div>
        <table>
            <tr>
                <td style="align-content: center;">
                    <img style="width: 100px; height: 100px;" src="/basic/imgs/izh_ru.png">
                </td>
            </tr>
            <tr>
                <td>
                    <a target="_blank" href="http://www.izh.ru/i/info/adm.html">Администрация города Ижевска</a>
                </td>
            </tr>
        </table>
    </div>
</div>
