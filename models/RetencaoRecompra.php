<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "retencao_recompra".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property int $REGISTRO_RETENCAO
 * @property string $PROTOCOLO
 * @property double $VALOR
 * @property double $VALOR_PARCELA
 * @property string $VENCIMENTO
 * @property int $ESTADO
 * @property int $MARGEM_LIBERADA
 * @property string $DATA_LIBERACAO
 * @property string $FATOR
 * @property string $BOLETO
 * @property string $DEMONSTRATIVO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class RetencaoRecompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'retencao_recompra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'REGISTRO_RETENCAO', 'ESTADO', 'MARGEM_LIBERADA', 'EXCLUIDO'], 'integer'],
            [['VALOR', 'VALOR_PARCELA'], 'number'],
            [['VENCIMENTO', 'DATA_LIBERACAO', 'DATAREGISTRO'], 'safe'],
            [['BOLETO', 'DEMONSTRATIVO'], 'string'],
            [['PROTOCOLO'], 'string', 'max' => 15],
            [['FATOR'], 'string', 'max' => 12],
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
            'TIPO' => 'Tipo',
            'REGISTRO_RETENCAO' => 'Registro  Retencao',
            'PROTOCOLO' => 'Protocolo',
            'VALOR' => 'Valor',
            'VALOR_PARCELA' => 'Valor  Parcela',
            'VENCIMENTO' => 'Vencimento',
            'ESTADO' => 'Estado',
            'MARGEM_LIBERADA' => 'Margem  Liberada',
            'DATA_LIBERACAO' => 'Data  Liberacao',
            'FATOR' => 'Fator',
            'BOLETO' => 'Boleto',
            'DEMONSTRATIVO' => 'Demonstrativo',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
