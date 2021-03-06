<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_status_proposta".
 *
 * @property int $REGISTRO
 * @property string $DESCRICAO
 * @property string $REFERENCIA
 * @property string $OBSERVACAO
 * @property int $ACAO
 * @property int $EXCLUIDO
 */
class WebStatusProposta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_status_proposta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OBSERVACAO'], 'string'],
            [['ACAO', 'EXCLUIDO'], 'integer'],
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
            'DESCRICAO' => 'Descricao',
            'REFERENCIA' => 'Referencia',
            'OBSERVACAO' => 'Observacao',
            'ACAO' => 'Acao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
