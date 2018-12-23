<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RestoranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="restoran-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p align="right">
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span>', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => require '_columns.php',
    ]); ?>
</div>
