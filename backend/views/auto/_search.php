<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchAuto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tip') ?>

    <?= $form->field($model, 'naziv') ?>

    <?= $form->field($model, 'marka') ?>

    <?= $form->field($model, 'mjenjac') ?>

    <?php // echo $form->field($model, 'gorivo') ?>

    <?php // echo $form->field($model, 'vrata') ?>

    <?php // echo $form->field($model, 'oprema') ?>

    <?php // echo $form->field($model, 'dun') ?>

    <?php // echo $form->field($model, 'cijene') ?>

    <?php // echo $form->field($model, 'cijena') ?>

    <?php // echo $form->field($model, 'prtljaznik') ?>

    <?php // echo $form->field($model, 'putnika') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'order') ?>

    <?php // echo $form->field($model, 'naslovna') ?>

    <?php // echo $form->field($model, 'opis') ?>

    <?php // echo $form->field($model, 'firma') ?>

    <?php // echo $form->field($model, 'pogon') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
