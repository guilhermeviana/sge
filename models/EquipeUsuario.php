<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipe_usuario".
 *
 * @property string $USUARIO
 * @property int $EQUIPE
 * @property string $DATAREGISTRO
 * @property string $USUARIO_REGISTRO
 * @property int $EXCLUIDO
 */
class EquipeUsuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipe_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EQUIPE', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['USUARIO', 'USUARIO_REGISTRO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USUARIO' => 'Usuario',
            'EQUIPE' => 'Equipe',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO_REGISTRO' => 'Usuario  Registro',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
