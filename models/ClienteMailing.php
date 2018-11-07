<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente_mailing".
 *
 * @property int $CLIENTE
 * @property int $MAILING
 */
class ClienteMailing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente_mailing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'MAILING'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CLIENTE' => 'Cliente',
            'MAILING' => 'Mailing',
        ];
    }
}
