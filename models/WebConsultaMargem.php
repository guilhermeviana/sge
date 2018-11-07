<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_consulta_margem".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property int $CLIENTE
 * @property string $DATA
 * @property double $MARGEM
 * @property string $OBSERVACAO
 * @property int $EXCLUIDO
 */
class WebConsultaMargem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_consulta_margem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'CLIENTE', 'EXCLUIDO'], 'integer'],
            [['DATA'], 'safe'],
            [['MARGEM'], 'number'],
            [['OBSERVACAO'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'REGISTRO' => 'Registro',
            'CORRETOR' => 'Corretor',
            'CLIENTE' => 'Cliente',
            'DATA' => 'Data',
            'MARGEM' => 'Margem',
            'OBSERVACAO' => 'Observacao',
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
