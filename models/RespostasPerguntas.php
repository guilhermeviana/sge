<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "respostas_perguntas".
 *
 * @property int $REGISTRO
 * @property int $REGISTRO_PERGUNTA
 * @property string $RESPOSTA
 * @property string $OBSERVACAO
 * @property int $REGISTRO_QUESTIONARIO
 * @property int $CLIENTE
 * @property string $DATA_REGISTRO
 */
class RespostasPerguntas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'respostas_perguntas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO_PERGUNTA', 'REGISTRO_QUESTIONARIO', 'CLIENTE'], 'integer'],
            [['OBSERVACAO'], 'string'],
            [['DATA_REGISTRO'], 'safe'],
            [['RESPOSTA'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'REGISTRO_PERGUNTA' => 'Registro  Pergunta',
            'RESPOSTA' => 'Resposta',
            'OBSERVACAO' => 'Observacao',
            'REGISTRO_QUESTIONARIO' => 'Registro  Questionario',
            'CLIENTE' => 'Cliente',
            'DATA_REGISTRO' => 'Data  Registro',
        ];
    }
}
