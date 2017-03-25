<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Marke */

$this->title = Yii::t('app', 'Create Marke');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Markes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marke-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
