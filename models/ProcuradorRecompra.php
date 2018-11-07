<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "procurador_recompra".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property double $COMISSAO
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class ProcuradorRecompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'procurador_recompra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['COMISSAO'], 'number'],
            [['OBSERVACAO'], 'string'],
            [['EXCLUIDO'], 'integer'],
            [['DESCRICAO'], 'string', 'max' => 100],
            [['REFERENCIA'], 'string', 'max' => 50],
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
            'COMISSAO' => 'Comissao',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
