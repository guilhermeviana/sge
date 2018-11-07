<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_agente".
 *
 * @property int $REGISTRO
 * @property string $TABELA
 * @property int $PRODUTO
 * @property int $CORRETOR
 * @property int $CORRETOR_1
 * @property int $CORRETOR_2
 * @property int $CATEGORIA
 * @property double $COMISSAO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property int $REGRA
 * @property double $VALOR_POR_CONTRATO_PAGAR
 * @property double $PORCENTAGEM_PAG_TAC
 */
class TabelaComissaoAgente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_agente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CORRETOR', 'CORRETOR_1', 'CORRETOR_2', 'CATEGORIA', 'EXCLUIDO', 'REGRA'], 'integer'],
            [['COMISSAO', 'VALOR_POR_CONTRATO_PAGAR', 'PORCENTAGEM_PAG_TAC'], 'number'],
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
            'CORRETOR' => 'Corretor',
            'CORRETOR_1' => 'Corretor 1',
            'CORRETOR_2' => 'Corretor 2',
            'CATEGORIA' => 'Categoria',
            'COMISSAO' => 'Comissao',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'REGRA' => 'Regra',
            'VALOR_POR_CONTRATO_PAGAR' => 'Valor  Por  Contrato  Pagar',
            'PORCENTAGEM_PAG_TAC' => 'Porcentagem  Pag  Tac',
        ];
    }
}
