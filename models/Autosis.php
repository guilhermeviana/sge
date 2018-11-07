<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autosis".
 *
 * @property int $REGISTRO
 * @property string $DATA
 * @property string $OPERACAO
 * @property int $EXCLUIDO
 */
class Autosis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'autosis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DATA'], 'safe'],
            [['EXCLUIDO'], 'integer'],
            [['OPERACAO'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DATA' => 'Data',
            'OPERACAO' => 'Operacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
