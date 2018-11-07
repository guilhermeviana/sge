<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movcomissao_basica".
 *
 * @property int $REGISTRO
 * @property string $TABELA
 * @property int $TIPO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property int $FORMULA
 * @property double $COMISSAO
 * @property double $COMISSAO_MAXIMA
 * @property double $RECEBIDA
 * @property double $VALOR_POR_CONTRATO_RECEBIDO
 * @property double $VALOR_POR_CONTRATO_PAGAR
 * @property double $PORCENTAGEM_REC_TAC
 * @property double $PORCENTAGEM_PAG_TAC
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class MovcomissaoBasica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movcomissao_basica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'PRODUTO', 'CATEGORIA', 'REGRA', 'FORMULA', 'EXCLUIDO'], 'integer'],
            [['COMISSAO', 'COMISSAO_MAXIMA', 'RECEBIDA', 'VALOR_POR_CONTRATO_RECEBIDO', 'VALOR_POR_CONTRATO_PAGAR', 'PORCENTAGEM_REC_TAC', 'PORCENTAGEM_PAG_TAC'], 'number'],
            [['DATA'], 'safe'],
            [['TABELA'], 'string', 'max' => 8],
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
            'TABELA' => 'Tabela',
            'TIPO' => 'Tipo',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'REGRA' => 'Regra',
            'FORMULA' => 'Formula',
            'COMISSAO' => 'Comissao',
            'COMISSAO_MAXIMA' => 'Comissao  Maxima',
            'RECEBIDA' => 'Recebida',
            'VALOR_POR_CONTRATO_RECEBIDO' => 'Valor  Por  Contrato  Recebido',
            'VALOR_POR_CONTRATO_PAGAR' => 'Valor  Por  Contrato  Pagar',
            'PORCENTAGEM_REC_TAC' => 'Porcentagem  Rec  Tac',
            'PORCENTAGEM_PAG_TAC' => 'Porcentagem  Pag  Tac',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
