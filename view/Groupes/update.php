<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Groupes */

$this->title = 'Update Groupes: ' . $model->groupe-cle;
$this->params['breadcrumbs'][] = ['label' => 'Groupes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->groupe-cle, 'url' => ['view', 'id' => $model->groupe-cle]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="groupes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
