<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuthAssign */

$this->title = 'Tambah Data ' . Yii::$app->request->get('assign');
$this->params['breadcrumbs'][] = ['label' => 'Data ' . Yii::$app->request->get('assign'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assign-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
