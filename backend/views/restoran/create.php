<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Restoran */

$this->title = 'Daftarakan Restoran';
// $this->params['breadcrumbs'][] = ['label' => 'Restorans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restoran-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
