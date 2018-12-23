<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */

$params['restoran'] = ArrayHelper::map(\common\models\Restoran::find()->all(), 'id', 'value');
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'id_restoran')->dropDownList($params['restoran'], ['prompt' => 'Pilih restoran']) ?>

    <?= $form->field($model, 'jumlah_reservasi')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total_pembayaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
