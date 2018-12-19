<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\searchs\AuthAssign */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data ' . Yii::$app->request->get('assign');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assign-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Data ' . Yii::$app->request->get('assign'), ['create', 'assign' => Yii::$app->request->get('assign')], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="table-responsive">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'id_user',
                    'label'     => 'Username',
                    'value'     => 'user.username',
                ],
                [
                    'attribute' => 'assign',
                    'label'     => 'Email',
                    'format'    => 'email',
                    'value'     => 'user.email',
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'options' => [
                        'style' => 'width: 100px',
                    ],
                    'template' => '{delete}',
                    'buttons' => [
                        'delete' => function ($url, $model) {
                            if (Yii::$app->user->id == $model->id_user) {

                                return null;
                            }

                            return Html::a('<i class="fa fa-times"></i>',
                                $url,
                                [
                                    'title'  => 'Cabut Hak Akses',
                                    'class'  => 'btn btn-danger btn-xs',
                                    'data-method' => 'post',
                                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
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
