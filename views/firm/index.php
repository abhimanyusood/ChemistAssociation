<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FirmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Firms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Firm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
