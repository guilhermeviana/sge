<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_veiculo_ano_modelo".
 *
 * @property string $REGISTRO
 * @property string $NOME
 * @property string $MODELO
 * @property double $VALOR
 * @property int $TIPO_VEICULO
 */
class WebVeiculoAnoModelo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_veiculo_ano_modelo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO'], 'required'],
            [['VALOR'], 'number'],
            [['TIPO_VEICULO'], 'integer'],
            [['REGISTRO', 'MODELO'], 'string', 'max' => 100],
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
            'MODELO' => 'Modelo',
            'VALOR' => 'Valor',
            'TIPO_VEICULO' => 'Tipo  Veiculo',
        ];
    }
}
