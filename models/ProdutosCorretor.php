<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos_corretor".
 *
 * @property int $CORRETOR
 * @property int $PRODUTO
 */
class ProdutosCorretor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos_corretor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'PRODUTO'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CORRETOR' => 'Corretor',
            'PRODUTO' => 'Produto',
        ];
    }
}
