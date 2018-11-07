<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente_golden".
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
 * @property string $NASCIMENTO_CONJUGE
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
 * @property int $ATENDENTE
 * @property string $TELEFONE_RES
 * @property string $TELEFONE_PREFERENCIAL
 * @property int $OPERADORA_CEL
 * @property string $TELEFONE_CEL
 * @property string $EMPRESA
 * @property int $COD_ORGAO
 * @property string $ORGAO
 * @property string $ENDERECO_COM
 * @property string $NUMERO_COM
 * @property string $COMPLEMENTO_COM
 * @property string $BAIRRO_COM
 * @property string $CIDADE_COM
 * @property string $CEP_COM
 * @property string $UF_COM
 * @property string $TELEFONE_COM
 * @property string $TELEFONE_COM_2
 * @property string $RAMAL
 * @property string $DATA_PAGAMENTO
 * @property string $MASP
 * @property double $SALARIO
 * @property int $DATA_ADIANTAMENTO
 * @property double $ADIANTAMENTO
 * @property string $CARGO
 * @property string $NATUREZA_OCUPACAO
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
 * @property string $IDENTIFICADOR_CLIENTE_BANCO
 * @property string $IDENTIFICADOR_MAILING
 * @property double $MARGEM_DISPONIVEL
 * @property string $DATA_CONSULTA_MARGEM
 * @property double $LIMITE_DISPONIVEL_SAQUE
 * @property double $LIMITE_COMPRA_DISPONIVEL
 * @property string $ULTIMO_CONTATO_CLIENTE
 * @property int $ROTA_ATENDIMENTO
 */
class ClienteGolden extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente_golden';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ENVIA_CORRESPONDENCIA', 'TOMADOR_EMPRESTIMO', 'ENVIA_ENDERECAMENTO', 'ENVIA_TELEMARKETING', 'TIPO_IDENTIDADE', 'SEXO', 'ESTADO_CIVIL', 'TIPO_RESIDENCIA', 'CORRETOR', 'ATENDENTE', 'OPERADORA_CEL', 'COD_ORGAO', 'DATA_ADIANTAMENTO', 'SPC', 'SERASA', 'TIPOVENC', 'FORMAPAG', 'EXCLUIDO', 'ESCOLARIDADE', 'TIPO_CONTA', 'ROTA_ATENDIMENTO'], 'integer'],
            [['NASCIMENTO', 'NASCIMENTO_CONJUGE', 'TEMPO_MORADIA', 'DATA_ADMISSAO', 'DATA_ABERTURA_CONTA', 'INICIO_TAXA', 'DATAREGISTRO', 'DATAAT', 'DATA_EXPEDICAO', 'DATA_CONSULTA_MARGEM', 'ULTIMO_CONTATO_CLIENTE'], 'safe'],
            [['VALOR_ALUGUEL', 'SALARIO', 'ADIANTAMENTO', 'TAXAADM', 'MARGEM_DISPONIVEL', 'LIMITE_DISPONIVEL_SAQUE', 'LIMITE_COMPRA_DISPONIVEL'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NOME', 'CONJUGE', 'ENDERECO', 'ENDERECO_COM', 'EMAIL'], 'string', 'max' => 100],
            [['CPFCNPJ'], 'string', 'max' => 14],
            [['IDENTIDADE', 'COMPLEMENTO_COM', 'MASP', 'BENEFICIO', 'SIAPE'], 'string', 'max' => 30],
            [['BAIRRO', 'CIDADE', 'BAIRRO_COM', 'CIDADE_COM', 'CARGO', 'NATUREZA_OCUPACAO', 'USUARIO', 'USUARIOAT', 'COMPLEMENTO', 'PAI', 'MAE', 'NACIONALIDADE', 'NATURALIDADE', 'CARTORIO', 'IDENTIFICADOR_CLIENTE_BANCO', 'IDENTIFICADOR_MAILING'], 'string', 'max' => 50],
            [['CEP', 'CEP_COM'], 'string', 'max' => 8],
            [['UF', 'UF_COM', 'DATA_PAGAMENTO'], 'string', 'max' => 2],
            [['TELEFONE_RES', 'TELEFONE_PREFERENCIAL', 'TELEFONE_CEL', 'TELEFONE_COM', 'TELEFONE_COM_2'], 'string', 'max' => 12],
            [['EMPRESA', 'ORGAO'], 'string', 'max' => 255],
            [['NUMERO_COM', 'CONTA', 'NUMERO', 'IDENTIFICADOR_DEBITO'], 'string', 'max' => 20],
            [['RAMAL'], 'string', 'max' => 5],
            [['BANCO'], 'string', 'max' => 3],
            [['AGENCIA'], 'string', 'max' => 10],
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
            'NASCIMENTO_CONJUGE' => 'Nascimento  Conjuge',
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
            'ATENDENTE' => 'Atendente',
            'TELEFONE_RES' => 'Telefone  Res',
            'TELEFONE_PREFERENCIAL' => 'Telefone  Preferencial',
            'OPERADORA_CEL' => 'Operadora  Cel',
            'TELEFONE_CEL' => 'Telefone  Cel',
            'EMPRESA' => 'Empresa',
            'COD_ORGAO' => 'Cod  Orgao',
            'ORGAO' => 'Orgao',
            'ENDERECO_COM' => 'Endereco  Com',
            'NUMERO_COM' => 'Numero  Com',
            'COMPLEMENTO_COM' => 'Complemento  Com',
            'BAIRRO_COM' => 'Bairro  Com',
            'CIDADE_COM' => 'Cidade  Com',
            'CEP_COM' => 'Cep  Com',
            'UF_COM' => 'Uf  Com',
            'TELEFONE_COM' => 'Telefone  Com',
            'TELEFONE_COM_2' => 'Telefone  Com 2',
            'RAMAL' => 'Ramal',
            'DATA_PAGAMENTO' => 'Data  Pagamento',
            'MASP' => 'Masp',
            'SALARIO' => 'Salario',
            'DATA_ADIANTAMENTO' => 'Data  Adiantamento',
            'ADIANTAMENTO' => 'Adiantamento',
            'CARGO' => 'Cargo',
            'NATUREZA_OCUPACAO' => 'Natureza  Ocupacao',
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
            'IDENTIFICADOR_CLIENTE_BANCO' => 'Identificador  Cliente  Banco',
            'IDENTIFICADOR_MAILING' => 'Identificador  Mailing',
            'MARGEM_DISPONIVEL' => 'Margem  Disponivel',
            'DATA_CONSULTA_MARGEM' => 'Data  Consulta  Margem',
            'LIMITE_DISPONIVEL_SAQUE' => 'Limite  Disponivel  Saque',
            'LIMITE_COMPRA_DISPONIVEL' => 'Limite  Compra  Disponivel',
            'ULTIMO_CONTATO_CLIENTE' => 'Ultimo  Contato  Cliente',
            'ROTA_ATENDIMENTO' => 'Rota  Atendimento',
        ];
    }
}
