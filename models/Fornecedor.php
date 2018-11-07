<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fornecedor".
 *
 * @property int $REGISTRO
 * @property string $RAZAO_SOCIAL
 * @property string $CPFCNPJ
 * @property string $IESTADUAL
 * @property string $TELEFONE_COM
 * @property string $TELEFONE_FAX
 * @property string $TELEFONE_CON
 * @property string $CONTATO
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $CEP
 * @property string $OBSERVACAO
 * @property int $TIPO_CONTA
 * @property int $BANCO
 * @property string $AGENCIA
 * @property string $CONTA
 * @property int $EMPRESA
 * @property int $EXCLUIDO
 */
class Fornecedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fornecedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['TIPO_CONTA', 'BANCO', 'EMPRESA', 'EXCLUIDO'], 'integer'],
            [['RAZAO_SOCIAL', 'CONTATO', 'ENDERECO'], 'string', 'max' => 100],
            [['CPFCNPJ'], 'string', 'max' => 14],
            [['IESTADUAL', 'CONTA'], 'string', 'max' => 15],
            [['TELEFONE_COM', 'TELEFONE_FAX', 'TELEFONE_CON'], 'string', 'max' => 12],
            [['BAIRRO', 'CIDADE'], 'string', 'max' => 50],
            [['UF'], 'string', 'max' => 2],
            [['CEP', 'AGENCIA'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'RAZAO_SOCIAL' => 'Razao  Social',
            'CPFCNPJ' => 'Cpfcnpj',
            'IESTADUAL' => 'Iestadual',
            'TELEFONE_COM' => 'Telefone  Com',
            'TELEFONE_FAX' => 'Telefone  Fax',
            'TELEFONE_CON' => 'Telefone  Con',
            'CONTATO' => 'Contato',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'CEP' => 'Cep',
            'OBSERVACAO' => 'Observacao',
            'TIPO_CONTA' => 'Tipo  Conta',
            'BANCO' => 'Banco',
            'AGENCIA' => 'Agencia',
            'CONTA' => 'Conta',
            'EMPRESA' => 'Empresa',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
