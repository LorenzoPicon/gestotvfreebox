<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Groupes */
/* @var $form ActiveForm */
?>
<div class="groupes">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'groupe-deno') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- groupes -->
