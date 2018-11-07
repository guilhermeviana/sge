<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movregra".
 *
 * @property int $REGISTRO
 * @property int $REGISTRO_ALTERACAO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property int $REGRA
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Movregra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movregra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['REGISTRO_ALTERACAO', 'PRODUTO', 'CATEGORIA', 'REGRA', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
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
            'REGISTRO_ALTERACAO' => 'Registro  Alteracao',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'REGRA' => 'Regra',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
