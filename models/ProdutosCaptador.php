<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos_captador".
 *
 * @property int $CAPTADOR
 * @property int $PRODUTO
 */
class ProdutosCaptador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos_captador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CAPTADOR', 'PRODUTO'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CAPTADOR' => 'Captador',
            'PRODUTO' => 'Produto',
        ];
    }
}
