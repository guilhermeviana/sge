<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forma_divulgacao".
 *
 * @property int $REGISTRO
 * @property int $DIVULGACAO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class FormaDivulgacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'forma_divulgacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DIVULGACAO', 'EXCLUIDO'], 'integer'],
            [['OBSERVACAO'], 'string'],
            [['DESCRICAO'], 'string', 'max' => 50],
            [['REFERENCIA'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DIVULGACAO' => 'Divulgacao',
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
