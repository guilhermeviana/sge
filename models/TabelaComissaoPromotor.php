<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabela_comissao_promotor".
 *
 * @property int $REGISTRO
 * @property int $PROMOTOR
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property double $COMISSAO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 * @property int $REGRA
 */
class TabelaComissaoPromotor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela_comissao_promotor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PROMOTOR', 'PRODUTO', 'CATEGORIA', 'EXCLUIDO', 'REGRA'], 'integer'],
            [['COMISSAO'], 'number'],
            [['USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'PROMOTOR' => 'Promotor',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'COMISSAO' => 'Comissao',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
            'REGRA' => 'Regra',
        ];
    }
}
