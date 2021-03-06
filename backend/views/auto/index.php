<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchAuto */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Autos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Auto'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tip',
            'naziv',
            'marka',
            'mjenjac',
            // 'gorivo',
            // 'vrata',
            // 'oprema:ntext',
            // 'dun:ntext',
            // 'cijene:ntext',
            // 'cijena',
            // 'prtljaznik',
            // 'putnika',
            // 'link',
            // 'order',
            // 'naslovna',
            // 'opis:ntext',
            // 'firma',
            // 'pogon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
