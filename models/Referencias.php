<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "referencias".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property string $DESCRICAO
 * @property string $NOME
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $TELEFONE
 * @property int $EXCLUIDO
 */
class Referencias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referencias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'EXCLUIDO'], 'integer'],
            [['DESCRICAO', 'NOME', 'ENDERECO'], 'string', 'max' => 100],
            [['BAIRRO', 'CIDADE'], 'string', 'max' => 50],
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
            'CLIENTE' => 'Cliente',
            'DESCRICAO' => 'Descricao',
            'NOME' => 'Nome',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'TELEFONE' => 'Telefone',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
