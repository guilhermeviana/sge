<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "divulgacao".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $OBSERVACAO
 * @property int $OBRIGA
 * @property int $EXCLUIDO
 */
class Divulgacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'divulgacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['OBRIGA', 'EXCLUIDO'], 'integer'],
            [['DESCRICAO'], 'string', 'max' => 50],
            [['REFERENCIA'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'OBSERVACAO' => 'Observacao',
            'OBRIGA' => 'Obriga',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
