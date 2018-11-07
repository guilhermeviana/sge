<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_produtos_simulador".
 *
 * @property int $REGISTRO
 * @property int $TIPO_PRODUTO
 * @property int $PRODUTO_SCE
 * @property string $PRODUTO
 * @property double $MARGEM_SEG
 * @property int $TIPO_MARGEM
 * @property double $SEGURO
 * @property double $MARGEM_MINIMA
 * @property int $TIPO_MARGEM_MINIMA
 * @property string $INFORMACOES
 */
class WebProdutosSimulador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_produtos_simulador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO_PRODUTO', 'PRODUTO_SCE', 'TIPO_MARGEM', 'TIPO_MARGEM_MINIMA'], 'integer'],
            [['MARGEM_SEG', 'SEGURO', 'MARGEM_MINIMA'], 'number'],
            [['INFORMACOES'], 'string'],
            [['PRODUTO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'TIPO_PRODUTO' => 'Tipo  Produto',
            'PRODUTO_SCE' => 'Produto  Sce',
            'PRODUTO' => 'Produto',
            'MARGEM_SEG' => 'Margem  Seg',
            'TIPO_MARGEM' => 'Tipo  Margem',
            'SEGURO' => 'Seguro',
            'MARGEM_MINIMA' => 'Margem  Minima',
            'TIPO_MARGEM_MINIMA' => 'Tipo  Margem  Minima',
            'INFORMACOES' => 'Informacoes',
        ];
    }
}
