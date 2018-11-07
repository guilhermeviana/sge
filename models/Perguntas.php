<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perguntas".
 *
 * @property int $REGISTRO
 * @property string $PERGUNTA
 * @property int $COD_INTERNO
 * @property string $TIPO
 * @property int $OBRIGATORIO
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property int $CLIENTE
 */
class Perguntas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perguntas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['COD_INTERNO', 'OBRIGATORIO', 'EXCLUIDO', 'CLIENTE'], 'integer'],
            [['DATA_REGISTRO'], 'safe'],
            [['PERGUNTA'], 'string', 'max' => 255],
            [['TIPO'], 'string', 'max' => 1],
            [['USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'PERGUNTA' => 'Pergunta',
            'COD_INTERNO' => 'Cod  Interno',
            'TIPO' => 'Tipo',
            'OBRIGATORIO' => 'Obrigatorio',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'CLIENTE' => 'Cliente',
        ];
    }
}
