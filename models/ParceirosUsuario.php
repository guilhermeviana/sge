<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parceiros_usuario".
 *
 * @property string $USUARIO
 * @property int $PARCEIRO
 */
class ParceirosUsuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parceiros_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARCEIRO'], 'integer'],
            [['USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USUARIO' => 'Usuario',
            'PARCEIRO' => 'Parceiro',
        ];
    }
}
