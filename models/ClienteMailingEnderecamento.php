<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente_mailing_enderecamento".
 *
 * @property int $CLIENTE
 * @property int $MAILING
 */
class ClienteMailingEnderecamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente_mailing_enderecamento';
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
