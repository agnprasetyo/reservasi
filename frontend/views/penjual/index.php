<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login text-center">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <div class="box box-default">
                <div class="box box-body">

                    <br><br>
                    <p><?= Html::img('@web/images/profil.png', ['alt'=>'some', 'class'=>'thing', 'style' => 'max-width: 200px; border: none; background: none;']);?></p>
                    <hr>
                    <p>
                      <?php echo Html::a('Ubah Profil', ['ubah-profil'], ['class' => 'btn btn-lg btn-primary', 'style' => 'width: 200px; border: none;']) ?>
                    </p>
                    <br><br><br>
                    <div class="row">
                      <div class="col-md-6">
                        <?php echo Html::a('Data Reservasi', ['daftar-reservasi'], ['class' => 'btn btn-lg btn-success', 'style' => 'width: 200px; border: none;']) ?>
                      </div>
                      <div class="col-md-6">
                        <?php echo Html::a('Kelola Kursi', ['daftar-reservasi'], ['class' => 'btn btn-lg btn-warning', 'style' => 'width: 200px; border: none;']) ?>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
