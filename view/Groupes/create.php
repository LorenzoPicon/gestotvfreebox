<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Groupes */

$this->title = 'Create Groupes';
$this->params['breadcrumbs'][] = ['label' => 'Groupes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groupes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
