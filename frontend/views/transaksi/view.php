<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Transaksi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reservasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Bayar', ['bayar', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah data sudah benar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            // 'id_user',
            // [
            //     'class'=>'\kartik\grid\DataColumn',
            // ],
            //     'attribute'=>'id_user',
            //     'value' => function ($model) {
            //       return $model['user']->username;
            //     },

            [
                'class'=>'\kartik\grid\DataColumn',
                'attribute'=>'nama',
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
