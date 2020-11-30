<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model denielmaomay\auditlogs\models\Log */

$this->title = 'Update Log: ' . $model->change_id;
$this->params['breadcrumbs'][] = ['label' => 'Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->change_id, 'url' => ['view', 'id' => $model->change_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
