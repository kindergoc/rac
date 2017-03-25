<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auto".
 *
 * @property integer $id
 * @property integer $tip
 * @property string $naziv
 * @property integer $marka
 * @property integer $mjenjac
 * @property integer $gorivo
 * @property integer $vrata
 * @property string $oprema
 * @property string $dun
 * @property string $cijene
 * @property integer $cijena
 * @property string $prtljaznik
 * @property integer $putnika
 * @property string $link
 * @property integer $order
 * @property integer $naslovna
 * @property string $opis
 * @property integer $firma
 * @property integer $pogon
 *
 * @property Marke $marka0
 * @property Tip $tip0
 */
class Auto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tip', 'marka', 'mjenjac', 'gorivo', 'vrata', 'cijena', 'putnika', 'order', 'naslovna', 'firma', 'pogon'], 'integer'],
            [['oprema', 'dun', 'cijene', 'opis'], 'string'],
            [['naziv', 'prtljaznik', 'link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tip' => Yii::t('app', 'Tip'),
            'naziv' => Yii::t('app', 'Naziv'),
            'marka' => Yii::t('app', 'Marka'),
            'mjenjac' => Yii::t('app', 'Mjenjac'),
            'gorivo' => Yii::t('app', 'Gorivo'),
            'vrata' => Yii::t('app', 'Vrata'),
            'oprema' => Yii::t('app', 'Oprema'),
            'dun' => Yii::t('app', 'Dun'),
            'cijene' => Yii::t('app', 'Cijene'),
            'cijena' => Yii::t('app', 'Cijena'),
            'prtljaznik' => Yii::t('app', 'Prtljaznik'),
            'putnika' => Yii::t('app', 'Putnika'),
            'link' => Yii::t('app', 'Link'),
            'order' => Yii::t('app', 'Order'),
            'naslovna' => Yii::t('app', 'Naslovna'),
            'opis' => Yii::t('app', 'Opis'),
            'firma' => Yii::t('app', 'Firma'),
            'pogon' => Yii::t('app', 'Pogon'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarka0()
    {
        return $this->hasOne(Marke::className(), ['id' => 'marka']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTip0()
    {
        return $this->hasOne(Tip::className(), ['id' => 'tip']);
    }
}
