<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meta_venda_corretor".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property int $CORRETOR
 * @property int $TIPO_PRODUTO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property double $VALOR
 * @property string $INICIO
 * @property string $FINAL
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class MetaVendaCorretor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meta_venda_corretor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'TIPO_PRODUTO', 'PRODUTO', 'CATEGORIA', 'EXCLUIDO'], 'integer'],
            [['VALOR'], 'number'],
            [['INICIO', 'FINAL', 'DATAREGISTRO'], 'safe'],
            [['DESCRICAO'], 'string', 'max' => 100],
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
            'DESCRICAO' => 'Descricao',
            'CORRETOR' => 'Corretor',
            'TIPO_PRODUTO' => 'Tipo  Produto',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'VALOR' => 'Valor',
            'INICIO' => 'Inicio',
            'FINAL' => 'Final',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
