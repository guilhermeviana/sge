<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_veiculo_marca".
 *
 * @property string $REGISTRO
 * @property string $NOME
 * @property int $TIPO_VEICULO
 */
class WebVeiculoMarca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_veiculo_marca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO'], 'required'],
            [['TIPO_VEICULO'], 'integer'],
            [['REGISTRO'], 'string', 'max' => 100],
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
            'TIPO_VEICULO' => 'Tipo  Veiculo',
        ];
    }
}
