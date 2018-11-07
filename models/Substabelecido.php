<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "substabelecido".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property int $PRODUTO
 * @property int $CATEGORIA
 * @property double $PERCENTUAL
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Substabelecido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'substabelecido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'PRODUTO', 'CATEGORIA', 'EXCLUIDO'], 'integer'],
            [['PERCENTUAL'], 'number'],
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
            'CORRETOR' => 'Corretor',
            'PRODUTO' => 'Produto',
            'CATEGORIA' => 'Categoria',
            'PERCENTUAL' => 'Percentual',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
