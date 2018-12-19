<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TransaksiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rumah Makan Area UNS';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card">
  <h3 align="center" >Rumah Makan Area UNS</h3>
</div>

<?php foreach ($dataProvider->getModels() as $key => $value): ?>

<div class="panel panel-default">
  <div class="panel-body">
    <table style="width: 100%;">
      <tr>
        <td style="vertical-align: middle; width : 95%;">
          <?php echo $value['restoran']->value ?>
          <br>
          <?php echo $value['restoran']->alamat ?>
        </td>
        <td style="vertical-align: middle; width: 5%;">
          <!-- <div class="btn-group-vertical"> -->
              <?php echo  Html::a('Lihat', ['$url'], ['class'=> 'btn btn-default',
                'title' => Yii::t('app', 'lead-view'),
              ]); ?>
              <br><br>
              <?php echo  Html::a('Status', ['$url'], ['class'=> 'btn btn-default',
                'title' => Yii::t('app', 'lead-delete'),
              ]);

              ?>
          <!-- </div> -->
        </td>
      </tr>
    </table>
  </div>
</div>

<?php endforeach; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'id_user',
            [
                'attribute'=>'id_restoran',
                'value' => 'restoran.value',
            ],
            // 'jumlah_reservasi',
            // 'date',
            //'note:ntext',
            //'total_pembayaran',
            // ['class' => 'yii\grid\ActionColumn'],

            [
              'class' => 'yii\grid\ActionColumn',
              'header' => 'Actions',
              'headerOptions' => ['style' => 'color:#337ab7'],
              'template' => '{view}{create}',
              'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                'title' => Yii::t('app', 'lead-view'),
                    ]);
                },
                'create' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                'title' => Yii::t('app', 'lead-delete'),
                    ]);
                }

              ],
              'urlCreator' => function ($action, $model, $key, $index) {
                if ($action === 'view') {
                    $url ='index.php?r=transaksi/view&id='.$model->id;
                    return $url;
                }
                if ($action === 'create') {
                    $url ='index.php?r=transaksi/create';
                    return $url;
                }
              }
          ],

        ],

    ]); ?>

</div>
