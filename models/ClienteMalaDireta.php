<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente_mala_direta".
 *
 * @property int $REGISTRO
 * @property string $NOME
 * @property string $NASCIMENTO
 * @property string $CPFCNPJ
 * @property string $IDENTIDADE
 * @property string $ORGAO_EXP
 * @property int $SEXO
 * @property int $ESTADO_CIVIL
 * @property string $CONJUGE
 * @property string $ENDERECO
 * @property string $NUMERO
 * @property string $COMPLEMENTO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $CEP
 * @property string $UF
 * @property string $OBSERVACAO
 * @property int $CORRETOR
 * @property string $TELEFONE_RES
 * @property string $TELEFONE_CEL
 * @property string $EMPRESA
 * @property int $COD_ORGAO
 * @property string $ORGAO
 * @property string $ENDERECO_COM
 * @property string $BAIRRO_COM
 * @property string $CIDADE_COM
 * @property string $CEP_COM
 * @property string $UF_COM
 * @property string $TELEFONE_COM
 * @property string $RAMAL
 * @property string $DATA_PAGAMENTO
 * @property string $BENEFICIO
 * @property string $MASP
 * @property string $SIAPE
 * @property string $PAI
 * @property string $MAE
 * @property string $NATURALIDADE
 * @property string $EMAIL
 * @property double $SALARIO
 * @property string $CARGO
 * @property string $DATA_ADMISSAO
 * @property int $TIPO_CONTA
 * @property string $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $DATA_ABERTURA_CONTA
 * @property int $SPC
 * @property int $SERASA
 * @property int $TIPOVENC
 * @property string $IDENTIFICADOR_DEBITO
 * @property double $TAXAADM
 * @property string $INICIO_TAXA
 * @property int $FORMAPAG
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property string $USUARIOAT
 * @property string $DATAAT
 * @property int $EXCLUIDO
 */
class ClienteMalaDireta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente_mala_direta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NASCIMENTO', 'DATA_ADMISSAO', 'DATA_ABERTURA_CONTA', 'INICIO_TAXA', 'DATAREGISTRO', 'DATAAT'], 'safe'],
            [['SEXO', 'ESTADO_CIVIL', 'CORRETOR', 'COD_ORGAO', 'TIPO_CONTA', 'SPC', 'SERASA', 'TIPOVENC', 'FORMAPAG', 'EXCLUIDO'], 'integer'],
            [['OBSERVACAO'], 'string'],
            [['SALARIO', 'TAXAADM'], 'number'],
            [['NOME', 'CONJUGE', 'ENDERECO', 'ENDERECO_COM', 'EMAIL'], 'string', 'max' => 100],
            [['CPFCNPJ'], 'string', 'max' => 14],
            [['IDENTIDADE'], 'string', 'max' => 15],
            [['ORGAO_EXP', 'NUMERO', 'AGENCIA'], 'string', 'max' => 10],
            [['COMPLEMENTO', 'CONTA', 'IDENTIFICADOR_DEBITO'], 'string', 'max' => 20],
            [['BAIRRO', 'CIDADE', 'EMPRESA', 'ORGAO', 'BAIRRO_COM', 'CIDADE_COM', 'PAI', 'MAE', 'NATURALIDADE', 'CARGO', 'USUARIO', 'USUARIOAT'], 'string', 'max' => 50],
            [['CEP', 'CEP_COM'], 'string', 'max' => 8],
            [['UF', 'UF_COM', 'DATA_PAGAMENTO'], 'string', 'max' => 2],
            [['TELEFONE_RES', 'TELEFONE_CEL', 'TELEFONE_COM'], 'string', 'max' => 12],
            [['RAMAL'], 'string', 'max' => 5],
            [['BENEFICIO', 'MASP', 'SIAPE'], 'string', 'max' => 30],
            [['BANCO'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'NOME' => 'Nome',
            'NASCIMENTO' => 'Nascimento',
            'CPFCNPJ' => 'Cpfcnpj',
            'IDENTIDADE' => 'Identidade',
            'ORGAO_EXP' => 'Orgao  Exp',
            'SEXO' => 'Sexo',
            'ESTADO_CIVIL' => 'Estado  Civil',
            'CONJUGE' => 'Conjuge',
            'ENDERECO' => 'Endereco',
            'NUMERO' => 'Numero',
            'COMPLEMENTO' => 'Complemento',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'CEP' => 'Cep',
            'UF' => 'Uf',
            'OBSERVACAO' => 'Observacao',
            'CORRETOR' => 'Corretor',
            'TELEFONE_RES' => 'Telefone  Res',
            'TELEFONE_CEL' => 'Telefone  Cel',
            'EMPRESA' => 'Empresa',
            'COD_ORGAO' => 'Cod  Orgao',
            'ORGAO' => 'Orgao',
            'ENDERECO_COM' => 'Endereco  Com',
            'BAIRRO_COM' => 'Bairro  Com',
            'CIDADE_COM' => 'Cidade  Com',
            'CEP_COM' => 'Cep  Com',
            'UF_COM' => 'Uf  Com',
            'TELEFONE_COM' => 'Telefone  Com',
            'RAMAL' => 'Ramal',
            'DATA_PAGAMENTO' => 'Data  Pagamento',
            'BENEFICIO' => 'Beneficio',
            'MASP' => 'Masp',
            'SIAPE' => 'Siape',
            'PAI' => 'Pai',
            'MAE' => 'Mae',
            'NATURALIDADE' => 'Naturalidade',
            'EMAIL' => 'Email',
            'SALARIO' => 'Salario',
            'CARGO' => 'Cargo',
            'DATA_ADMISSAO' => 'Data  Admissao',
            'TIPO_CONTA' => 'Tipo  Conta',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'DATA_ABERTURA_CONTA' => 'Data  Abertura  Conta',
            'SPC' => 'Spc',
            'SERASA' => 'Serasa',
            'TIPOVENC' => 'Tipovenc',
            'IDENTIFICADOR_DEBITO' => 'Identificador  Debito',
            'TAXAADM' => 'Taxaadm',
            'INICIO_TAXA' => 'Inicio  Taxa',
            'FORMAPAG' => 'Formapag',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIOAT' => 'Usuarioat',
            'DATAAT' => 'Dataat',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
