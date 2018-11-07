<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meta_venda_captador".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property int $CAPTADOR
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
class MetaVendaCaptador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meta_venda_captador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CAPTADOR', 'TIPO_PRODUTO', 'PRODUTO', 'CATEGORIA', 'EXCLUIDO'], 'integer'],
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
            'CAPTADOR' => 'Captador',
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
