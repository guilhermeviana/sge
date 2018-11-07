<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cidades".
 *
 * @property int $REGISTRO
 * @property string $UF
 * @property string $MUNICIPIO
 * @property string $DDD
 */
class Cidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UF', 'DDD'], 'string', 'max' => 2],
            [['MUNICIPIO'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'UF' => 'Uf',
            'MUNICIPIO' => 'Municipio',
            'DDD' => 'Ddd',
        ];
    }
}
