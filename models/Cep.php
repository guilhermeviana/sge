<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cep".
 *
 * @property int $REGISTRO
 * @property string $LOGRADOURO
 * @property string $CEP
 * @property string $UF
 * @property string $COMPLEMENTO
 * @property string $CIDADE
 * @property string $BAIRRO
 * @property string $DENOMINACAO
 */
class Cep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LOGRADOURO', 'CIDADE', 'DENOMINACAO'], 'string', 'max' => 100],
            [['CEP'], 'string', 'max' => 8],
            [['UF'], 'string', 'max' => 2],
            [['COMPLEMENTO'], 'string', 'max' => 20],
            [['BAIRRO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'LOGRADOURO' => 'Logradouro',
            'CEP' => 'Cep',
            'UF' => 'Uf',
            'COMPLEMENTO' => 'Complemento',
            'CIDADE' => 'Cidade',
            'BAIRRO' => 'Bairro',
            'DENOMINACAO' => 'Denominacao',
        ];
    }
}
