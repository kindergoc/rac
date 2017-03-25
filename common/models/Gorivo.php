<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gorivo".
 *
 * @property integer $id
 * @property integer $deleted
 * @property string $naziv
 */
class Gorivo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gorivo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deleted'], 'integer'],
            [['naziv'], 'required'],
            [['naziv'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'deleted' => Yii::t('app', 'Deleted'),
            'naziv' => Yii::t('app', 'Naziv'),
        ];
    }
}
