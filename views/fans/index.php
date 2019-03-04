<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FansSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fans-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fans', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Nama',
            'Email:email',
            'Negara',
            'Komentar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
