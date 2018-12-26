<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput()?>

    <?php // $form->field($model, 'id_restoran')->textInput(['value' => $modelRestoran->id, 'disabled' => true, 'readOnly' => true]) ?>

    <?= $form->field($model, 'nama')->textInput() ?>

    <?= $form->field($model, 'jumlah_reservasi')->textInput() ?>

    <?= $form->field($model, 'date')->widget(DateTimePicker::classname(), [
        // 'options' => ['placeholder' => date('Y-m-d')],
        // 'pluginOptions' => [
        //     'autoclose' => true,
        //     'format'    => 'yyyy-mm-dd',
        // ],

        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd H:i',
            'startDate' => '01-Mar-2014 12:00 AM',
            'todayHighlight' => true
        ],
    ])?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total_pembayaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
