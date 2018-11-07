<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios_captador".
 *
 * @property int $CAPTADOR
 * @property string $USUARIO
 */
class UsuariosCaptador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios_captador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CAPTADOR'], 'integer'],
            [['USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CAPTADOR' => 'Captador',
            'USUARIO' => 'Usuario',
        ];
    }
}
