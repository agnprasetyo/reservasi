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
 * @property int $approve
 * @property string $nama
 *
 * @property User $user
 * @property Restoran $restoran
 */
class Transaksi extends \yii\db\ActiveRecord
{
    const STATUS_NOT_APPROVED = 0;
    const STATUS_APPROVED     = 1;

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
            [['note', 'nama'], 'string'],
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
            'id_user' => 'Username',
            'nama' => 'Nama Pemesan',
            'id_restoran' => 'Restoran',
            'jumlah_reservasi' => 'Jumlah Reservasi',
            'date' => 'Waktu Reservasi',
            'note' => 'Keterangan',
            'total_pembayaran' => 'Total Pembayaran',
            'approve' => 'Status',
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
