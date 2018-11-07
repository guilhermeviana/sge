<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eventos_telemarketing".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property int $ACAO
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class EventosTelemarketing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eventos_telemarketing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ACAO', 'EXCLUIDO'], 'integer'],
            [['OBSERVACAO'], 'string'],
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
            'ACAO' => 'Acao',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
