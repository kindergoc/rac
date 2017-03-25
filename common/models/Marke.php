<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "marke".
 *
 * @property integer $id
 * @property integer $deleted
 * @property string $naziv
 * @property integer $poredak
 */
class Marke extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'marke';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deleted', 'poredak'], 'integer'],
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
            'poredak' => Yii::t('app', 'Poredak'),
        ];
    }
}
