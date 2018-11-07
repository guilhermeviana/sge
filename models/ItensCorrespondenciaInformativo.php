<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_correspondencia_informativo".
 *
 * @property int $REGISTRO
 * @property int $CORRESPONDENCIA
 * @property string $NUMERO
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class ItensCorrespondenciaInformativo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_correspondencia_informativo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRESPONDENCIA', 'EXCLUIDO'], 'integer'],
            [['OBSERVACAO'], 'string'],
            [['NUMERO'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CORRESPONDENCIA' => 'Correspondencia',
            'NUMERO' => 'Numero',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
