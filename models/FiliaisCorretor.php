<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "filiais_corretor".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property string $CODIGO_LOJA
 * @property string $NOME
 * @property string $ENDERECO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property string $TELEFONE
 * @property string $CONTATO
 * @property int $EXCLUIDO
 */
class FiliaisCorretor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filiais_corretor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'EXCLUIDO'], 'integer'],
            [['CODIGO_LOJA'], 'string', 'max' => 20],
            [['NOME', 'ENDERECO', 'CONTATO'], 'string', 'max' => 100],
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
            'CORRETOR' => 'Corretor',
            'CODIGO_LOJA' => 'Codigo  Loja',
            'NOME' => 'Nome',
            'ENDERECO' => 'Endereco',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'UF' => 'Uf',
            'TELEFONE' => 'Telefone',
            'CONTATO' => 'Contato',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
