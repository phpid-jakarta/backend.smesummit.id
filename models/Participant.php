<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "participants".
 *
 * @property string $id
 * @property string $name
 * @property string $company_name
 * @property string $position
 * @property string $coached_sector
 * @property string $company_sector
 * @property string $email
 * @property string $phone
 * @property string $problem_desc
 * @property string $created_at
 */
class Participant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'participants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'company_name', 'position', 'coached_sector', 'company_sector', 'email', 'phone', 'problem_desc', 'created_at'], 'required'],
            [['problem_desc'], 'string'],
            [['created_at'], 'safe'],
            [['name', 'company_name', 'position', 'coached_sector', 'company_sector', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'company_name' => Yii::t('app', 'Company Name'),
            'position' => Yii::t('app', 'Position'),
            'coached_sector' => Yii::t('app', 'Coached Sector'),
            'company_sector' => Yii::t('app', 'Company Sector'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'problem_desc' => Yii::t('app', 'Problem Desc'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ParticipantQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ParticipantQuery(get_called_class());
    }
}
