<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_rel_atendimento".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property int $RESPOSTA
 * @property string $OBSERVACAO
 */
class WebRelAtendimento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_rel_atendimento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'RESPOSTA'], 'integer'],
            [['OBSERVACAO'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CLIENTE' => 'Cliente',
            'RESPOSTA' => 'Resposta',
            'OBSERVACAO' => 'Observacao',
        ];
    }
}
