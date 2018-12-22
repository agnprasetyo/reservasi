<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Transaksi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-view">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'id_user',
                'value' => function ($model) {
                  return $model['user']->username;
                },
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'id_restoran',
                'value' => function ($model) {
                  return $model['restoran']->value;
                },
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'jumlah_reservasi',
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'date',
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'note',
            ],
            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'total_pembayaran',
            ],
            // 'id_restoran',
            // 'jumlah_reservasi',
            // 'date',
            // 'note:ntext',
            // 'total_pembayaran',
        ],
    ]) ?>

</div>
