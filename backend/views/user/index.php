<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Data User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="table-responsive">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'email:email',

            [
                'label' => 'Hak Akses',
                'value' => function ($model)
                {
                    $listAssign = Yii::$app->assign->listAssign($model->id);
                    $_assign = '';
                    foreach ($listAssign as $assign) {
                        $_assign .= $assign . ', ';
                    }

                    return substr($_assign, 0, -2);
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'options' => [
                    'style' => 'width: 100px',
                ],
                'buttons' => [
                    'view'   => function ($url, $model) {
                        return Html::a('<i class="fa fa-eye"></i>',
                            $url,
                            [
                                'title' => 'Lihat',
                                'class' => 'btn btn-xs btn-primary',
                            ]
                        );
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<i class="fa fa-pencil"></i>',
                            $url,
                            [
                                'title'               => 'Perbarui',
                                'class'               => 'btn btn-warning btn-xs',
                            ]
                        );
                    },
                    'delete' => function ($url, $model) {
                        if (Yii::$app->user->id == $model->id) {

                            return null;
                        }
                        if ($model->status == $model::STATUS_DELETED) {
                            return Html::a('<i class="fa fa-check"></i>',
                                $url,
                                [
                                    'title'               => 'Aktifkan',
                                    'class'               => 'btn btn-success btn-xs',
                                    'data-method'         => 'post',
                                ]
                            );
                        }
                        return Html::a('<i class="fa fa-times"></i>',
                            $url,
                            [
                                'title'               => 'Non Aktifkan',
                                'class'               => 'btn btn-danger btn-xs',
                                'data-method'         => 'post',
                            ]
                        );
                    }
                ],
            ],
        ],
    ]); ?>
</div>
<?php Pjax::end(); ?>
</div>
