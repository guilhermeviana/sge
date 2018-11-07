<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movparcelas".
 *
 * @property int $REGISTRO
 * @property int $SYNCBOT
 * @property int $PARCELA
 * @property string $DESCRICAO
 * @property string $DATA
 * @property double $VALORPAGO
 * @property string $USUARIO
 * @property int $EXCLUIDO
 */
class Movparcelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movparcelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['SYNCBOT', 'PARCELA', 'EXCLUIDO'], 'integer'],
            [['DATA'], 'safe'],
            [['VALORPAGO'], 'number'],
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
            'SYNCBOT' => 'Syncbot',
            'PARCELA' => 'Parcela',
            'DESCRICAO' => 'Descricao',
            'DATA' => 'Data',
            'VALORPAGO' => 'Valorpago',
            'USUARIO' => 'Usuario',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
