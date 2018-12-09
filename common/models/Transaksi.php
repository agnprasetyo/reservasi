<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_restoran
 * @property int $jumlah_reservasi
 * @property string $date
 * @property string $note
 * @property int $total_pembayaran
 *
 * @property User $user
 * @property Restoran $restoran
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_restoran', 'jumlah_reservasi', 'date', 'note', 'total_pembayaran'], 'required'],
            [['id_user', 'id_restoran', 'jumlah_reservasi', 'total_pembayaran'], 'integer'],
            [['date'], 'safe'],
            [['note'], 'string'],
            [['id_user'], 'unique'],
            [['id_restoran'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_restoran'], 'exist', 'skipOnError' => true, 'targetClass' => Restoran::className(), 'targetAttribute' => ['id_restoran' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_restoran' => 'Id Restoran',
            'jumlah_reservasi' => 'Jumlah Reservasi',
            'date' => 'Date',
            'note' => 'Note',
            'total_pembayaran' => 'Total Pembayaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestoran()
    {
        return $this->hasOne(Restoran::className(), ['id' => 'id_restoran']);
    }
}
