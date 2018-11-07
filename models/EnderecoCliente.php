<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco_cliente".
 *
 * @property int $REGISTRO
 * @property int $ATIVO
 * @property int $CONSULTA
 * @property int $CLIENTE
 * @property string $ENDERECO
 * @property string $NUMERO
 * @property string $COMPLEMENTO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $CEP
 * @property string $TIPO_ENDERECO
 * @property string $TELEFONE
 * @property string $DATA_REGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class EnderecoCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'endereco_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATIVO', 'CONSULTA', 'CLIENTE', 'EXCLUIDO'], 'integer'],
            [['DATA_REGISTRO'], 'safe'],
            [['ENDERECO'], 'string', 'max' => 100],
            [['NUMERO', 'CEP'], 'string', 'max' => 10],
            [['COMPLEMENTO'], 'string', 'max' => 20],
            [['BAIRRO', 'CIDADE', 'TIPO_ENDERECO', 'USUARIO'], 'string', 'max' => 50],
            [['UF'], 'string', 'max' => 2],
            [['TELEFONE'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'ATIVO' => 'Ativo',
            'CONSULTA' => 'Consulta',
            'CLIENTE' => 'Cliente',
            'ENDERECO' => 'Endereco',
            'NUMERO' => 'Numero',
            'COMPLEMENTO' => 'Complemento',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'CEP' => 'Cep',
            'TIPO_ENDERECO' => 'Tipo  Endereco',
            'TELEFONE' => 'Telefone',
            'DATA_REGISTRO' => 'Data  Registro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
