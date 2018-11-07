<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banco".
 *
 * @property int $REGISTRO
 * @property string $NUMERO
 * @property string $BANCO
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class Banco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['EXCLUIDO'], 'integer'],
            [['NUMERO'], 'string', 'max' => 3],
            [['BANCO'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'NUMERO' => 'Numero',
            'BANCO' => 'Banco',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
