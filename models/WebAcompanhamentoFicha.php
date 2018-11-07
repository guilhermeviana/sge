<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_acompanhamento_ficha".
 *
 * @property int $REGISTRO
 * @property int $FICHA
 * @property string $DATA_MOV
 * @property string $OBSERVACAO
 * @property string $OBSERVACAO_LOJISTA
 * @property int $STATUS
 * @property string $USUARIO
 */
class WebAcompanhamentoFicha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_acompanhamento_ficha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FICHA', 'STATUS'], 'integer'],
            [['DATA_MOV'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['OBSERVACAO_LOJISTA'], 'string', 'max' => 255],
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
            'FICHA' => 'Ficha',
            'DATA_MOV' => 'Data  Mov',
            'OBSERVACAO' => 'Observacao',
            'OBSERVACAO_LOJISTA' => 'Observacao  Lojista',
            'STATUS' => 'Status',
            'USUARIO' => 'Usuario',
        ];
    }
}
