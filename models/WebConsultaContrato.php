<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_consulta_contrato".
 *
 * @property int $REGISTRO
 * @property int $CORRETOR
 * @property int $CLIENTE
 * @property string $DATA
 * @property int $EXCLUIDO
 */
class WebConsultaContrato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_consulta_contrato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CORRETOR', 'CLIENTE', 'EXCLUIDO'], 'integer'],
            [['DATA'], 'safe'],
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
            'EXCLUIDO' => 'Excluido',
        ];
    }
}
