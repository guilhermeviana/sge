<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mensagens".
 *
 * @property int $REGISTRO
 * @property string $MENSAGEM
 * @property int $RODAPE
 */
class Mensagens extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mensagens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MENSAGEM'], 'string'],
            [['RODAPE'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'MENSAGEM' => 'Mensagem',
            'RODAPE' => 'Rodape',
        ];
    }
}
