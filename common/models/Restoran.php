<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "restoran".
 *
 * @property int $id
 * @property string $value
 * @property int $kuota
 * @property string $alamat
 *
 * @property Transaksi $transaksi
 */
class Restoran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'restoran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'kuota', 'alamat'], 'required'],
            [['kuota'], 'integer'],
            [['value', 'alamat'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'kuota' => 'Kuota',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(Transaksi::className(), ['id_restoran' => 'id']);
    }
}
