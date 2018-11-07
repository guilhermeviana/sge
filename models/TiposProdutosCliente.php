<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos_produtos_cliente".
 *
 * @property int $CLIENTE
 * @property int $TIPO_PRODUTO
 */
class TiposProdutosCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipos_produtos_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'TIPO_PRODUTO'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CLIENTE' => 'Cliente',
            'TIPO_PRODUTO' => 'Tipo  Produto',
        ];
    }
}
