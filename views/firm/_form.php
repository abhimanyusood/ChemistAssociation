<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Firm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="firm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firm_name')->textInput(['maxlength' => true,'placeholder' => "Enter the name of the Firm"]) ?>

    <?= $form->field($model, 'proprietor_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proprietor_middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proprietor_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firm_mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proprietor_mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proprietor_dob')->widget(\yii\jui\DatePicker::class, [
    //'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'proprietor_marriage_anniversary')->widget(\yii\jui\DatePicker::class, [
    //'language' => 'ru',
    'dateFormat' => 'yyyy-MM-dd',
])?>

    <?= $form->field($model, 'proprietor_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drug_lisence_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gst_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'food_lisence_registration_no')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'added_on')->textInput() ?>

    <?= $form->field($model, 'modified_on')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
