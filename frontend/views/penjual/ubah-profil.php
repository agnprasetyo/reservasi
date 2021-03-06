<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Ubah Profil';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login text-center">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="box box-default">
                <div class="box box-body">

                    <br><br><br>
                    <p><?= Html::img('@web/images/profil.png', ['alt'=>'some', 'class'=>'thing', 'style' => 'max-width: 200px; border: none; background: none;']);?></p>
                    <hr>

                      <?php $form = ActiveForm::begin([
                          'id' => 'login-form',
                          'layout' => 'horizontal',
                          // 'fieldConfig' => [
                          //     'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                          //     'labelOptions' => ['class' => 'col-lg-1 control-label'],
                          // ],
                      ]); ?>

                      <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                      <?= $form->field($model, 'password')->passwordInput() ?>

                      <div class="form-group">
                          <div class="col-lg-offset-1 col-lg-8">
                              <?= Html::submitButton('Simpan', ['class' => 'btn btn-success btn-block pull-right', 'name' => 'saved-button']) ?>
                          </div>
                      </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
