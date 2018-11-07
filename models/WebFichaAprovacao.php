<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_ficha_aprovacao".
 *
 * @property int $REGISTRO
 * @property int $CHECK_LIST
 * @property int $TIPO_FICHA
 * @property string $NOME
 * @property string $NASCIMENTO
 * @property string $CPFCNPJ
 * @property int $TIPO_IDENTIDADE
 * @property string $IDENTIDADE
 * @property string $ORGAO_EXP
 * @property string $DATA_EXPEDICAO
 * @property int $SEXO
 * @property int $ESTADO_CIVIL
 * @property int $CONJUGE_COMPOE_RENDA
 * @property string $CONJUGE
 * @property string $CPF_CONJUGE
 * @property string $IDENTIDADE_CONJUGE
 * @property string $ORG_EXP_CONJUGE
 * @property string $DATA_EXP_IDENTIDADE_CONJUGE
 * @property string $NATURALIDADE_CONJUGE
 * @property string $UF_NATURALIDADE_CONJUGE
 * @property string $NACIONALIDADE_CONJUGE
 * @property string $TRABALHO_CONJUGE
 * @property string $CNPJ_TRAB_CONJUGE
 * @property string $TELEFONE_COM_CONJUGE
 * @property string $CARGO_CONJUGE
 * @property string $PROFISSAO_CONJUGE
 * @property double $SALARIO_CONJUGE
 * @property int $MES_TEMPO_SERVICO_CONJUGE
 * @property int $ANO_TEMPO_SERVICO_CONJUGE
 * @property int $ENVIO_CORRESPONDENCIA
 * @property int $TIPO_RESIDENCIA
 * @property string $ENDERECO
 * @property string $NUMERO
 * @property string $COMPLEMENTO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $CEP
 * @property string $UF
 * @property string $PAI
 * @property string $MAE
 * @property int $DEPENDENTES
 * @property int $TEMPO_MORADIA_ANO_ATUAL
 * @property int $TEMPO_MORADIA_MES_ATUAL
 * @property int $TEMPO_MORADIA_ANO_ANTERIOR
 * @property int $TEMPO_MORADIA_MES_ANTERIOR
 * @property double $VALOR_ALUGUEL
 * @property string $OBSERVACAO
 * @property int $CORRETOR
 * @property string $TELEFONE_RES
 * @property int $TIPO_TELEFONE_RES
 * @property string $TELEFONE_CEL
 * @property string $NACIONALIDADE
 * @property string $NATURALIDADE
 * @property string $UF_NATURALIDADE
 * @property string $EMPRESA
 * @property int $COD_ORGAO
 * @property string $ORGAO
 * @property int $ESCOLARIDADE
 * @property string $ENDERECO_COM
 * @property string $NUMERO_COM
 * @property string $COMPLEMENTO_COM
 * @property string $BAIRRO_COM
 * @property string $CIDADE_COM
 * @property string $CEP_COM
 * @property string $UF_COM
 * @property string $TELEFONE_COM
 * @property string $RAMAL
 * @property string $DATA_PAGAMENTO
 * @property double $SALARIO
 * @property string $OUTRAS RENDAS
 * @property double $VALOR_OUTRAS_RENDAS
 * @property string $CARGO
 * @property string $FUNCAO
 * @property string $DATA_ADMISSAO
 * @property string $CARTORIO
 * @property int $TIPO_CONTA
 * @property string $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $DATA_ABERTURA_CONTA
 * @property string $EMAIL
 * @property int $BENS_TIPO_VEICULO_1
 * @property string $BENS_MARCA_MODELO_1
 * @property string $BENS_PLACA_1
 * @property int $BENS_ANO_1
 * @property int $BENS_SITUACAO_1
 * @property int $BENS_TIPO_VEICULO_2
 * @property string $BENS_MARCA_MODELO_2
 * @property string $BENS_PLACA_2
 * @property int $BENS_ANO_2
 * @property int $BENS_SITUACAO_2
 * @property int $REF_BAN_INSTITUICAO_FINANCEIRA_1
 * @property string $REF_BAN_AGENCIA_1
 * @property string $REF_BAN_CONTA_1
 * @property string $REF_BAN_DATA_ABERTURA_1
 * @property string $REF_BAN_TELEFONE_1
 * @property int $REF_BAN_INSTITUICAO_FINANCEIRA_2
 * @property string $REF_BAN_AGENCIA_2
 * @property string $REF_BAN_CONTA_2
 * @property string $REF_BAN_DATA_ABERTURA_2
 * @property string $REF_BAN_TELEFONE_2
 * @property string $REF_PES_NOME_1
 * @property string $REF_PES_AFINIDADE_1
 * @property string $REF_PES_TELEFONE_1
 * @property string $REF_PES_CELULAR_1
 * @property string $REF_PES_NOME_2
 * @property string $REF_PES_AFINIDADE_2
 * @property string $REF_PES_TELEFONE_2
 * @property string $REF_PES_CELULAR_2
 * @property string $REF_PES_NOME_3
 * @property string $REF_PES_AFINIDADE_3
 * @property string $REF_PES_TELEFONE_3
 * @property string $REF_PES_CELULAR_3
 * @property double $VALOR_VEICULO
 * @property double $VALOR_FINANCIADO
 * @property double $ENTRADA
 * @property int $PRAZO
 * @property double $PRESTACAO
 * @property string $VENC_PRI_PARC
 * @property int $PRODUTO
 * @property string $TABELA
 * @property int $CARENCIA
 * @property string $CONTRATO
 * @property string $COEFICIENTE
 * @property int $FORMA_PAGAMENTO
 * @property double $TARIFAS
 * @property string $MARCA_MODELO
 * @property string $MODELO_VEICULO
 * @property string $TIPO_VEICULO
 * @property int $COMBUSTIVEL
 * @property string $ANO
 * @property int $PORTAS
 * @property string $PLACA
 * @property string $RENAVAN
 * @property string $CHASSI
 * @property int $SITUACAO_ATUAL
 * @property string $OBSERVACAO_LOJISTA
 * @property string $DATA_ENVIO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property double $VALOR_ENTRADA
 */
class WebFichaAprovacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_ficha_aprovacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CHECK_LIST', 'TIPO_FICHA', 'TIPO_IDENTIDADE', 'SEXO', 'ESTADO_CIVIL', 'CONJUGE_COMPOE_RENDA', 'MES_TEMPO_SERVICO_CONJUGE', 'ANO_TEMPO_SERVICO_CONJUGE', 'ENVIO_CORRESPONDENCIA', 'TIPO_RESIDENCIA', 'DEPENDENTES', 'TEMPO_MORADIA_ANO_ATUAL', 'TEMPO_MORADIA_MES_ATUAL', 'TEMPO_MORADIA_ANO_ANTERIOR', 'TEMPO_MORADIA_MES_ANTERIOR', 'CORRETOR', 'TIPO_TELEFONE_RES', 'COD_ORGAO', 'ESCOLARIDADE', 'TIPO_CONTA', 'BENS_TIPO_VEICULO_1', 'BENS_ANO_1', 'BENS_SITUACAO_1', 'BENS_TIPO_VEICULO_2', 'BENS_ANO_2', 'BENS_SITUACAO_2', 'REF_BAN_INSTITUICAO_FINANCEIRA_1', 'REF_BAN_INSTITUICAO_FINANCEIRA_2', 'PRAZO', 'PRODUTO', 'CARENCIA', 'FORMA_PAGAMENTO', 'COMBUSTIVEL', 'PORTAS', 'SITUACAO_ATUAL', 'EXCLUIDO'], 'integer'],
            [['NASCIMENTO', 'DATA_EXPEDICAO', 'DATA_EXP_IDENTIDADE_CONJUGE', 'DATA_ADMISSAO', 'DATA_ABERTURA_CONTA', 'REF_BAN_DATA_ABERTURA_1', 'REF_BAN_DATA_ABERTURA_2', 'VENC_PRI_PARC', 'DATA_ENVIO', 'DATAREGISTRO'], 'safe'],
            [['SALARIO_CONJUGE', 'VALOR_ALUGUEL', 'SALARIO', 'VALOR_OUTRAS_RENDAS', 'VALOR_VEICULO', 'VALOR_FINANCIADO', 'ENTRADA', 'PRESTACAO', 'TARIFAS', 'VALOR_ENTRADA'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NOME', 'CONJUGE', 'ENDERECO', 'ENDERECO_COM', 'EMAIL'], 'string', 'max' => 100],
            [['CPFCNPJ', 'CPF_CONJUGE', 'CNPJ_TRAB_CONJUGE'], 'string', 'max' => 14],
            [['IDENTIDADE', 'REF_BAN_CONTA_1', 'REF_BAN_CONTA_2'], 'string', 'max' => 15],
            [['ORGAO_EXP', 'ORG_EXP_CONJUGE', 'NUMERO', 'NUMERO_COM', 'AGENCIA', 'REF_BAN_TELEFONE_1', 'REF_BAN_TELEFONE_2', 'REF_PES_TELEFONE_1', 'REF_PES_CELULAR_1', 'REF_PES_TELEFONE_2', 'REF_PES_CELULAR_2', 'REF_PES_TELEFONE_3', 'REF_PES_CELULAR_3'], 'string', 'max' => 10],
            [['IDENTIDADE_CONJUGE', 'COMPLEMENTO', 'COMPLEMENTO_COM', 'CONTA', 'TABELA', 'CONTRATO', 'COEFICIENTE', 'RENAVAN'], 'string', 'max' => 20],
            [['NATURALIDADE_CONJUGE', 'NACIONALIDADE_CONJUGE', 'CARGO_CONJUGE', 'PROFISSAO_CONJUGE', 'OUTRAS RENDAS', 'REF_PES_NOME_1', 'REF_PES_AFINIDADE_1', 'REF_PES_NOME_2', 'REF_PES_AFINIDADE_2', 'REF_PES_NOME_3', 'REF_PES_AFINIDADE_3', 'MARCA_MODELO', 'MODELO_VEICULO', 'TIPO_VEICULO', 'CHASSI'], 'string', 'max' => 30],
            [['UF_NATURALIDADE_CONJUGE', 'UF', 'UF_NATURALIDADE', 'UF_COM', 'DATA_PAGAMENTO'], 'string', 'max' => 2],
            [['TRABALHO_CONJUGE', 'BAIRRO', 'CIDADE', 'PAI', 'MAE', 'NACIONALIDADE', 'NATURALIDADE', 'EMPRESA', 'ORGAO', 'BAIRRO_COM', 'CIDADE_COM', 'CARGO', 'FUNCAO', 'CARTORIO', 'BENS_MARCA_MODELO_1', 'BENS_MARCA_MODELO_2', 'USUARIO'], 'string', 'max' => 50],
            [['TELEFONE_COM_CONJUGE', 'TELEFONE_RES', 'TELEFONE_CEL', 'TELEFONE_COM'], 'string', 'max' => 12],
            [['CEP', 'CEP_COM', 'BENS_PLACA_1', 'BENS_PLACA_2', 'PLACA'], 'string', 'max' => 8],
            [['RAMAL'], 'string', 'max' => 5],
            [['BANCO'], 'string', 'max' => 3],
            [['REF_BAN_AGENCIA_1', 'REF_BAN_AGENCIA_2'], 'string', 'max' => 6],
            [['ANO'], 'string', 'max' => 11],
            [['OBSERVACAO_LOJISTA'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CHECK_LIST' => 'Check  List',
            'TIPO_FICHA' => 'Tipo  Ficha',
            'NOME' => 'Nome',
            'NASCIMENTO' => 'Nascimento',
            'CPFCNPJ' => 'Cpfcnpj',
            'TIPO_IDENTIDADE' => 'Tipo  Identidade',
            'IDENTIDADE' => 'Identidade',
            'ORGAO_EXP' => 'Orgao  Exp',
            'DATA_EXPEDICAO' => 'Data  Expedicao',
            'SEXO' => 'Sexo',
            'ESTADO_CIVIL' => 'Estado  Civil',
            'CONJUGE_COMPOE_RENDA' => 'Conjuge  Compoe  Renda',
            'CONJUGE' => 'Conjuge',
            'CPF_CONJUGE' => 'Cpf  Conjuge',
            'IDENTIDADE_CONJUGE' => 'Identidade  Conjuge',
            'ORG_EXP_CONJUGE' => 'Org  Exp  Conjuge',
            'DATA_EXP_IDENTIDADE_CONJUGE' => 'Data  Exp  Identidade  Conjuge',
            'NATURALIDADE_CONJUGE' => 'Naturalidade  Conjuge',
            'UF_NATURALIDADE_CONJUGE' => 'Uf  Naturalidade  Conjuge',
            'NACIONALIDADE_CONJUGE' => 'Nacionalidade  Conjuge',
            'TRABALHO_CONJUGE' => 'Trabalho  Conjuge',
            'CNPJ_TRAB_CONJUGE' => 'Cnpj  Trab  Conjuge',
            'TELEFONE_COM_CONJUGE' => 'Telefone  Com  Conjuge',
            'CARGO_CONJUGE' => 'Cargo  Conjuge',
            'PROFISSAO_CONJUGE' => 'Profissao  Conjuge',
            'SALARIO_CONJUGE' => 'Salario  Conjuge',
            'MES_TEMPO_SERVICO_CONJUGE' => 'Mes  Tempo  Servico  Conjuge',
            'ANO_TEMPO_SERVICO_CONJUGE' => 'Ano  Tempo  Servico  Conjuge',
            'ENVIO_CORRESPONDENCIA' => 'Envio  Correspondencia',
            'TIPO_RESIDENCIA' => 'Tipo  Residencia',
            'ENDERECO' => 'Endereco',
            'NUMERO' => 'Numero',
            'COMPLEMENTO' => 'Complemento',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'CEP' => 'Cep',
            'UF' => 'Uf',
            'PAI' => 'Pai',
            'MAE' => 'Mae',
            'DEPENDENTES' => 'Dependentes',
            'TEMPO_MORADIA_ANO_ATUAL' => 'Tempo  Moradia  Ano  Atual',
            'TEMPO_MORADIA_MES_ATUAL' => 'Tempo  Moradia  Mes  Atual',
            'TEMPO_MORADIA_ANO_ANTERIOR' => 'Tempo  Moradia  Ano  Anterior',
            'TEMPO_MORADIA_MES_ANTERIOR' => 'Tempo  Moradia  Mes  Anterior',
            'VALOR_ALUGUEL' => 'Valor  Aluguel',
            'OBSERVACAO' => 'Observacao',
            'CORRETOR' => 'Corretor',
            'TELEFONE_RES' => 'Telefone  Res',
            'TIPO_TELEFONE_RES' => 'Tipo  Telefone  Res',
            'TELEFONE_CEL' => 'Telefone  Cel',
            'NACIONALIDADE' => 'Nacionalidade',
            'NATURALIDADE' => 'Naturalidade',
            'UF_NATURALIDADE' => 'Uf  Naturalidade',
            'EMPRESA' => 'Empresa',
            'COD_ORGAO' => 'Cod  Orgao',
            'ORGAO' => 'Orgao',
            'ESCOLARIDADE' => 'Escolaridade',
            'ENDERECO_COM' => 'Endereco  Com',
            'NUMERO_COM' => 'Numero  Com',
            'COMPLEMENTO_COM' => 'Complemento  Com',
            'BAIRRO_COM' => 'Bairro  Com',
            'CIDADE_COM' => 'Cidade  Com',
            'CEP_COM' => 'Cep  Com',
            'UF_COM' => 'Uf  Com',
            'TELEFONE_COM' => 'Telefone  Com',
            'RAMAL' => 'Ramal',
            'DATA_PAGAMENTO' => 'Data  Pagamento',
            'SALARIO' => 'Salario',
            'OUTRAS RENDAS' => 'Outras  Rendas',
            'VALOR_OUTRAS_RENDAS' => 'Valor  Outras  Rendas',
            'CARGO' => 'Cargo',
            'FUNCAO' => 'Funcao',
            'DATA_ADMISSAO' => 'Data  Admissao',
            'CARTORIO' => 'Cartorio',
            'TIPO_CONTA' => 'Tipo  Conta',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'DATA_ABERTURA_CONTA' => 'Data  Abertura  Conta',
            'EMAIL' => 'Email',
            'BENS_TIPO_VEICULO_1' => 'Bens  Tipo  Veiculo 1',
            'BENS_MARCA_MODELO_1' => 'Bens  Marca  Modelo 1',
            'BENS_PLACA_1' => 'Bens  Placa 1',
            'BENS_ANO_1' => 'Bens  Ano 1',
            'BENS_SITUACAO_1' => 'Bens  Situacao 1',
            'BENS_TIPO_VEICULO_2' => 'Bens  Tipo  Veiculo 2',
            'BENS_MARCA_MODELO_2' => 'Bens  Marca  Modelo 2',
            'BENS_PLACA_2' => 'Bens  Placa 2',
            'BENS_ANO_2' => 'Bens  Ano 2',
            'BENS_SITUACAO_2' => 'Bens  Situacao 2',
            'REF_BAN_INSTITUICAO_FINANCEIRA_1' => 'Ref  Ban  Instituicao  Financeira 1',
            'REF_BAN_AGENCIA_1' => 'Ref  Ban  Agencia 1',
            'REF_BAN_CONTA_1' => 'Ref  Ban  Conta 1',
            'REF_BAN_DATA_ABERTURA_1' => 'Ref  Ban  Data  Abertura 1',
            'REF_BAN_TELEFONE_1' => 'Ref  Ban  Telefone 1',
            'REF_BAN_INSTITUICAO_FINANCEIRA_2' => 'Ref  Ban  Instituicao  Financeira 2',
            'REF_BAN_AGENCIA_2' => 'Ref  Ban  Agencia 2',
            'REF_BAN_CONTA_2' => 'Ref  Ban  Conta 2',
            'REF_BAN_DATA_ABERTURA_2' => 'Ref  Ban  Data  Abertura 2',
            'REF_BAN_TELEFONE_2' => 'Ref  Ban  Telefone 2',
            'REF_PES_NOME_1' => 'Ref  Pes  Nome 1',
            'REF_PES_AFINIDADE_1' => 'Ref  Pes  Afinidade 1',
            'REF_PES_TELEFONE_1' => 'Ref  Pes  Telefone 1',
            'REF_PES_CELULAR_1' => 'Ref  Pes  Celular 1',
            'REF_PES_NOME_2' => 'Ref  Pes  Nome 2',
            'REF_PES_AFINIDADE_2' => 'Ref  Pes  Afinidade 2',
            'REF_PES_TELEFONE_2' => 'Ref  Pes  Telefone 2',
            'REF_PES_CELULAR_2' => 'Ref  Pes  Celular 2',
            'REF_PES_NOME_3' => 'Ref  Pes  Nome 3',
            'REF_PES_AFINIDADE_3' => 'Ref  Pes  Afinidade 3',
            'REF_PES_TELEFONE_3' => 'Ref  Pes  Telefone 3',
            'REF_PES_CELULAR_3' => 'Ref  Pes  Celular 3',
            'VALOR_VEICULO' => 'Valor  Veiculo',
            'VALOR_FINANCIADO' => 'Valor  Financiado',
            'ENTRADA' => 'Entrada',
            'PRAZO' => 'Prazo',
            'PRESTACAO' => 'Prestacao',
            'VENC_PRI_PARC' => 'Venc  Pri  Parc',
            'PRODUTO' => 'Produto',
            'TABELA' => 'Tabela',
            'CARENCIA' => 'Carencia',
            'CONTRATO' => 'Contrato',
            'COEFICIENTE' => 'Coeficiente',
            'FORMA_PAGAMENTO' => 'Forma  Pagamento',
            'TARIFAS' => 'Tarifas',
            'MARCA_MODELO' => 'Marca  Modelo',
            'MODELO_VEICULO' => 'Modelo  Veiculo',
            'TIPO_VEICULO' => 'Tipo  Veiculo',
            'COMBUSTIVEL' => 'Combustivel',
            'ANO' => 'Ano',
            'PORTAS' => 'Portas',
            'PLACA' => 'Placa',
            'RENAVAN' => 'Renavan',
            'CHASSI' => 'Chassi',
            'SITUACAO_ATUAL' => 'Situacao  Atual',
            'OBSERVACAO_LOJISTA' => 'Observacao  Lojista',
            'DATA_ENVIO' => 'Data  Envio',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'VALOR_ENTRADA' => 'Valor  Entrada',
        ];
    }
}
