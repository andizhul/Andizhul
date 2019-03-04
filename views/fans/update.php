<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fans */

$this->title = 'Update Fans: ' . $model->Nama;
$this->params['breadcrumbs'][] = ['label' => 'Fans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Nama, 'url' => ['view', 'id' => $model->Nama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fans-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
