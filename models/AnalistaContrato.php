<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "analista_contrato".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property double $COMISSAO
 * @property string $OBSERVACAO
 * @property int $PARCEIRO
 * @property double $RENTABILIDADE_MINIMA
 * @property double $COMISSAO_POR_RENT_SOB_COM_REC
 * @property int $EXCLUIDO
 */
class AnalistaContrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'analista_contrato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['COMISSAO', 'RENTABILIDADE_MINIMA', 'COMISSAO_POR_RENT_SOB_COM_REC'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['PARCEIRO', 'EXCLUIDO'], 'integer'],
            [['DESCRICAO'], 'string', 'max' => 100],
            [['REFERENCIA'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'COMISSAO' => 'Comissao',
            'OBSERVACAO' => 'Observacao',
            'PARCEIRO' => 'Parceiro',
            'RENTABILIDADE_MINIMA' => 'Rentabilidade  Minima',
            'COMISSAO_POR_RENT_SOB_COM_REC' => 'Comissao  Por  Rent  Sob  Com  Rec',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
