<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_basica_pagar".
 *
 * @property int $REGISTRO
 * @property string $TABELA
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property double $COMISSAO
 * @property double $COMISSAO_MAXIMA
 * @property double $VALOR_POR_CONTRATO_PAGAR
 * @property double $PORCENTAGEM_PAG_TAC
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class TabelaComissaoBasicaPagar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_basica_pagar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CATEGORIA', 'REGRA', 'EXCLUIDO'], 'integer'],
            [['COMISSAO', 'COMISSAO_MAXIMA', 'VALOR_POR_CONTRATO_PAGAR', 'PORCENTAGEM_PAG_TAC'], 'number'],
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
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'REGRA' => 'Regra',
            'COMISSAO' => 'Comissao',
            'COMISSAO_MAXIMA' => 'Comissao  Maxima',
            'VALOR_POR_CONTRATO_PAGAR' => 'Valor  Por  Contrato  Pagar',
            'PORCENTAGEM_PAG_TAC' => 'Porcentagem  Pag  Tac',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
