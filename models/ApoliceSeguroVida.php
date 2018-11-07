<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apolice_seguro_vida".
 *
 * @property int $REGISTRO
 * @property int $NUMERO
 * @property int $EMPRESA
 * @property int $CLIENTE
 * @property int $SEGURADORA
 * @property int $PRODUTO
 * @property int $CORRETOR
 * @property int $SITUACAO_APOLICE
 * @property int $TIPO_APOLICE
 * @property int $VIGENCIA_DEFINIDA
 * @property string $VIGENCIA_INICIO
 * @property string $VIGENCIA_FINAL
 * @property string $DATA_EMISSAO
 * @property string $DATA_CANCELAMENTO
 * @property string $DESCRICAO
 * @property string $CONJUGE
 * @property int $ASSISTENCIA_FUNERAL
 * @property int $TIPO_PREMIO
 * @property double $PREMIO_LIQUIDO
 * @property double $VALOR_ADICIONAL
 * @property double $CUSTO_APOLICE
 * @property double $VALOR_IOF
 * @property double $OUTROS
 * @property int $TEM_NUMERO_PARCELAS
 * @property double $VALOR_SEGURADORA
 * @property int $PARCELAS
 * @property string $MES_ANO_VENCIMENTO
 * @property int $DIA_VENCIMENTO
 * @property int $FORMA_PAGAMENTO
 * @property double $VALOR_PARCELA
 * @property int $SISDEB_ATIVO
 * @property int $SISDEB_CONTA_CLIENTE
 * @property int $SISDEB_CONTA_CREDITO
 * @property int $DESC_FOLHA_ATIVO
 * @property int $DESC_FOLHA_TIPO_ORGAO
 * @property int $DESC_FOLHA_MATRICULA
 * @property int $DESC_FOLHA_RUBRICA
 * @property string $OBSERVACAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class ApoliceSeguroVida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apolice_seguro_vida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NUMERO', 'EMPRESA', 'CLIENTE', 'SEGURADORA', 'PRODUTO', 'CORRETOR', 'SITUACAO_APOLICE', 'TIPO_APOLICE', 'VIGENCIA_DEFINIDA', 'ASSISTENCIA_FUNERAL', 'TIPO_PREMIO', 'TEM_NUMERO_PARCELAS', 'PARCELAS', 'DIA_VENCIMENTO', 'FORMA_PAGAMENTO', 'SISDEB_ATIVO', 'SISDEB_CONTA_CLIENTE', 'SISDEB_CONTA_CREDITO', 'DESC_FOLHA_ATIVO', 'DESC_FOLHA_TIPO_ORGAO', 'DESC_FOLHA_MATRICULA', 'DESC_FOLHA_RUBRICA', 'EXCLUIDO'], 'integer'],
            [['VIGENCIA_INICIO', 'VIGENCIA_FINAL', 'DATA_EMISSAO', 'DATA_CANCELAMENTO', 'MES_ANO_VENCIMENTO', 'DATAREGISTRO'], 'safe'],
            [['PREMIO_LIQUIDO', 'VALOR_ADICIONAL', 'CUSTO_APOLICE', 'VALOR_IOF', 'OUTROS', 'VALOR_SEGURADORA', 'VALOR_PARCELA'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['DESCRICAO', 'CONJUGE', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'NUMERO' => 'Numero',
            'EMPRESA' => 'Empresa',
            'CLIENTE' => 'Cliente',
            'SEGURADORA' => 'Seguradora',
            'PRODUTO' => 'Produto',
            'CORRETOR' => 'Corretor',
            'SITUACAO_APOLICE' => 'Situacao  Apolice',
            'TIPO_APOLICE' => 'Tipo  Apolice',
            'VIGENCIA_DEFINIDA' => 'Vigencia  Definida',
            'VIGENCIA_INICIO' => 'Vigencia  Inicio',
            'VIGENCIA_FINAL' => 'Vigencia  Final',
            'DATA_EMISSAO' => 'Data  Emissao',
            'DATA_CANCELAMENTO' => 'Data  Cancelamento',
            'DESCRICAO' => 'Descricao',
            'CONJUGE' => 'Conjuge',
            'ASSISTENCIA_FUNERAL' => 'Assistencia  Funeral',
            'TIPO_PREMIO' => 'Tipo  Premio',
            'PREMIO_LIQUIDO' => 'Premio  Liquido',
            'VALOR_ADICIONAL' => 'Valor  Adicional',
            'CUSTO_APOLICE' => 'Custo  Apolice',
            'VALOR_IOF' => 'Valor  Iof',
            'OUTROS' => 'Outros',
            'TEM_NUMERO_PARCELAS' => 'Tem  Numero  Parcelas',
            'VALOR_SEGURADORA' => 'Valor  Seguradora',
            'PARCELAS' => 'Parcelas',
            'MES_ANO_VENCIMENTO' => 'Mes  Ano  Vencimento',
            'DIA_VENCIMENTO' => 'Dia  Vencimento',
            'FORMA_PAGAMENTO' => 'Forma  Pagamento',
            'VALOR_PARCELA' => 'Valor  Parcela',
            'SISDEB_ATIVO' => 'Sisdeb  Ativo',
            'SISDEB_CONTA_CLIENTE' => 'Sisdeb  Conta  Cliente',
            'SISDEB_CONTA_CREDITO' => 'Sisdeb  Conta  Credito',
            'DESC_FOLHA_ATIVO' => 'Desc  Folha  Ativo',
            'DESC_FOLHA_TIPO_ORGAO' => 'Desc  Folha  Tipo  Orgao',
            'DESC_FOLHA_MATRICULA' => 'Desc  Folha  Matricula',
            'DESC_FOLHA_RUBRICA' => 'Desc  Folha  Rubrica',
            'OBSERVACAO' => 'Observacao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
