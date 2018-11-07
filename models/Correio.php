<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "correio".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property string $ASSUNTO
 * @property string $CORPO
 * @property int $ENVIADO
 * @property string $DATAENVIO
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Correio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'correio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'ENVIADO', 'EXCLUIDO'], 'integer'],
            [['CORPO'], 'string'],
            [['DATAENVIO', 'DATAREGISTRO'], 'safe'],
            [['ASSUNTO'], 'string', 'max' => 255],
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
            'ASSUNTO' => 'Assunto',
            'CORPO' => 'Corpo',
            'ENVIADO' => 'Enviado',
            'DATAENVIO' => 'Dataenvio',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
