<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bloqueio_cliente".
 *
 * @property int $REGISTRO
 * @property int $CLIENTE
 * @property int $BLOQUEADO
 * @property string $MOTIVO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BloqueioCliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bloqueio_cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLIENTE', 'BLOQUEADO', 'EXCLUIDO'], 'integer'],
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
            'CLIENTE' => 'Cliente',
            'BLOQUEADO' => 'Bloqueado',
            'MOTIVO' => 'Motivo',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
