<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rubrica".
 *
 * @property int $REGISTRO
 * @property int $EMPRESA
 * @property int $TIPO
 * @property string $RUBRICA
 * @property string $DATAREGISTRO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Rubrica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rubrica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EMPRESA', 'TIPO', 'EXCLUIDO'], 'integer'],
            [['DATAREGISTRO'], 'safe'],
            [['RUBRICA'], 'string', 'max' => 10],
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
            'EMPRESA' => 'Empresa',
            'TIPO' => 'Tipo',
            'RUBRICA' => 'Rubrica',
            'DATAREGISTRO' => 'Dataregistro',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
