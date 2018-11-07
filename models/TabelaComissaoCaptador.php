<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_captador".
 *
 * @property int $REGISTRO
 * @property int $CAPTADOR
 * @property int $CORRETOR
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property double $COMISSAO
 * @property double $VALOR_FIXO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property int $REGRA
 * @property double $VALOR_POR_CONTRATO_PAGAR
 * @property double $PORCENTAGEM_PAG_TAC
 */
class TabelaComissaoCaptador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_captador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CAPTADOR', 'CORRETOR', 'PRODUTO', 'CATEGORIA', 'EXCLUIDO', 'REGRA'], 'integer'],
            [['COMISSAO', 'VALOR_FIXO', 'VALOR_POR_CONTRATO_PAGAR', 'PORCENTAGEM_PAG_TAC'], 'number'],
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
            'CAPTADOR' => 'Captador',
            'CORRETOR' => 'Corretor',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'COMISSAO' => 'Comissao',
            'VALOR_FIXO' => 'Valor  Fixo',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'REGRA' => 'Regra',
            'VALOR_POR_CONTRATO_PAGAR' => 'Valor  Por  Contrato  Pagar',
            'PORCENTAGEM_PAG_TAC' => 'Porcentagem  Pag  Tac',
        ];
    }
}
