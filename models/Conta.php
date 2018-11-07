<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conta".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property string $DESCRICAO
 * @property string $APELIDO_CONTA
 * @property int $EMPRESA
 * @property int $COD_CORRETOR
 * @property int $BANCO
 * @property string $OPERACAO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property int $SISDEB
 * @property string $CONVENIO
 * @property string $CARTEIRA
 * @property string $FORMATOARQUIVO
 * @property int $POSSUI_CADASTRO_OPTANTE
 * @property int $LAYOUTREMESSA
 * @property int $LAYOUTRETORNO
 * @property int $USAR_CAMINHO_RELATIVO
 * @property string $DIR_REMESSA
 * @property string $DIR_RETORNO
 * @property string $DIR_RETORNO_DEBITOS_AVULSOS
 * @property int $GERA_TAREFA_PROCESSAMENTO
 * @property string $DIR_GERACAO_TAREFA_PROCESSAMENTO
 * @property string $DIR_CONSULTA_TAREFA_PROCESSAMENTO
 * @property int $NSA
 * @property int $NSA_AUTOMATICO
 * @property string $ACEITA_OUTROS_BANCOS
 * @property int $POSSUI_BOLETO
 * @property string $CODIGO_CEDENTE_BOLETO
 * @property string $CARTEIRA_BOLETO
 * @property string $FORMATOARQUIVO_BOLETO
 * @property int $LAYOUTREMESSA_BOLETO
 * @property int $LAYOUTRETORNO_BOLETO
 * @property string $DIR_REMESSA_BOLETO
 * @property string $DIR_RETORNO_BOLETO
 * @property int $NOSSO_NUMERO
 * @property string $ESPECIE
 * @property int $POSICOES_NOSSO_NUMERO
 * @property string $LOCAL_PAGAMENTO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Conta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'EMPRESA', 'COD_CORRETOR', 'BANCO', 'SISDEB', 'POSSUI_CADASTRO_OPTANTE', 'LAYOUTREMESSA', 'LAYOUTRETORNO', 'USAR_CAMINHO_RELATIVO', 'GERA_TAREFA_PROCESSAMENTO', 'NSA', 'NSA_AUTOMATICO', 'POSSUI_BOLETO', 'LAYOUTREMESSA_BOLETO', 'LAYOUTRETORNO_BOLETO', 'NOSSO_NUMERO', 'POSICOES_NOSSO_NUMERO', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['DESCRICAO', 'APELIDO_CONTA', 'FORMATOARQUIVO', 'USUARIO'], 'string', 'max' => 50],
            [['OPERACAO', 'CARTEIRA'], 'string', 'max' => 10],
            [['AGENCIA'], 'string', 'max' => 6],
            [['CONTA', 'CONVENIO', 'CODIGO_CEDENTE_BOLETO', 'FORMATOARQUIVO_BOLETO'], 'string', 'max' => 20],
            [['DIR_REMESSA', 'DIR_RETORNO', 'DIR_RETORNO_DEBITOS_AVULSOS', 'DIR_GERACAO_TAREFA_PROCESSAMENTO', 'DIR_CONSULTA_TAREFA_PROCESSAMENTO', 'ACEITA_OUTROS_BANCOS', 'LOCAL_PAGAMENTO'], 'string', 'max' => 255],
            [['CARTEIRA_BOLETO', 'ESPECIE'], 'string', 'max' => 5],
            [['DIR_REMESSA_BOLETO', 'DIR_RETORNO_BOLETO'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO' => 'Tipo',
            'DESCRICAO' => 'Descricao',
            'APELIDO_CONTA' => 'Apelido  Conta',
            'EMPRESA' => 'Empresa',
            'COD_CORRETOR' => 'Cod  Corretor',
            'BANCO' => 'Banco',
            'OPERACAO' => 'Operacao',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'SISDEB' => 'Sisdeb',
            'CONVENIO' => 'Convenio',
            'CARTEIRA' => 'Carteira',
            'FORMATOARQUIVO' => 'Formatoarquivo',
            'POSSUI_CADASTRO_OPTANTE' => 'Possui  Cadastro  Optante',
            'LAYOUTREMESSA' => 'Layoutremessa',
            'LAYOUTRETORNO' => 'Layoutretorno',
            'USAR_CAMINHO_RELATIVO' => 'Usar  Caminho  Relativo',
            'DIR_REMESSA' => 'Dir  Remessa',
            'DIR_RETORNO' => 'Dir  Retorno',
            'DIR_RETORNO_DEBITOS_AVULSOS' => 'Dir  Retorno  Debitos  Avulsos',
            'GERA_TAREFA_PROCESSAMENTO' => 'Gera  Tarefa  Processamento',
            'DIR_GERACAO_TAREFA_PROCESSAMENTO' => 'Dir  Geracao  Tarefa  Processamento',
            'DIR_CONSULTA_TAREFA_PROCESSAMENTO' => 'Dir  Consulta  Tarefa  Processamento',
            'NSA' => 'Nsa',
            'NSA_AUTOMATICO' => 'Nsa  Automatico',
            'ACEITA_OUTROS_BANCOS' => 'Aceita  Outros  Bancos',
            'POSSUI_BOLETO' => 'Possui  Boleto',
            'CODIGO_CEDENTE_BOLETO' => 'Codigo  Cedente  Boleto',
            'CARTEIRA_BOLETO' => 'Carteira  Boleto',
            'FORMATOARQUIVO_BOLETO' => 'Formatoarquivo  Boleto',
            'LAYOUTREMESSA_BOLETO' => 'Layoutremessa  Boleto',
            'LAYOUTRETORNO_BOLETO' => 'Layoutretorno  Boleto',
            'DIR_REMESSA_BOLETO' => 'Dir  Remessa  Boleto',
            'DIR_RETORNO_BOLETO' => 'Dir  Retorno  Boleto',
            'NOSSO_NUMERO' => 'Nosso  Numero',
            'ESPECIE' => 'Especie',
            'POSICOES_NOSSO_NUMERO' => 'Posicoes  Nosso  Numero',
            'LOCAL_PAGAMENTO' => 'Local  Pagamento',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
