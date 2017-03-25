<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Marke */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="marke-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'naziv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poredak')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
