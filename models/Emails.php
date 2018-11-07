<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emails".
 *
 * @property int $REGISTRO
 * @property int $TIPO
 * @property int $ESTADO
 * @property string $DESCRICAO
 * @property string $ASSUNTO
 * @property int $CORRETOR
 * @property string $DESTINATARIO
 * @property string $EMAIL_DESTINATARIO
 * @property string $CORPO_EMAIL
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Emails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emails';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPO', 'ESTADO', 'CORRETOR', 'EXCLUIDO'], 'integer'],
            [['CORPO_EMAIL'], 'string'],
            [['DATAREGISTRO'], 'safe'],
            [['DESCRICAO', 'DESTINATARIO'], 'string', 'max' => 100],
            [['ASSUNTO', 'EMAIL_DESTINATARIO'], 'string', 'max' => 255],
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
            'TIPO' => 'Tipo',
            'ESTADO' => 'Estado',
            'DESCRICAO' => 'Descricao',
            'ASSUNTO' => 'Assunto',
            'CORRETOR' => 'Corretor',
            'DESTINATARIO' => 'Destinatario',
            'EMAIL_DESTINATARIO' => 'Email  Destinatario',
            'CORPO_EMAIL' => 'Corpo  Email',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
