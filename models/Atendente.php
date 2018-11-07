<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atendente".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $OBSERVACAO
 * @property int $PARCEIRO
 * @property double $COMISSAO
 * @property double $RENTABILIDADE_MINIMA
 * @property double $COMISSAO_POR_RENT_SOB_COM_REC
 * @property int $EXCLUIDO
 */
class Atendente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atendente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['PARCEIRO', 'EXCLUIDO'], 'integer'],
            [['COMISSAO', 'RENTABILIDADE_MINIMA', 'COMISSAO_POR_RENT_SOB_COM_REC'], 'number'],
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
            'OBSERVACAO' => 'Observacao',
            'PARCEIRO' => 'Parceiro',
            'COMISSAO' => 'Comissao',
            'RENTABILIDADE_MINIMA' => 'Rentabilidade  Minima',
            'COMISSAO_POR_RENT_SOB_COM_REC' => 'Comissao  Por  Rent  Sob  Com  Rec',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
