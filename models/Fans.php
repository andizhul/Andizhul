<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fans".
 *
 * @property string $Nama
 * @property string $Email
 * @property string $Negara
 * @property string $Komentar
 */
class Fans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama', 'Email', 'Negara', 'Komentar'], 'required'],
            [['Nama', 'Email'], 'string', 'max' => 20],
            [['Negara'], 'string', 'max' => 15],
            [['Komentar'], 'string', 'max' => 100],
            [['Nama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nama' => 'Nama',
            'Email' => 'Email',
            'Negara' => 'Negara',
            'Komentar' => 'Komentar',
        ];
    }
}
