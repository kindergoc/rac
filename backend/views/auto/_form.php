<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auto */
/* @var $form yii\widgets\ActiveForm */
?>
<?php //var_dump($marka);
//die;
//$marka = $marka->naziv;
//var_dump($marka,$tip);die;

foreach ($marka as $bla) {
    $nazivmarke[$bla->id] = $bla->naziv;
}


foreach ($tip as $bla1) {
    $kategorija[$bla1->id] = $bla1->naziv;
}


?>
<div class="auto-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']
    ]); ?>

    <div class="col-sm-9"> <?= $form->field($model, 'naziv')->textInput(['maxlength' => true]) ?></div>

    <div class="col-sm-3"><?= $form->field($model, 'cijena')->textInput() ?></div>

    <div class="col-sm-4"> <?= $form->field($model, 'tip')->dropDownList([$kategorija]) ?>

        <?= $form->field($model, 'marka')->dropDownList([$nazivmarke]) ?></div>

    <div class="col-sm-4"> <?= $form->field($model, 'mjenjac')->radioList([1=>'ručni mjenjač', 2=>'automatik']) ?>

        <?= $form->field($model, 'gorivo')->radioList([1=>'benzin', 2=>'diesel']) ?></div>

    <div class="col-sm-4"> <?= $form->field($model, 'vrata')->radioList([2=>2, 3=>3, 4=>4, 5=>5]) ?>

        <?= $form->field($model, 'putnika')->radioList([2=>2, 3=>3, 4=>4, 5=>5,6=>6,7=>7,8=>8,9=>9]) ?></div>

    <?= $form->field($model, 'oprema')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'opis')->textarea(['rows' => 6]) ?>

    <div class="col-sm-6">  <?= $form->field($model, 'dun')->textInput() ?>

        <?= $form->field($model, 'cijene')->textInput() ?></div>

    <div class="col-sm-6">     <?= $form->field($model, 'prtljaznik')->textInput(['maxlength' => true]) ?>

    


        <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?></div>


        <img src="/rent-a-car/<?= $model->link ?>" />

    <!---->
    <!--    --><? //= $form->field($model, 'order')->textInput() ?>
    <!---->
    <!--    --><? //= $form->field($model, 'naslovna')->textInput() ?>
    <!---->
    <!--    --><? //= $form->field($model, 'firma')->textInput() ?>
    <!---->
    <!--    --><? //= $form->field($model, 'pogon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
