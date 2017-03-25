<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tip".
 *
 * @property integer $id
 * @property integer $deleted
 * @property string $naziv
 * @property integer $poredak
 * @property string $opis
 */
class Tip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deleted', 'poredak'], 'integer'],
            [['naziv'], 'required'],
            [['opis'], 'string'],
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
            'poredak' => Yii::t('app', 'Poredak'),
            'opis' => Yii::t('app', 'Opis'),
        ];
    }
}
