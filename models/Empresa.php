<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $REGISTRO
 * @property string $NOME
 * @property string $RAZAO_SOCIAL
 * @property string $CNPJ
 * @property string $FONE
 * @property string $FAX
 * @property string $ENDERECO
 * @property int $NUMERO
 * @property string $COMPLEMENTO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $CEP
 * @property string $ENDERECO_NOTA
 * @property string $NUMERO_NOTA
 * @property string $COMPLEMENTO_NOTA
 * @property string $BAIRRO_NOTA
 * @property string $CIDADE_NOTA
 * @property string $UF_NOTA
 * @property string $CEP_NOTA
 * @property string $EMAIL
 * @property string $SERIAL
 * @property string $ACESSO
 * @property int $ESPECIAL
 * @property int $EXCLUIDO
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NUMERO', 'ESPECIAL', 'EXCLUIDO'], 'integer'],
            [['ACESSO'], 'string'],
            [['NOME', 'RAZAO_SOCIAL', 'BAIRRO', 'CIDADE', 'BAIRRO_NOTA', 'CIDADE_NOTA'], 'string', 'max' => 50],
            [['CNPJ', 'FONE', 'FAX', 'COMPLEMENTO', 'COMPLEMENTO_NOTA'], 'string', 'max' => 20],
            [['ENDERECO', 'ENDERECO_NOTA'], 'string', 'max' => 100],
            [['UF', 'UF_NOTA'], 'string', 'max' => 2],
            [['CEP', 'CEP_NOTA'], 'string', 'max' => 10],
            [['NUMERO_NOTA'], 'string', 'max' => 5],
            [['EMAIL', 'SERIAL'], 'string', 'max' => 255],
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
            'RAZAO_SOCIAL' => 'Razao  Social',
            'CNPJ' => 'Cnpj',
            'FONE' => 'Fone',
            'FAX' => 'Fax',
            'ENDERECO' => 'Endereco',
            'NUMERO' => 'Numero',
            'COMPLEMENTO' => 'Complemento',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'CEP' => 'Cep',
            'ENDERECO_NOTA' => 'Endereco  Nota',
            'NUMERO_NOTA' => 'Numero  Nota',
            'COMPLEMENTO_NOTA' => 'Complemento  Nota',
            'BAIRRO_NOTA' => 'Bairro  Nota',
            'CIDADE_NOTA' => 'Cidade  Nota',
            'UF_NOTA' => 'Uf  Nota',
            'CEP_NOTA' => 'Cep  Nota',
            'EMAIL' => 'Email',
            'SERIAL' => 'Serial',
            'ACESSO' => 'Acesso',
            'ESPECIAL' => 'Especial',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
