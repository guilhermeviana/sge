<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente_atual_cad".
 *
 * @property int $REGISTRO
 * @property int $ENVIA_CORRESPONDENCIA
 * @property int $TOMADOR_EMPRESTIMO
 * @property int $ENVIA_ENDERECAMENTO
 * @property int $ENVIA_TELEMARKETING
 * @property string $NOME
 * @property string $NASCIMENTO
 * @property string $CPFCNPJ
 * @property int $TIPO_IDENTIDADE
 * @property string $IDENTIDADE
 * @property int $SEXO
 * @property int $ESTADO_CIVIL
 * @property string $CONJUGE
 * @property int $TIPO_RESIDENCIA
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $CEP
 * @property string $UF
 * @property string $TEMPO_MORADIA
 * @property double $VALOR_ALUGUEL
 * @property string $OBSERVACAO
 * @property int $CORRETOR
 * @property string $TELEFONE_RES
 * @property int $OPERADORA_CEL
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
 * @property string $MASP
 * @property double $SALARIO
 * @property int $DATA_ADIANTAMENTO
 * @property double $ADIANTAMENTO
 * @property string $CARGO
 * @property string $DATA_ADMISSAO
 * @property string $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $DATA_ABERTURA_CONTA
 * @property int $SPC
 * @property int $SERASA
 * @property int $TIPOVENC
 * @property double $TAXAADM
 * @property string $INICIO_TAXA
 * @property int $FORMAPAG
 * @property string $USUARIO
 * @property string $DATAREGISTRO
 * @property string $USUARIOAT
 * @property string $DATAAT
 * @property int $EXCLUIDO
 * @property string $ORGAO_EXP
 * @property string $DATA_EXPEDICAO
 * @property string $NUMERO
 * @property string $COMPLEMENTO
 * @property string $BENEFICIO
 * @property string $SIAPE
 * @property string $PAI
 * @property string $MAE
 * @property string $NACIONALIDADE
 * @property string $NATURALIDADE
 * @property int $ESCOLARIDADE
 * @property string $EMAIL
 * @property string $CARTORIO
 * @property int $TIPO_CONTA
 * @property string $IDENTIFICADOR_DEBITO
 */
class ClienteAtualCad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente_atual_cad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ENVIA_CORRESPONDENCIA', 'TOMADOR_EMPRESTIMO', 'ENVIA_ENDERECAMENTO', 'ENVIA_TELEMARKETING', 'TIPO_IDENTIDADE', 'SEXO', 'ESTADO_CIVIL', 'TIPO_RESIDENCIA', 'CORRETOR', 'OPERADORA_CEL', 'COD_ORGAO', 'DATA_ADIANTAMENTO', 'SPC', 'SERASA', 'TIPOVENC', 'FORMAPAG', 'EXCLUIDO', 'ESCOLARIDADE', 'TIPO_CONTA'], 'integer'],
            [['NASCIMENTO', 'TEMPO_MORADIA', 'DATA_ADMISSAO', 'DATA_ABERTURA_CONTA', 'INICIO_TAXA', 'DATAREGISTRO', 'DATAAT', 'DATA_EXPEDICAO'], 'safe'],
            [['VALOR_ALUGUEL', 'SALARIO', 'ADIANTAMENTO', 'TAXAADM'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NOME', 'CONJUGE', 'ENDERECO', 'EMPRESA', 'ORGAO', 'ENDERECO_COM', 'EMAIL'], 'string', 'max' => 100],
            [['CPFCNPJ'], 'string', 'max' => 14],
            [['IDENTIDADE'], 'string', 'max' => 15],
            [['BAIRRO', 'CIDADE', 'BAIRRO_COM', 'CIDADE_COM', 'CARGO', 'USUARIO', 'USUARIOAT', 'PAI', 'MAE', 'NACIONALIDADE', 'NATURALIDADE', 'CARTORIO'], 'string', 'max' => 50],
            [['CEP', 'CEP_COM'], 'string', 'max' => 8],
            [['UF', 'UF_COM', 'DATA_PAGAMENTO'], 'string', 'max' => 2],
            [['TELEFONE_RES', 'TELEFONE_CEL', 'TELEFONE_COM'], 'string', 'max' => 12],
            [['RAMAL'], 'string', 'max' => 5],
            [['MASP', 'BENEFICIO', 'SIAPE'], 'string', 'max' => 30],
            [['BANCO'], 'string', 'max' => 3],
            [['AGENCIA', 'NUMERO'], 'string', 'max' => 10],
            [['CONTA', 'COMPLEMENTO', 'IDENTIFICADOR_DEBITO'], 'string', 'max' => 20],
            [['ORGAO_EXP'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ENVIA_CORRESPONDENCIA' => 'Envia  Correspondencia',
            'TOMADOR_EMPRESTIMO' => 'Tomador  Emprestimo',
            'ENVIA_ENDERECAMENTO' => 'Envia  Enderecamento',
            'ENVIA_TELEMARKETING' => 'Envia  Telemarketing',
            'NOME' => 'Nome',
            'NASCIMENTO' => 'Nascimento',
            'CPFCNPJ' => 'Cpfcnpj',
            'TIPO_IDENTIDADE' => 'Tipo  Identidade',
            'IDENTIDADE' => 'Identidade',
            'SEXO' => 'Sexo',
            'ESTADO_CIVIL' => 'Estado  Civil',
            'CONJUGE' => 'Conjuge',
            'TIPO_RESIDENCIA' => 'Tipo  Residencia',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'CEP' => 'Cep',
            'UF' => 'Uf',
            'TEMPO_MORADIA' => 'Tempo  Moradia',
            'VALOR_ALUGUEL' => 'Valor  Aluguel',
            'OBSERVACAO' => 'Observacao',
            'CORRETOR' => 'Corretor',
            'TELEFONE_RES' => 'Telefone  Res',
            'OPERADORA_CEL' => 'Operadora  Cel',
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
            'MASP' => 'Masp',
            'SALARIO' => 'Salario',
            'DATA_ADIANTAMENTO' => 'Data  Adiantamento',
            'ADIANTAMENTO' => 'Adiantamento',
            'CARGO' => 'Cargo',
            'DATA_ADMISSAO' => 'Data  Admissao',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'DATA_ABERTURA_CONTA' => 'Data  Abertura  Conta',
            'SPC' => 'Spc',
            'SERASA' => 'Serasa',
            'TIPOVENC' => 'Tipovenc',
            'TAXAADM' => 'Taxaadm',
            'INICIO_TAXA' => 'Inicio  Taxa',
            'FORMAPAG' => 'Formapag',
            'USUARIO' => 'Usuario',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIOAT' => 'Usuarioat',
            'DATAAT' => 'Dataat',
            'EXCLUIDO' => 'Excluido',
            'ORGAO_EXP' => 'Orgao  Exp',
            'DATA_EXPEDICAO' => 'Data  Expedicao',
            'NUMERO' => 'Numero',
            'COMPLEMENTO' => 'Complemento',
            'BENEFICIO' => 'Beneficio',
            'SIAPE' => 'Siape',
            'PAI' => 'Pai',
            'MAE' => 'Mae',
            'NACIONALIDADE' => 'Nacionalidade',
            'NATURALIDADE' => 'Naturalidade',
            'ESCOLARIDADE' => 'Escolaridade',
            'EMAIL' => 'Email',
            'CARTORIO' => 'Cartorio',
            'TIPO_CONTA' => 'Tipo  Conta',
            'IDENTIFICADOR_DEBITO' => 'Identificador  Debito',
        ];
    }
}
