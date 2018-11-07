<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feriados".
 *
 * @property int $REGISTRO
 * @property string $DIA
 * @property string $FERIADO
 * @property int $EXCLUIDO
 */
class Feriados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feriados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EXCLUIDO'], 'integer'],
            [['DIA'], 'string', 'max' => 10],
            [['FERIADO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DIA' => 'Dia',
            'FERIADO' => 'Feriado',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
