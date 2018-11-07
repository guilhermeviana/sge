<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendencia".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $OBSERVACAO
 * @property int $BLOQUEIA_COMISSAO
 * @property int $EXCLUIDO
 */
class Pendencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['BLOQUEIA_COMISSAO', 'EXCLUIDO'], 'integer'],
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
            'BLOQUEIA_COMISSAO' => 'Bloqueia  Comissao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
