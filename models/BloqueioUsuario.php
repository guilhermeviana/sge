<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bloqueio_usuario".
 *
 * @property int $REGISTRO
 * @property string $NOME_USUARIO
 * @property int $BLOQUEADO
 * @property string $MOTIVO
 * @property int $PENDENCIA
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class BloqueioUsuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bloqueio_usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['BLOQUEADO', 'PENDENCIA', 'EXCLUIDO'], 'integer'],
            [['MOTIVO'], 'string'],
            [['DATAREGISTRO'], 'safe'],
            [['NOME_USUARIO', 'USUARIO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'NOME_USUARIO' => 'Nome  Usuario',
            'BLOQUEADO' => 'Bloqueado',
            'MOTIVO' => 'Motivo',
            'PENDENCIA' => 'Pendencia',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
