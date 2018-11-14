<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ch_firm".
 *
 * @property string $id
 * @property string $firm_name
 * @property string $proprietor_firstname
 * @property string $proprietor_middlename
 * @property string $proprietor_lastname
 * @property string $firm_mobile
 * @property string $proprietor_mobile
 * @property string $proprietor_dob
 * @property string $proprietor_marriage_anniversary
 * @property string $proprietor_email
 * @property string $drug_lisence_no
 * @property string $gst_no
 * @property string $food_lisence_registration_no
 * @property string $added_on
 * @property string $modified_on
 */
class Firm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ch_firm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firm_mobile', 'proprietor_mobile'], 'integer'],
            [['proprietor_dob', 'proprietor_marriage_anniversary', 'added_on', 'modified_on'], 'safe'],
            [['firm_name', 'proprietor_firstname', 'proprietor_middlename', 'proprietor_lastname', 'proprietor_email', 'drug_lisence_no', 'gst_no', 'food_lisence_registration_no'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firm_name' => 'Firm Name',
            'proprietor_firstname' => 'Proprietor Firstname',
            'proprietor_middlename' => 'Proprietor Middlename',
            'proprietor_lastname' => 'Proprietor Lastname',
            'firm_mobile' => 'Firm Mobile',
            'proprietor_mobile' => 'Proprietor Mobile',
            'proprietor_dob' => 'Proprietor D.O.B',
            'proprietor_marriage_anniversary' => 'Proprietor Marriage Anniversary',
            'proprietor_email' => 'Proprietor Email',
            'drug_lisence_no' => 'Drug Lisence No',
            'gst_no' => 'Gst No',
            'food_lisence_registration_no' => 'Food Lisence Registration No',
            'added_on' => 'Added On',
            'modified_on' => 'Modified On',
        ];
    }
}
