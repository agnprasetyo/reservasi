<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Restoran */
?>
<div class="restoran-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'value',
            'kuota',
            'alamat',
            'id_user',
        ],
    ]) ?>

</div>
