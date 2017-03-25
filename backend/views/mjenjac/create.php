<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mjenjac */

$this->title = Yii::t('app', 'Create Mjenjac');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mjenjacs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mjenjac-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
