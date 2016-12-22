<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Groupes */

$this->title = $model->groupe-cle;
$this->params['breadcrumbs'][] = ['label' => 'Groupes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groupes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->groupe-cle], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->groupe-cle], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'groupe-cle',
            'groupe-deno:ntext',
        ],
    ]) ?>

</div>
