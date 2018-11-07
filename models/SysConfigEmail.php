<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sys_config_email".
 *
 * @property int $REGISTRO
 * @property int $EMPRESA
 * @property int $EVENTO
 * @property string $EMAIL
 * @property string $SMTP
 * @property int $PORTA_SMTP
 * @property int $USA_AUTENTICACAO
 * @property string $USUARIO
 * @property string $SENHA
 * @property string $CCO
 * @property int $EXCLUIDO
 */
class SysConfigEmail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sys_config_email';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESA', 'EVENTO', 'PORTA_SMTP', 'USA_AUTENTICACAO', 'EXCLUIDO'], 'integer'],
            [['CCO'], 'string'],
            [['EMAIL', 'SMTP', 'USUARIO', 'SENHA'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'EMPRESA' => 'Empresa',
            'EVENTO' => 'Evento',
            'EMAIL' => 'Email',
            'SMTP' => 'Smtp',
            'PORTA_SMTP' => 'Porta  Smtp',
            'USA_AUTENTICACAO' => 'Usa  Autenticacao',
            'USUARIO' => 'Usuario',
            'SENHA' => 'Senha',
            'CCO' => 'Cco',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
