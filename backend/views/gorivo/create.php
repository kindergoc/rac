<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gorivo */

$this->title = Yii::t('app', 'Create Gorivo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gorivos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gorivo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
