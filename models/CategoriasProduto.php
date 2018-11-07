<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias_produto".
 *
 * @property int $PRODUTO
 * @property int $CATEGORIA
 */
class CategoriasProduto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categorias_produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CATEGORIA'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
        ];
    }
}
