<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenciador".
 *
 * @property int $REGISTRO
 * @property int $INATIVO
 * @property string $NOME
 * @property string $NASCIMENTO
 * @property int $PESSOA
 * @property string $CPFCNPJ
 * @property string $IDENTIDADE
 * @property string $TELEFONE_RES
 * @property string $TELEFONE_CEL
 * @property int $ENDERECO_CORRESPONDENCIA
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $CEP
 * @property string $ENDERECO_COM
 * @property string $BAIRRO_COM
 * @property string $CIDADE_COM
 * @property string $UF_COM
 * @property string $CEP_COM
 * @property string $TELEFONE_COM
 * @property string $FAX_COM
 * @property string $ATUACAO
 * @property string $EMPRESA
 * @property string $CONTATO
 * @property int $SITUACAO_CONTATO
 * @property string $TELEFONE_CEL_CONTATO
 * @property string $NASCIMENTO_CONTATO
 * @property string $CPF_CONTATO
 * @property string $IDENTIDADE_CONTATO
 * @property string $TELEFONE_CONTATO
 * @property string $CONTATO_2
 * @property int $SITUACAO_CONTATO_2
 * @property string $TELEFONE_CEL_CONTATO_2
 * @property string $NASCIMENTO_CONTATO_2
 * @property string $CPF_CONTATO_2
 * @property string $IDENTIDADE_CONTATO_2
 * @property string $TELEFONE_CONTATO_2
 * @property string $CONTATO_3
 * @property int $SITUACAO_CONTATO_3
 * @property string $TELEFONE_CEL_CONTATO_3
 * @property string $NASCIMENTO_CONTATO_3
 * @property string $CPF_CONTATO_3
 * @property string $IDENTIDADE_CONTATO_3
 * @property string $TELEFONE_CONTATO_3
 * @property string $OBSERVACAO
 * @property int $FORMAPAG
 * @property int $TIPOVENC
 * @property int $DIAVENC
 * @property int $TIPO_CONTA
 * @property int $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $CORRENTISTA
 * @property string $EMAIL
 * @property double $COMISSAO
 * @property int $TIPO_COMISSAO
 * @property double $BASE_COMISSIONAMENTO
 * @property double $COMISSAO_CARTEIRA
 * @property int $ACESSA_WEB
 * @property string $USUARIO_WEB
 * @property string $SENHA_WEB
 * @property string $USUARIO_RELACIONADO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property int $TIPOEND
 */
class Agenciador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agenciador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['INATIVO', 'PESSOA', 'ENDERECO_CORRESPONDENCIA', 'SITUACAO_CONTATO', 'SITUACAO_CONTATO_2', 'SITUACAO_CONTATO_3', 'FORMAPAG', 'TIPOVENC', 'DIAVENC', 'TIPO_CONTA', 'BANCO', 'TIPO_COMISSAO', 'ACESSA_WEB', 'EXCLUIDO', 'TIPOEND'], 'integer'],
            [['NASCIMENTO', 'NASCIMENTO_CONTATO', 'NASCIMENTO_CONTATO_2', 'NASCIMENTO_CONTATO_3', 'DATAREGISTRO'], 'safe'],
            [['OBSERVACAO'], 'string'],
            [['COMISSAO', 'BASE_COMISSIONAMENTO', 'COMISSAO_CARTEIRA'], 'number'],
            [['NOME', 'ENDERECO', 'ENDERECO_COM'], 'string', 'max' => 100],
            [['CPFCNPJ', 'CPF_CONTATO', 'CPF_CONTATO_2', 'CPF_CONTATO_3'], 'string', 'max' => 14],
            [['IDENTIDADE', 'IDENTIDADE_CONTATO', 'IDENTIDADE_CONTATO_2', 'IDENTIDADE_CONTATO_3'], 'string', 'max' => 15],
            [['TELEFONE_RES', 'TELEFONE_CEL', 'TELEFONE_COM'], 'string', 'max' => 12],
            [['BAIRRO', 'CIDADE', 'BAIRRO_COM', 'CIDADE_COM', 'EMPRESA', 'CONTATO', 'CONTATO_2', 'CONTATO_3', 'CORRENTISTA', 'USUARIO_WEB', 'USUARIO_RELACIONADO', 'USUARIO'], 'string', 'max' => 50],
            [['UF', 'UF_COM'], 'string', 'max' => 2],
            [['CEP', 'CEP_COM'], 'string', 'max' => 8],
            [['FAX_COM', 'TELEFONE_CEL_CONTATO', 'TELEFONE_CONTATO', 'TELEFONE_CEL_CONTATO_2', 'TELEFONE_CONTATO_2', 'TELEFONE_CEL_CONTATO_3', 'TELEFONE_CONTATO_3', 'AGENCIA'], 'string', 'max' => 10],
            [['ATUACAO', 'EMAIL'], 'string', 'max' => 255],
            [['CONTA', 'SENHA_WEB'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'INATIVO' => 'Inativo',
            'NOME' => 'Nome',
            'NASCIMENTO' => 'Nascimento',
            'PESSOA' => 'Pessoa',
            'CPFCNPJ' => 'Cpfcnpj',
            'IDENTIDADE' => 'Identidade',
            'TELEFONE_RES' => 'Telefone  Res',
            'TELEFONE_CEL' => 'Telefone  Cel',
            'ENDERECO_CORRESPONDENCIA' => 'Endereco  Correspondencia',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'CEP' => 'Cep',
            'ENDERECO_COM' => 'Endereco  Com',
            'BAIRRO_COM' => 'Bairro  Com',
            'CIDADE_COM' => 'Cidade  Com',
            'UF_COM' => 'Uf  Com',
            'CEP_COM' => 'Cep  Com',
            'TELEFONE_COM' => 'Telefone  Com',
            'FAX_COM' => 'Fax  Com',
            'ATUACAO' => 'Atuacao',
            'EMPRESA' => 'Empresa',
            'CONTATO' => 'Contato',
            'SITUACAO_CONTATO' => 'Situacao  Contato',
            'TELEFONE_CEL_CONTATO' => 'Telefone  Cel  Contato',
            'NASCIMENTO_CONTATO' => 'Nascimento  Contato',
            'CPF_CONTATO' => 'Cpf  Contato',
            'IDENTIDADE_CONTATO' => 'Identidade  Contato',
            'TELEFONE_CONTATO' => 'Telefone  Contato',
            'CONTATO_2' => 'Contato 2',
            'SITUACAO_CONTATO_2' => 'Situacao  Contato 2',
            'TELEFONE_CEL_CONTATO_2' => 'Telefone  Cel  Contato 2',
            'NASCIMENTO_CONTATO_2' => 'Nascimento  Contato 2',
            'CPF_CONTATO_2' => 'Cpf  Contato 2',
            'IDENTIDADE_CONTATO_2' => 'Identidade  Contato 2',
            'TELEFONE_CONTATO_2' => 'Telefone  Contato 2',
            'CONTATO_3' => 'Contato 3',
            'SITUACAO_CONTATO_3' => 'Situacao  Contato 3',
            'TELEFONE_CEL_CONTATO_3' => 'Telefone  Cel  Contato 3',
            'NASCIMENTO_CONTATO_3' => 'Nascimento  Contato 3',
            'CPF_CONTATO_3' => 'Cpf  Contato 3',
            'IDENTIDADE_CONTATO_3' => 'Identidade  Contato 3',
            'TELEFONE_CONTATO_3' => 'Telefone  Contato 3',
            'OBSERVACAO' => 'Observacao',
            'FORMAPAG' => 'Formapag',
            'TIPOVENC' => 'Tipovenc',
            'DIAVENC' => 'Diavenc',
            'TIPO_CONTA' => 'Tipo  Conta',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'CORRENTISTA' => 'Correntista',
            'EMAIL' => 'Email',
            'COMISSAO' => 'Comissao',
            'TIPO_COMISSAO' => 'Tipo  Comissao',
            'BASE_COMISSIONAMENTO' => 'Base  Comissionamento',
            'COMISSAO_CARTEIRA' => 'Comissao  Carteira',
            'ACESSA_WEB' => 'Acessa  Web',
            'USUARIO_WEB' => 'Usuario  Web',
            'SENHA_WEB' => 'Senha  Web',
            'USUARIO_RELACIONADO' => 'Usuario  Relacionado',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'TIPOEND' => 'Tipoend',
        ];
    }
}
