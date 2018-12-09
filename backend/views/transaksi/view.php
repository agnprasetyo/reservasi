<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Transaksi */
?>
<div class="transaksi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_user',
            'id_restoran',
            'jumlah_reservasi',
            'date',
            'note:ntext',
            'total_pembayaran',
        ],
    ]) ?>

</div>
