<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Data User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a($model->status == $model::STATUS_ACTIVE ? 'Non Aktifkan' : 'Aktifkan', ['delete', 'id' => $model->id], [
            'class' => $model->status == $model::STATUS_ACTIVE ? 'btn btn-danger' : 'btn btn-success',
            'data' => [
                'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="table-responsive">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                // 'id',
                'username',
                // 'auth_key',
                // 'password_hash',
                // 'password_reset_token',
                'email:email',

                [
                    'attribute' => 'status',
                    'value' => function ($model)
                    {
                        return $model->status == $model::STATUS_ACTIVE ? 'Aktif' : 'Non Aktif';
                    }
                ],
                // 'created_at',
                // 'updated_at',
            ],
        ]) ?>
    </div>
</div>
