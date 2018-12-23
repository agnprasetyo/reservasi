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
 * @property int $id_user
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
            [['value', 'kuota', 'alamat', 'id_user'], 'required'],
            [['kuota', 'id_user'], 'integer'],
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
            'value' => 'Restoran',
            'kuota' => 'Kuota',
            'alamat' => 'Alamat',
            'id_user' => 'Username',
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
