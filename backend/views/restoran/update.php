<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Restoran */

$this->title = 'Update Restoran: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Restorans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="restoran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
