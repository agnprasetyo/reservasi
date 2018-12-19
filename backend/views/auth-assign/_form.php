<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\User;
use app\models\AuthAssign;
use kartik\widgets\Select2;

$listUser = User::find()
->where(['status' => User::STATUS_ACTIVE])
->all();

$listActive = AuthAssign::find()
->joinWith(['user'])
->where(['assign' => Yii::$app->request->get('assign')])
->all();

$listUser   = ArrayHelper::map($listUser, 'id', 'username');
$listActive = ArrayHelper::map($listActive, 'id_user', 'user.username');
$list       = array_diff($listUser, $listActive);

/* @var $this yii\web\View */
/* @var $model app\models\AuthAssign */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-assign-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->widget(Select2::classname(), [
        'data' => $list,
        'pluginOptions' => [
            'placeholder' => ' --- Pilih User --- ',
        ],
    ])->label('Nama User') ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
