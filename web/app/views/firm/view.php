<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Firm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Firms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'firm_name',
            'proprietor_firstname',
            'proprietor_middlename',
            'proprietor_lastname',
            'firm_mobile',
            'proprietor_mobile',
            'proprietor_dob',
            'proprietor_marriage_anniversary',
            'proprietor_email:email',
            'drug_lisence_no',
            'gst_no',
            'food_lisence_registration_no',
            'added_on',
            'modified_on',
        ],
    ]) ?>

</div>
