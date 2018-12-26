<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Transaksi */

$this->title = $modelRestoran->value;
$this->params['breadcrumbs'][] = ['label' => 'Reservasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-create">

    <h1><?= Html::encode( $this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelRestoran' => $modelRestoran,
    ]) ?>

</div>
