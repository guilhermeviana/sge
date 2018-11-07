<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regional".
 *
 * @property int $REGISTRO
 * @property string $REGIONAL
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class Regional extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regional';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['EXCLUIDO'], 'integer'],
            [['REGIONAL'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'REGIONAL' => 'Regional',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
