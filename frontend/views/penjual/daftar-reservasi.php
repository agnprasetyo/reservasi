<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Reservasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => require '_columns.php',
    ]); ?>
</div>
