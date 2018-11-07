<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_basica".
 *
 * @property int $REGISTRO
 * @property string $TABELA
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property int $FORMULA
 * @property double $RECEBIDA
 * @property string $USUARIO
 * @property string $DATA_ALTERACAO
 * @property int $EXCLUIDO
 * @property double $VALOR_POR_CONTRATO_RECEBIDO
 * @property double $PORCENTAGEM_REC_TAC
 */
class TabelaComissaoBasica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_basica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CATEGORIA', 'REGRA', 'FORMULA', 'EXCLUIDO'], 'integer'],
            [['RECEBIDA', 'VALOR_POR_CONTRATO_RECEBIDO', 'PORCENTAGEM_REC_TAC'], 'number'],
            [['DATA_ALTERACAO'], 'safe'],
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
            'FORMULA' => 'Formula',
            'RECEBIDA' => 'Recebida',
            'USUARIO' => 'Usuario',
            'DATA_ALTERACAO' => 'Data  Alteracao',
            'EXCLUIDO' => 'Excluido',
            'VALOR_POR_CONTRATO_RECEBIDO' => 'Valor  Por  Contrato  Recebido',
            'PORCENTAGEM_REC_TAC' => 'Porcentagem  Rec  Tac',
        ];
    }
}
