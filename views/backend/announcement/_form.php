<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\board\models\Board */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="announcement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'priority')->dropDownList([ 'Acil' => 'Acil', 'Normal' => 'Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <?= $form->field($model, 'author')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
