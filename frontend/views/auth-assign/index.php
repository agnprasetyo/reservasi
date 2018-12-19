<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AuthAssignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auth Assigns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assign-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Auth Assign', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'assign',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
