<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $REGISTRO
 * @property int $PARCEIRO
 * @property int $TIPO_PRODUTO
 * @property string $REFERENCIA
 * @property string $PRODUTO
 * @property int $FLEX
 * @property int $PRODUTO_SEGURO
 * @property double $VALOR_PREMIO
 * @property double $VALOR_PARCELA
 * @property int $TIPOPAGAMENTO
 * @property int $TIPOJUROS
 * @property double $VALORJUROS
 * @property string $OBS
 * @property int $UTILIZA_TAC_DEDUTIVA
 * @property double $TAC
 * @property double $LIMITETAC
 * @property double $TACFIXO
 * @property int $INATIVO
 * @property string $VALIDADE
 * @property int $IDADE_LIMITE_COMISSIONAMENTO
 * @property double $PERCENTUAL_REFIN
 * @property int $PRODUTO_CARTAO
 * @property int $CATEGORIA_CARTAO
 * @property int $EXCLUIDO
 * @property double $LIMITETACMENOR
 * @property double $TACFIXOMENOR
 * @property double $COMISSAO_REFIN_RECUPERA
 * @property double $BASE_COMISSAO_PRODUTO
 * @property double $VALOR_RANGE
 * @property double $PONDERACAO
 * @property int $LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA
 * @property int $ATUALIZACAO
 * @property int $EMITE_BORDERO
 * @property int $STATUS_PADRAO
 * @property int $FILIAL_INTEG_FINANCEIRO
 * @property int $SCE_SYNC
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO_PRODUTO', 'PARCEIRO'], 'required'],
            [['PARCEIRO', 'TIPO_PRODUTO', 'FLEX', 'PRODUTO_SEGURO', 'TIPOPAGAMENTO', 'TIPOJUROS', 'UTILIZA_TAC_DEDUTIVA', 'INATIVO', 'IDADE_LIMITE_COMISSIONAMENTO', 'PRODUTO_CARTAO', 'CATEGORIA_CARTAO', 'EXCLUIDO', 'LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA', 'ATUALIZACAO', 'EMITE_BORDERO', 'STATUS_PADRAO', 'FILIAL_INTEG_FINANCEIRO', 'SCE_SYNC'], 'integer'],
            [['VALOR_PREMIO', 'VALOR_PARCELA', 'VALORJUROS', 'TAC', 'LIMITETAC', 'TACFIXO', 'PERCENTUAL_REFIN', 'LIMITETACMENOR', 'TACFIXOMENOR', 'COMISSAO_REFIN_RECUPERA', 'BASE_COMISSAO_PRODUTO', 'VALOR_RANGE', 'PONDERACAO'], 'number'],
            [['OBS'], 'string'],
            [['VALIDADE'], 'safe'],
            [['REFERENCIA'], 'string', 'max' => 10],
            [['PRODUTO'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Produto',
            'PARCEIRO' => 'Parceiro',
            'TIPO_PRODUTO' => 'Tipo de Produto',
            'REFERENCIA' => 'Referência',
            'PRODUTO' => 'Produto',
            'FLEX' => 'Flex',
            'PRODUTO_SEGURO' => 'Produto Seguro',
            'VALOR_PREMIO' => 'Valor Prêmio',
            'VALOR_PARCELA' => 'Valor Parcela',
            'TIPOPAGAMENTO' => 'Tipo de Pagamento',
            'TIPOJUROS' => 'Tipo de Juros',
            'VALORJUROS' => 'Valor de Juros',
            'OBS' => 'Obs',
            'UTILIZA_TAC_DEDUTIVA' => 'TAC Dedutiva',
            'TAC' => 'TAC',
            'LIMITETAC' => 'Limite Tac',
            'TACFIXO' => 'TAC Fixo',
            'INATIVO' => 'Inativo',
            'VALIDADE' => 'Validade',
            'IDADE_LIMITE_COMISSIONAMENTO' => 'Idade Lim. Comissionamento',
            'PERCENTUAL_REFIN' => 'Percentual Refin',
            'PRODUTO_CARTAO' => 'Produto Cartão',
            'CATEGORIA_CARTAO' => 'Categoria Cartão',
            'EXCLUIDO' => 'Excluido',
            'LIMITETACMENOR' => 'Limite TAC Menor',
            'TACFIXOMENOR' => 'TAC Fixo Menor',
            'COMISSAO_REFIN_RECUPERA' => 'Comissão Refin Rec',
            'BASE_COMISSAO_PRODUTO' => 'Base Comissão',
            'VALOR_RANGE' => 'Valor Range',
            'PONDERACAO' => 'Ponderação',
            'LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA' => 'Comissao  Maxima',
            'ATUALIZACAO' => 'Atualizacao',
            'EMITE_BORDERO' => 'Emite  Bordero',
            'STATUS_PADRAO' => 'Status  Padrão',
            'FILIAL_INTEG_FINANCEIRO' => 'Filial  Integ  Financeiro',
            'SCE_SYNC' => 'Sce  Sync',
        ];
    }
    
    /** 
    * @return \yii\db\ActiveQuery 
    */ 
   public function getEmprestimos() 
   { 
       return $this->hasMany(Emprestimo::className(), ['PRODUTO' => 'REGISTRO']); 
   } 
 
   /** 
    * @return \yii\db\ActiveQuery 
    */ 
   public function getTIPOPRODUTO() 
   { 
       return $this->hasOne(TipoProduto::className(), ['REGISTRO' => 'TIPO_PRODUTO']); 
   } 
   
   /** 
    * @return \yii\db\ActiveQuery 
    */ 
   public function getParceiro() 
   { 
       return $this->hasOne(Parceiro::className(), ['REGISTRO' => 'PARCEIRO']); 
   } 
    

}
