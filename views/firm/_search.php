<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FirmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="firm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'firm_name') ?>

    <?= $form->field($model, 'proprietor_firstname') ?>

    <?= $form->field($model, 'proprietor_middlename') ?>

    <?= $form->field($model, 'proprietor_lastname') ?>

    <?php // echo $form->field($model, 'firm_mobile') ?>

    <?php // echo $form->field($model, 'proprietor_mobile') ?>

    <?php // echo $form->field($model, 'proprietor_dob') ?>

    <?php // echo $form->field($model, 'proprietor_marriage_anniversary') ?>

    <?php // echo $form->field($model, 'proprietor_email') ?>

    <?php // echo $form->field($model, 'drug_lisence_no') ?>

    <?php // echo $form->field($model, 'gst_no') ?>

    <?php // echo $form->field($model, 'food_lisence_registration_no') ?>

    <?php // echo $form->field($model, 'added_on') ?>

    <?php // echo $form->field($model, 'modified_on') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
