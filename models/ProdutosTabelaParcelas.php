<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos_tabela_parcelas".
 *
 * @property int $TABELA
 * @property int $PRODUTO
 */
class ProdutosTabelaParcelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos_tabela_parcelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TABELA', 'PRODUTO'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TABELA' => 'Tabela',
            'PRODUTO' => 'Produto',
        ];
    }
}
