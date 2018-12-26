<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rumah Makan Area UNS';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
  <h1 align="center" >Rumah Makan Area UNS</h1>
</div>

<p class="pull-right">
    <?= Html::a('Reservasi Saya', ['reservasi-saya'], ['class' => 'btn btn-primary']) ?>
</p>
<br><br><br>

<?php foreach ($dataProvider->getModels() as $key => $value): ?>
<div class="panel panel-default">
  <div class="panel-body">
    <table style="width: 100%;">
      <tr>
        <td><?= Html::img('@web/images/img.png', ['alt'=>'some', 'class'=>'thing', 'style' => 'max-width: 20px; border: none; background: none;']);?></td>

        <td style="vertical-align: middle; width : 90%;">
          <strong style="font-size: 30px;"><?php echo $value['restoran']->value ?></strong>
          <br>
          <?php echo $value['restoran']->alamat ?>
        </td>
        <td style="vertical-align: middle; width: 5%;">
          <!-- <div class="btn-group-vertical"> -->
              <?php echo  Html::a('Lihaat', ['create', 'restoran' => $value['restoran']->id], ['class'=> 'btn btn-success',
                'title' => Yii::t('app', 'lead-create'),
              ]); ?>
              <br><br>
              <?php
              echo  Html::a('Status', ['view'], ['class'=> 'btn btn-primary',
                'title' => Yii::t('app', 'lead-view'),
              ]);


            //   echo  Html::a('Status',
            //
            //   // ['view'], ['class'=> 'btn btn-success',
            //   //   'title' => Yii::t('app', 'lead-view'),
            //   //
            //   // ]
            //   [
            //       'attribute' => 'status',
            //       'format'    => 'raw',
            //       'filter'    => $searchModel->listStatus(),
            //       'value'     => function ($model)
            //       {
            //           switch ($model->status) {
            //               case $model::STATUS_DITERIMA:
            //                   $status = '<span class="label label-success">'.$model::STATUS_DITERIMA.'</span>';
            //                   break;
            //
            //               case $model::STATUS_DITOLAK:
            //                   $status = '<span class="label label-danger">'.$model::STATUS_DITOLAK.'</span>';
            //                   break;
            //
            //               case $model::STATUS_PENDING:
            //                   $status = '<span class="label label-warning">'.$model::STATUS_PENDING.'</span>';
            //                   break;
            //
            //               default:
            //                   $status = '<span class="label label-danger">'.$model::STATUS_DELETED.'</span>';
            //                   break;
            //           }
            //
            //           return $status;
            //       },
            //   ]
            // );
              ?>
          <!-- </div> -->
        </td>
      </tr>
    </table>
  </div>
</div>

<?php endforeach; ?>

    <?php
    // GridView::widget([
    //     'dataProvider' => $dataProvider,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],
    //
    //         // 'id',
    //         // 'id_user',
    //         [
    //             'attribute'=>'id_restoran',
    //             'value' => 'restoran.value',
    //         ],
    //         // 'jumlah_reservasi',
    //         // 'date',
    //         //'note:ntext',
    //         //'total_pembayaran',
    //         // ['class' => 'yii\grid\ActionColumn'],
    //
    //         [
    //           'class' => 'yii\grid\ActionColumn',
    //           'header' => 'Actions',
    //           'headerOptions' => ['style' => 'color:#337ab7'],
    //           'template' => '{view}{create}',
    //           'buttons' => [
    //             'view' => function ($url, $model) {
    //                 return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
    //                             'title' => Yii::t('app', 'lead-view'),
    //                 ]);
    //             },
    //             'create' => function ($url, $model) {
    //                 return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
    //                             'title' => Yii::t('app', 'lead-delete'),
    //                 ]);
    //             }
    //
    //           ],
    //           'urlCreator' => function ($action, $model, $key, $index) {
    //             if ($action === 'view') {
    //                 $url ='index.php?r=transaksi/view&id='.$model->id;
    //                 return $url;
    //             }
    //             if ($action === 'create') {
    //                 $url ='index.php?r=transaksi/create';
    //                 return $url;
    //             }
    //           }
    //       ],
    //
    //     ],
    //
    // ]); ?>

</div>
