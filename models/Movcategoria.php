<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movcategoria".
 *
 * @property int $REGISTRO
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Movcategoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movcategoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRODUTO', 'CATEGORIA', 'EXCLUIDO'], 'integer'],
            [['DATA'], 'safe'],
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
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
