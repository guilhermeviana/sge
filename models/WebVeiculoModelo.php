<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_veiculo_modelo".
 *
 * @property string $REGISTRO
 * @property string $NOME
 * @property string $MARCA
 * @property int $TIPO_VEICULO
 */
class WebVeiculoModelo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_veiculo_modelo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO'], 'required'],
            [['TIPO_VEICULO'], 'integer'],
            [['REGISTRO', 'MARCA'], 'string', 'max' => 100],
            [['NOME'], 'string', 'max' => 255],
            [['REGISTRO'], 'unique'],
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
            'MARCA' => 'Marca',
            'TIPO_VEICULO' => 'Tipo  Veiculo',
        ];
    }
}
