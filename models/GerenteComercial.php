<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gerente_comercial".
 *
 * @property int $REGISTRO
 * @property int $GERENTE_GERAL
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property double $COMISSAO
 * @property double $RENTABILIDADE_MINIMA
 * @property double $COMISSAO_POR_RENT_SOB_COM_REC
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class GerenteComercial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gerente_comercial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['GERENTE_GERAL', 'EXCLUIDO'], 'integer'],
            [['COMISSAO', 'RENTABILIDADE_MINIMA', 'COMISSAO_POR_RENT_SOB_COM_REC'], 'number'],
            [['OBSERVACAO'], 'string'],
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
            'GERENTE_GERAL' => 'Gerente  Geral',
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'COMISSAO' => 'Comissao',
            'RENTABILIDADE_MINIMA' => 'Rentabilidade  Minima',
            'COMISSAO_POR_RENT_SOB_COM_REC' => 'Comissao  Por  Rent  Sob  Com  Rec',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
