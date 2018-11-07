<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $REGISTRO
 * @property int $EMPRESA
 * @property int $STATUS
 * @property string $NOME
 * @property string $NASCIMENTO
 * @property string $CPFCNPJ
 * @property string $IDENTIDADE
 * @property string $TELEFONE_RES
 * @property string $TELEFONE_CEL
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $CEP
 * @property string $FUNCAO
 * @property string $DATA_ADMISSAO
 * @property string $DATA_AVISO_PREVIO
 * @property string $DATA_DEMISSAO
 * @property string $DATA_FERIAS
 * @property double $VLR_VALE_ALIMENTACAO
 * @property double $VLR_VALE_TRANSPORTE
 * @property string $TIPO_CARTAO
 * @property string $CBO
 * @property string $CARGO
 * @property string $PIS
 * @property string $CTPS
 * @property string $UF_CTPS
 * @property double $SALARIO
 * @property int $TIPO_CONTA
 * @property string $USUARIO_REF
 * @property int $HORARIO_TRABALHO
 * @property int $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property string $OBSERVACAO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property int $TIPO_CONTATO
 * @property int $AVISO_ANIVERSARIO
 * @property string $TELEFONE_COM
 * @property string $FAX
 * @property string $INSTITUICAO
 * @property string $EMAIL
 * @property string $PAI
 * @property string $MAE
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESA', 'STATUS', 'TIPO_CONTA', 'HORARIO_TRABALHO', 'BANCO', 'EXCLUIDO', 'TIPO_CONTATO', 'AVISO_ANIVERSARIO'], 'integer'],
            [['NASCIMENTO', 'DATA_ADMISSAO', 'DATA_AVISO_PREVIO', 'DATA_DEMISSAO', 'DATA_FERIAS', 'DATAREGISTRO'], 'safe'],
            [['VLR_VALE_ALIMENTACAO', 'VLR_VALE_TRANSPORTE', 'SALARIO'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['NOME', 'ENDERECO', 'CARGO', 'EMAIL', 'PAI', 'MAE'], 'string', 'max' => 100],
            [['CPFCNPJ'], 'string', 'max' => 14],
            [['IDENTIDADE', 'PIS', 'CTPS', 'CONTA'], 'string', 'max' => 15],
            [['TELEFONE_RES', 'TELEFONE_CEL', 'FAX'], 'string', 'max' => 12],
            [['BAIRRO', 'CIDADE', 'FUNCAO', 'TIPO_CARTAO', 'USUARIO_REF', 'USUARIO', 'INSTITUICAO'], 'string', 'max' => 50],
            [['UF', 'UF_CTPS'], 'string', 'max' => 2],
            [['CEP'], 'string', 'max' => 8],
            [['CBO', 'AGENCIA', 'TELEFONE_COM'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'EMPRESA' => 'Empresa',
            'STATUS' => 'Status',
            'NOME' => 'Nome',
            'NASCIMENTO' => 'Nascimento',
            'CPFCNPJ' => 'Cpfcnpj',
            'IDENTIDADE' => 'Identidade',
            'TELEFONE_RES' => 'Telefone  Res',
            'TELEFONE_CEL' => 'Telefone  Cel',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'CEP' => 'Cep',
            'FUNCAO' => 'Funcao',
            'DATA_ADMISSAO' => 'Data  Admissao',
            'DATA_AVISO_PREVIO' => 'Data  Aviso  Previo',
            'DATA_DEMISSAO' => 'Data  Demissao',
            'DATA_FERIAS' => 'Data  Ferias',
            'VLR_VALE_ALIMENTACAO' => 'Vlr  Vale  Alimentacao',
            'VLR_VALE_TRANSPORTE' => 'Vlr  Vale  Transporte',
            'TIPO_CARTAO' => 'Tipo  Cartao',
            'CBO' => 'Cbo',
            'CARGO' => 'Cargo',
            'PIS' => 'Pis',
            'CTPS' => 'Ctps',
            'UF_CTPS' => 'Uf  Ctps',
            'SALARIO' => 'Salario',
            'TIPO_CONTA' => 'Tipo  Conta',
            'USUARIO_REF' => 'Usuario  Ref',
            'HORARIO_TRABALHO' => 'Horario  Trabalho',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'OBSERVACAO' => 'Observacao',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'TIPO_CONTATO' => 'Tipo  Contato',
            'AVISO_ANIVERSARIO' => 'Aviso  Aniversario',
            'TELEFONE_COM' => 'Telefone  Com',
            'FAX' => 'Fax',
            'INSTITUICAO' => 'Instituicao',
            'EMAIL' => 'Email',
            'PAI' => 'Pai',
            'MAE' => 'Mae',
        ];
    }
}
