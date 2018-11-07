<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movpendencia".
 *
 * @property int $REGISTRO
 * @property int $PENDENCIA
 * @property string $DESCRICAO
 * @property string $DATA
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Movpendencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movpendencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PENDENCIA', 'EXCLUIDO'], 'integer'],
            [['DATA'], 'safe'],
            [['DESCRICAO'], 'string', 'max' => 255],
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
            'PENDENCIA' => 'Pendencia',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
