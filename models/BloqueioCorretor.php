<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bloqueio_corretor".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property int $BLOQUEADO
 * @property string $MOTIVO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BloqueioCorretor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bloqueio_corretor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'BLOQUEADO', 'EXCLUIDO'], 'integer'],
            [['MOTIVO'], 'string'],
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
            'BLOQUEADO' => 'Bloqueado',
            'MOTIVO' => 'Motivo',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
