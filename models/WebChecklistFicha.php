<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_checklist_ficha".
 *
 * @property int $REGISTRO
 * @property int $EXIBIR_LOJISTA
 * @property int $ANALISTA
 * @property int $FICHA
 * @property int $RG_CPF_PROP
 * @property int $RG_CPF_AVAL
 * @property int $CARTEIRA_PROFISSIONAL_PROP
 * @property int $CARTEIRA_PROFISSIONAL_AVAL
 * @property int $HOLERITE_PROP
 * @property int $HOLERITE_AVAL
 * @property int $COMP_APOSENTADORIA_PROP
 * @property int $COMP_APOSENTADORIA_AVAL
 * @property int $CARTEIRA_ORGAO_PROP
 * @property int $CARTEIRA_ORGAO_AVAL
 * @property int $CONTRATO_SOCIAL_PROP
 * @property int $CONTRATO_SOCIAL_AVAL
 * @property int $CARTAO_CNPJ_PROP
 * @property int $CARTAO_CNPJ_AVAL
 * @property int $DECLARACAO_CONTADOR_PROP
 * @property int $DECLARACAO_CONTADOR_AVAL
 * @property int $DECORE_PROP
 * @property int $DECORE_AVAL
 * @property int $CRV_PROP
 * @property int $CRV_AVAL
 * @property int $LAUDO_VISTORIA_PROP
 * @property int $LAUDO_VISTORIA_AVAL
 * @property int $CNH_PROP
 * @property int $CNH_AVAL
 * @property int $REGULARIZACAO_CPF_PROP
 * @property int $REGULARIZACAO_CPF_AVAL
 * @property string $OBSERVACAO
 * @property string $DATA_REGISTRO
 */
class WebChecklistFicha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_checklist_ficha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EXIBIR_LOJISTA', 'ANALISTA', 'FICHA', 'RG_CPF_PROP', 'RG_CPF_AVAL', 'CARTEIRA_PROFISSIONAL_PROP', 'CARTEIRA_PROFISSIONAL_AVAL', 'HOLERITE_PROP', 'HOLERITE_AVAL', 'COMP_APOSENTADORIA_PROP', 'COMP_APOSENTADORIA_AVAL', 'CARTEIRA_ORGAO_PROP', 'CARTEIRA_ORGAO_AVAL', 'CONTRATO_SOCIAL_PROP', 'CONTRATO_SOCIAL_AVAL', 'CARTAO_CNPJ_PROP', 'CARTAO_CNPJ_AVAL', 'DECLARACAO_CONTADOR_PROP', 'DECLARACAO_CONTADOR_AVAL', 'DECORE_PROP', 'DECORE_AVAL', 'CRV_PROP', 'CRV_AVAL', 'LAUDO_VISTORIA_PROP', 'LAUDO_VISTORIA_AVAL', 'CNH_PROP', 'CNH_AVAL', 'REGULARIZACAO_CPF_PROP', 'REGULARIZACAO_CPF_AVAL'], 'integer'],
            [['OBSERVACAO'], 'string'],
            [['DATA_REGISTRO'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'EXIBIR_LOJISTA' => 'Exibir  Lojista',
            'ANALISTA' => 'Analista',
            'FICHA' => 'Ficha',
            'RG_CPF_PROP' => 'Rg  Cpf  Prop',
            'RG_CPF_AVAL' => 'Rg  Cpf  Aval',
            'CARTEIRA_PROFISSIONAL_PROP' => 'Carteira  Profissional  Prop',
            'CARTEIRA_PROFISSIONAL_AVAL' => 'Carteira  Profissional  Aval',
            'HOLERITE_PROP' => 'Holerite  Prop',
            'HOLERITE_AVAL' => 'Holerite  Aval',
            'COMP_APOSENTADORIA_PROP' => 'Comp  Aposentadoria  Prop',
            'COMP_APOSENTADORIA_AVAL' => 'Comp  Aposentadoria  Aval',
            'CARTEIRA_ORGAO_PROP' => 'Carteira  Orgao  Prop',
            'CARTEIRA_ORGAO_AVAL' => 'Carteira  Orgao  Aval',
            'CONTRATO_SOCIAL_PROP' => 'Contrato  Social  Prop',
            'CONTRATO_SOCIAL_AVAL' => 'Contrato  Social  Aval',
            'CARTAO_CNPJ_PROP' => 'Cartao  Cnpj  Prop',
            'CARTAO_CNPJ_AVAL' => 'Cartao  Cnpj  Aval',
            'DECLARACAO_CONTADOR_PROP' => 'Declaracao  Contador  Prop',
            'DECLARACAO_CONTADOR_AVAL' => 'Declaracao  Contador  Aval',
            'DECORE_PROP' => 'Decore  Prop',
            'DECORE_AVAL' => 'Decore  Aval',
            'CRV_PROP' => 'Crv  Prop',
            'CRV_AVAL' => 'Crv  Aval',
            'LAUDO_VISTORIA_PROP' => 'Laudo  Vistoria  Prop',
            'LAUDO_VISTORIA_AVAL' => 'Laudo  Vistoria  Aval',
            'CNH_PROP' => 'Cnh  Prop',
            'CNH_AVAL' => 'Cnh  Aval',
            'REGULARIZACAO_CPF_PROP' => 'Regularizacao  Cpf  Prop',
            'REGULARIZACAO_CPF_AVAL' => 'Regularizacao  Cpf  Aval',
            'OBSERVACAO' => 'Observacao',
            'DATA_REGISTRO' => 'Data  Registro',
        ];
    }
}
