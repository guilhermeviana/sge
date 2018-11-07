<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seguradora".
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
 * @property string $LOGOTIPO
 * @property int $EMPRESA
 * @property int $EXCLUIDO
 */
class Seguradora extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seguradora';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['EMPRESA', 'EXCLUIDO'], 'integer'],
            [['RAZAO_SOCIAL', 'CONTATO', 'ENDERECO'], 'string', 'max' => 100],
            [['CPFCNPJ'], 'string', 'max' => 14],
            [['IESTADUAL'], 'string', 'max' => 15],
            [['TELEFONE_COM', 'TELEFONE_FAX', 'TELEFONE_CON'], 'string', 'max' => 12],
            [['BAIRRO', 'CIDADE'], 'string', 'max' => 50],
            [['UF'], 'string', 'max' => 2],
            [['CEP'], 'string', 'max' => 10],
            [['LOGOTIPO'], 'string', 'max' => 255],
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
            'LOGOTIPO' => 'Logotipo',
            'EMPRESA' => 'Empresa',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
