<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "protocolo_nota_fiscal".
 *
 * @property int $REGISTRO
 * @property string $DATA_ENVIO
 * @property int $CORRETOR
 * @property string $DATA_EMISSAO
 * @property string $NUMERO
 * @property double $VALOR
 * @property string $BANCO
 * @property string $OBSERVACAO
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ProtocoloNotaFiscal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'protocolo_nota_fiscal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATA_ENVIO', 'DATA_EMISSAO', 'DATA_REGISTRO'], 'safe'],
            [['CORRETOR', 'EXCLUIDO'], 'integer'],
            [['VALOR'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NUMERO'], 'string', 'max' => 20],
            [['BANCO'], 'string', 'max' => 100],
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
            'DATA_ENVIO' => 'Data  Envio',
            'CORRETOR' => 'Corretor',
            'DATA_EMISSAO' => 'Data  Emissao',
            'NUMERO' => 'Numero',
            'VALOR' => 'Valor',
            'BANCO' => 'Banco',
            'OBSERVACAO' => 'Observacao',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
