<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Restoran */

$this->title = 'Create Restoran';
$this->params['breadcrumbs'][] = ['label' => 'Restorans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restoran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
