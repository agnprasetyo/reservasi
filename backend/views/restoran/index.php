<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RestoranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Restorans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restoran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Restoran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'value',
            'kuota',
            'alamat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>