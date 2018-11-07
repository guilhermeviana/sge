<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "corretor".
 *
 * @property int $REGISTRO
 * @property string $UUID
 * @property int $TIPO_CORRETOR
 * @property int $REGIONAL
 * @property string $USUARIO_RELACIONADO
 * @property string $NOME
 * @property string $NOME_FANTASIA
 * @property string $NASCIMENTO
 * @property int $PESSOA
 * @property string $CPFCNPJ
 * @property string $IDENTIDADE
 * @property string $PAI
 * @property string $MAE
 * @property string $TELEFONE_RES
 * @property string $TELEFONE_CEL
 * @property int $ENVIA_SMS
 * @property string $TELEFONE_FAX
 * @property int $ENVIA_CORRESPONDENCIA
 * @property int $USAR_TRACEBOT
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $CEP
 * @property string $CONTATO
 * @property string $OBSERVACAO
 * @property int $FORMAPAG
 * @property int $TIPOVENC
 * @property int $DIAVENC
 * @property int $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $CPF_CORRENTISTA
 * @property string $CORRENTISTA
 * @property int $RECOMPRA_BLOQUEADA
 * @property int $OP_BLOQUEADA
 * @property int $TIPO_CONTA_RECOMPRA
 * @property int $BANCO_RECOMPRA
 * @property string $AGENCIA_RECOMPRA
 * @property string $CONTA_RECOMPRA
 * @property string $CPF_CORRENTISTA_RECOMPRA
 * @property string $CORRENTISTA_RECOMPRA
 * @property string $EMAIL
 * @property string $EMAIL_COMISSIONAMENTO
 * @property double $COMISSAO_CARTAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property int $FILIAL
 * @property string $CODIGO_CORRETOR
 * @property int $RATEIA_DESPESAS
 * @property string $NASCIMENTO_CONTATO_2
 * @property int $ENDERECO_CORRESPONDENCIA
 * @property string $ENDERECO_COM
 * @property string $BAIRRO_COM
 * @property string $CIDADE_COM
 * @property string $UF_COM
 * @property string $CEP_COM
 * @property string $TELEFONE_COM
 * @property string $FAX_COM
 * @property string $ATUACAO
 * @property string $EMPRESA
 * @property int $SITUACAO_CONTATO
 * @property string $TELEFONE_CEL_CONTATO
 * @property string $NASCIMENTO_CONTATO
 * @property string $CPF_CONTATO
 * @property int $SITUACAO_CONTATO_2
 * @property string $TELEFONE_CONTATO
 * @property string $CONTATO_2
 * @property string $TELEFONE_CEL_CONTATO_2
 * @property string $TELEFONE_CEL_CONTATO_3
 * @property string $CPF_CONTATO_2
 * @property string $IDENTIDADE_CONTATO_2
 * @property string $TELEFONE_CONTATO_2
 * @property string $CONTATO_3
 * @property int $SITUACAO_CONTATO_3
 * @property string $TELEFONE_CONTATO_3
 * @property string $NASCIMENTO_CONTATO_3
 * @property string $CPF_CONTATO_3
 * @property string $IDENTIDADE_CONTATO_3
 * @property int $TIPO_VISUALIZACAO_WEB
 * @property int $TIPO_CONTA
 * @property int $ACESSO_WEB
 * @property string $USUARIO_WEB
 * @property string $SENHA_WEB
 * @property int $INATIVO
 * @property int $INATIVA_AUTOMATICO
 * @property int $TIPOEND
 * @property int $UTILIZA_BONUS
 * @property int $SUBSTABELECIDO
 * @property int $BASE_COMISSIONAMENTO
 * @property int $CAMPO_BASE_COMISSAO
 * @property int $UTILIZA_BASE_PERSONALIZADA
 * @property int $TIPO_TABELA_BASE_COMISSAO_AGENTE
 * @property int $TIPO_TABELA_ESPECIAL
 * @property int $TIPO_VENCIMENTO_COMISSAO
 * @property int $CAPTADOR
 * @property int $GERENTE_COMERCIAL
 * @property string $IDENTIDADE_CONTATO
 * @property double $VALOR_DESCONTAR_OP
 * @property int $ENVIA_DEMOSTRATIVO_NOTA_FISCAL
 * @property double $IRRF_NOTA
 * @property double $PIS_NOTA
 * @property double $COFINS_NOTA
 * @property double $CSLL_NOTA
 * @property double $ISS_NOTA
 * @property double $OUTROS_IMPOSTOS_NOTA
 * @property int $LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA
 * @property double $PERCENTUAL_LIMITE_COMISSAO
 * @property string $VIGENCIA_INICIO_LIMITE_COMISSAO
 * @property string $VIGENCIA_FINAL_LIMITE_COMISSAO
 * @property int $USAR_TOKEN_SMS
 * @property string $TELEFONE_CELULAR_TOKEN_SMS_1
 * @property string $TELEFONE_CELULAR_TOKEN_SMS_2
 * @property string $EMAIL_TOKEN
 */
class Corretor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'corretor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO_CORRETOR', 'REGIONAL', 'PESSOA', 'ENVIA_SMS', 'ENVIA_CORRESPONDENCIA', 'USAR_TRACEBOT', 'FORMAPAG', 'TIPOVENC', 'DIAVENC', 'BANCO', 'RECOMPRA_BLOQUEADA', 'OP_BLOQUEADA', 'TIPO_CONTA_RECOMPRA', 'BANCO_RECOMPRA', 'EXCLUIDO', 'FILIAL', 'RATEIA_DESPESAS', 'ENDERECO_CORRESPONDENCIA', 'SITUACAO_CONTATO', 'SITUACAO_CONTATO_2', 'SITUACAO_CONTATO_3', 'TIPO_VISUALIZACAO_WEB', 'TIPO_CONTA', 'ACESSO_WEB', 'INATIVO', 'INATIVA_AUTOMATICO', 'TIPOEND', 'UTILIZA_BONUS', 'SUBSTABELECIDO', 'BASE_COMISSIONAMENTO', 'CAMPO_BASE_COMISSAO', 'UTILIZA_BASE_PERSONALIZADA', 'TIPO_TABELA_BASE_COMISSAO_AGENTE', 'TIPO_TABELA_ESPECIAL', 'TIPO_VENCIMENTO_COMISSAO', 'CAPTADOR', 'GERENTE_COMERCIAL', 'ENVIA_DEMOSTRATIVO_NOTA_FISCAL', 'LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA', 'USAR_TOKEN_SMS'], 'integer'],
            [['NASCIMENTO', 'DATAREGISTRO', 'NASCIMENTO_CONTATO_2', 'NASCIMENTO_CONTATO', 'NASCIMENTO_CONTATO_3', 'VIGENCIA_INICIO_LIMITE_COMISSAO', 'VIGENCIA_FINAL_LIMITE_COMISSAO'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['COMISSAO_CARTAO', 'VALOR_DESCONTAR_OP', 'IRRF_NOTA', 'PIS_NOTA', 'COFINS_NOTA', 'CSLL_NOTA', 'ISS_NOTA', 'OUTROS_IMPOSTOS_NOTA', 'PERCENTUAL_LIMITE_COMISSAO'], 'number'],
            [['UUID', 'USUARIO_RELACIONADO', 'PAI', 'MAE', 'BAIRRO', 'CIDADE', 'CONTATO', 'USUARIO', 'BAIRRO_COM', 'CIDADE_COM', 'EMPRESA', 'CONTATO_2', 'CONTATO_3', 'USUARIO_WEB'], 'string', 'max' => 50],
            [['NOME', 'NOME_FANTASIA', 'ENDERECO', 'CORRENTISTA', 'CORRENTISTA_RECOMPRA', 'ENDERECO_COM'], 'string', 'max' => 100],
            [['CPFCNPJ', 'CPF_CORRENTISTA', 'CPF_CORRENTISTA_RECOMPRA', 'CPF_CONTATO', 'CPF_CONTATO_2', 'CPF_CONTATO_3'], 'string', 'max' => 14],
            [['IDENTIDADE', 'IDENTIDADE_CONTATO_2', 'IDENTIDADE_CONTATO_3', 'IDENTIDADE_CONTATO'], 'string', 'max' => 15],
            [['TELEFONE_RES', 'TELEFONE_CEL', 'TELEFONE_FAX', 'TELEFONE_COM', 'FAX_COM', 'TELEFONE_CEL_CONTATO', 'TELEFONE_CONTATO', 'TELEFONE_CEL_CONTATO_2', 'TELEFONE_CEL_CONTATO_3', 'TELEFONE_CONTATO_2', 'TELEFONE_CONTATO_3', 'TELEFONE_CELULAR_TOKEN_SMS_1', 'TELEFONE_CELULAR_TOKEN_SMS_2'], 'string', 'max' => 12],
            [['UF', 'UF_COM'], 'string', 'max' => 2],
            [['CEP', 'CEP_COM'], 'string', 'max' => 8],
            [['AGENCIA', 'AGENCIA_RECOMPRA'], 'string', 'max' => 10],
            [['CONTA', 'CONTA_RECOMPRA', 'CODIGO_CORRETOR'], 'string', 'max' => 20],
            [['EMAIL', 'EMAIL_COMISSIONAMENTO', 'ATUACAO', 'EMAIL_TOKEN'], 'string', 'max' => 255],
            [['SENHA_WEB'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'UUID' => 'Uuid',
            'TIPO_CORRETOR' => 'Tipo  Corretor',
            'REGIONAL' => 'Regional',
            'USUARIO_RELACIONADO' => 'Usuario  Relacionado',
            'NOME' => 'Nome',
            'NOME_FANTASIA' => 'Nome  Fantasia',
            'NASCIMENTO' => 'Nascimento',
            'PESSOA' => 'Pessoa',
            'CPFCNPJ' => 'Cpfcnpj',
            'IDENTIDADE' => 'Identidade',
            'PAI' => 'Pai',
            'MAE' => 'Mae',
            'TELEFONE_RES' => 'Telefone  Res',
            'TELEFONE_CEL' => 'Telefone  Cel',
            'ENVIA_SMS' => 'Envia  Sms',
            'TELEFONE_FAX' => 'Telefone  Fax',
            'ENVIA_CORRESPONDENCIA' => 'Envia  Correspondencia',
            'USAR_TRACEBOT' => 'Usar  Tracebot',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'CEP' => 'Cep',
            'CONTATO' => 'Contato',
            'OBSERVACAO' => 'Observacao',
            'FORMAPAG' => 'Formapag',
            'TIPOVENC' => 'Tipovenc',
            'DIAVENC' => 'Diavenc',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'CPF_CORRENTISTA' => 'Cpf  Correntista',
            'CORRENTISTA' => 'Correntista',
            'RECOMPRA_BLOQUEADA' => 'Recompra  Bloqueada',
            'OP_BLOQUEADA' => 'Op  Bloqueada',
            'TIPO_CONTA_RECOMPRA' => 'Tipo  Conta  Recompra',
            'BANCO_RECOMPRA' => 'Banco  Recompra',
            'AGENCIA_RECOMPRA' => 'Agencia  Recompra',
            'CONTA_RECOMPRA' => 'Conta  Recompra',
            'CPF_CORRENTISTA_RECOMPRA' => 'Cpf  Correntista  Recompra',
            'CORRENTISTA_RECOMPRA' => 'Correntista  Recompra',
            'EMAIL' => 'Email',
            'EMAIL_COMISSIONAMENTO' => 'Email  Comissionamento',
            'COMISSAO_CARTAO' => 'Comissao  Cartao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'FILIAL' => 'Filial',
            'CODIGO_CORRETOR' => 'Codigo  Corretor',
            'RATEIA_DESPESAS' => 'Rateia  Despesas',
            'NASCIMENTO_CONTATO_2' => 'Nascimento  Contato 2',
            'ENDERECO_CORRESPONDENCIA' => 'Endereco  Correspondencia',
            'ENDERECO_COM' => 'Endereco  Com',
            'BAIRRO_COM' => 'Bairro  Com',
            'CIDADE_COM' => 'Cidade  Com',
            'UF_COM' => 'Uf  Com',
            'CEP_COM' => 'Cep  Com',
            'TELEFONE_COM' => 'Telefone  Com',
            'FAX_COM' => 'Fax  Com',
            'ATUACAO' => 'Atuacao',
            'EMPRESA' => 'Empresa',
            'SITUACAO_CONTATO' => 'Situacao  Contato',
            'TELEFONE_CEL_CONTATO' => 'Telefone  Cel  Contato',
            'NASCIMENTO_CONTATO' => 'Nascimento  Contato',
            'CPF_CONTATO' => 'Cpf  Contato',
            'SITUACAO_CONTATO_2' => 'Situacao  Contato 2',
            'TELEFONE_CONTATO' => 'Telefone  Contato',
            'CONTATO_2' => 'Contato 2',
            'TELEFONE_CEL_CONTATO_2' => 'Telefone  Cel  Contato 2',
            'TELEFONE_CEL_CONTATO_3' => 'Telefone  Cel  Contato 3',
            'CPF_CONTATO_2' => 'Cpf  Contato 2',
            'IDENTIDADE_CONTATO_2' => 'Identidade  Contato 2',
            'TELEFONE_CONTATO_2' => 'Telefone  Contato 2',
            'CONTATO_3' => 'Contato 3',
            'SITUACAO_CONTATO_3' => 'Situacao  Contato 3',
            'TELEFONE_CONTATO_3' => 'Telefone  Contato 3',
            'NASCIMENTO_CONTATO_3' => 'Nascimento  Contato 3',
            'CPF_CONTATO_3' => 'Cpf  Contato 3',
            'IDENTIDADE_CONTATO_3' => 'Identidade  Contato 3',
            'TIPO_VISUALIZACAO_WEB' => 'Tipo  Visualizacao  Web',
            'TIPO_CONTA' => 'Tipo  Conta',
            'ACESSO_WEB' => 'Acesso  Web',
            'USUARIO_WEB' => 'Usuario  Web',
            'SENHA_WEB' => 'Senha  Web',
            'INATIVO' => 'Inativo',
            'INATIVA_AUTOMATICO' => 'Inativa  Automatico',
            'TIPOEND' => 'Tipoend',
            'UTILIZA_BONUS' => 'Utiliza  Bonus',
            'SUBSTABELECIDO' => 'Substabelecido',
            'BASE_COMISSIONAMENTO' => 'Base  Comissionamento',
            'CAMPO_BASE_COMISSAO' => 'Campo  Base  Comissao',
            'UTILIZA_BASE_PERSONALIZADA' => 'Utiliza  Base  Personalizada',
            'TIPO_TABELA_BASE_COMISSAO_AGENTE' => 'Tipo  Tabela  Base  Comissao  Agente',
            'TIPO_TABELA_ESPECIAL' => 'Tipo  Tabela  Especial',
            'TIPO_VENCIMENTO_COMISSAO' => 'Tipo  Vencimento  Comissao',
            'CAPTADOR' => 'Captador',
            'GERENTE_COMERCIAL' => 'Gerente  Comercial',
            'IDENTIDADE_CONTATO' => 'Identidade  Contato',
            'VALOR_DESCONTAR_OP' => 'Valor  Descontar  Op',
            'ENVIA_DEMOSTRATIVO_NOTA_FISCAL' => 'Envia  Demostrativo  Nota  Fiscal',
            'IRRF_NOTA' => 'Irrf  Nota',
            'PIS_NOTA' => 'Pis  Nota',
            'COFINS_NOTA' => 'Cofins  Nota',
            'CSLL_NOTA' => 'Csll  Nota',
            'ISS_NOTA' => 'Iss  Nota',
            'OUTROS_IMPOSTOS_NOTA' => 'Outros  Impostos  Nota',
            'LIMITA_COMISSAO_PRODUTO_COMISSAO_MAXIMA' => 'Limita  Comissao  Produto  Comissao  Maxima',
            'PERCENTUAL_LIMITE_COMISSAO' => 'Percentual  Limite  Comissao',
            'VIGENCIA_INICIO_LIMITE_COMISSAO' => 'Vigencia  Inicio  Limite  Comissao',
            'VIGENCIA_FINAL_LIMITE_COMISSAO' => 'Vigencia  Final  Limite  Comissao',
            'USAR_TOKEN_SMS' => 'Usar  Token  Sms',
            'TELEFONE_CELULAR_TOKEN_SMS_1' => 'Telefone  Celular  Token  Sms 1',
            'TELEFONE_CELULAR_TOKEN_SMS_2' => 'Telefone  Celular  Token  Sms 2',
            'EMAIL_TOKEN' => 'Email  Token',
        ];
    }
}
